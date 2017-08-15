<?php

namespace Phwoolcon\DeployAutomator\Controllers\Webhooks;

use Config;
use Phwoolcon\Controller;
use Phwoolcon\DeployAutomator\Deployer;
use Phwoolcon\Payload;

class GitlabController extends Controller
{
    use Controller\Api;

    /**
     * @var Deployer
     */
    protected $deployer;

    public function postPush()
    {
        /*
         * Request data sample:

        $_SERVER = [
            'HTTP_X_GITLAB_TOKEN' => 'YourXxoOToKEN',
            'HTTP_X_GITLAB_EVENT' => 'Push Hook',
            'HTTP_CONTENT_TYPE' => 'application/json',
            'REQUEST_URI' => '/webhooks/gitlab/push?id=YourXxoOId',
            'REQUEST_METHOD' => 'POST',
            'QUERY_STRING' => 'id=YourXxoOId',
        ];

        $_REQUEST = [
            'id' => 'YourXxoOId',
        ];

        $phpInput = '{
            "object_kind": "push",
            "event_name": "push",
            "before": "previous_commit_sha1_id",
            "after": "current_commit_sha1_id",
            "ref": "refs/heads/master",
            "checkout_sha": "current_commit_sha1_id",
            "message": null,
            "user_id": 654321,
            "user_name": "Gitlab User",
            "user_username": "gitlab_user",
            "user_email": "user@gitlab.com",
            "user_avatar": "https://secure.gravatar.com/avatar/xxoo",
            "project_id": 123456,
            "project": {
                "name": "xxoo",
                "description": "You XXoo project",
                "web_url": "https://gitlab.com/xx/oo",
                "avatar_url": null,
                "git_ssh_url": "git@gitlab.com:xx/oo.git",
                "git_http_url": "https://gitlab.com/xx/oo.git",
                "namespace": "xx",
                "visibility_level": 0,
                "path_with_namespace": "xx/oo",
                "default_branch": "master",
                "ci_config_path": null,
                "homepage": "https://gitlab.com/xx/oo",
                "url": "git@gitlab.com:xx/oo.git",
                "ssh_url": "git@gitlab.com:xx/oo.git",
                "http_url": "https://gitlab.com/xx/oo.git"
            },
            "commits": [
                {
                    "id": "current_commit_sha1_id",
                    "message": "another xxoo commit message",
                    "timestamp": "2017-08-10T10:00:00+08:00",
                    "url": "https://gitlab.com/xx/oo/commit/current_commit_sha1_id",
                    "author": {"name": "gitlab_user", "email": "user@gitlab.com"},
                    "added": ["file/list/1.php", "file/list/2.js"],
                    "modified": ["file/list/3.php", "file/list/4.js"],
                    "removed": ["file/list/5.php", "file/list/6.js"]
                },
                {
                    "id": "previous_commit_sha1_id",
                    "message": "some xxoo commit message",
                    "timestamp": "2017-08-09T10:00:00+08:00",
                    "url": "https://gitlab.com/xx/oo/commit/previous_commit_sha1_id",
                    "author": {"name": "gitlab_user", "email": "user@gitlab.com"},
                    "added": [],
                    "modified": ["file/list/3.php", "file/list/4.js"],
                    "removed": []
                }
            ],
            "total_commits_count": 2,
            "repository": {
                "name": "oo",
                "url": "git@gitlab.com:xx/oo.git",
                "description": "You XXoo project",
                "homepage": "https://gitlab.com/xx/oo",
                "git_http_url": "https://gitlab.com/xx/oo.git",
                "git_ssh_url": "git@gitlab.com:xx/oo.git",
                "visibility_level": 0
            }
        }';
         */
        $this->deployer = Deployer::getInstance();
        $projectId = $this->input('id');
        $token = $this->request->getHeader('X-Gitlab-Token');
        // Verify project
        if (!$project = $this->findAndVerifyProject($projectId, $token)) {
            // Return 404 if project not found, or token mismatch
            $this->missingMethod();
        }

        $payload = $this->parseJsonPayload($this->getPhpInput());
        if ('push' != $payload->getData('object_kind')) {
            return $this->jsonApiReturnMeta(['status' => 'ignored']);
        }

        // Verify branch
        $branch = $project->getBranch();
        $ref = "refs/heads/{$branch}";

        // Skip non-listening branches
        if ($ref != $payload->getData('ref')) {
            return $this->jsonApiReturnMeta(['status' => 'ignored']);
        }
        $workspace = $this->getWorkspace();
        $payload->setData('workspace', $workspace . '/' . $project->getProjectId());
        $env = [
            'PREVIOUS_COMMIT' => $payload->getData('before'),
            'CURRENT_COMMIT' => $payload->getData('after'),
            'DEPLOY_ID' => date('Ymd-His'),
        ];
        $payload->setData('env', $env);
        $this->createDeployment($project, $payload);
        return $this->jsonApiReturnMeta(['status' => 'ok']);
    }

    protected function findAndVerifyProject($projectId, $token)
    {
        if (empty($projectId) || empty($token)) {
            return null;
        }
        // TODO implement project model and project management UI
        if (!$project = Config::get('deploy.projects.' . str_replace('.', '_', $projectId))) {
            return null;
        }
        if (fnGet($project, 'gitlab-token') != $token) {
            return null;
        }
        $project['project_id'] = $projectId;
        return Payload::create($project);
    }

    protected function parseJsonPayload($input)
    {
        $json = json_decode($input, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return null;
        }
        return Payload::create($json ?: []);
    }

    /**
     * Q: Why make the `php://input` encapsulation?
     * A: I want to use it in service mode, which is impossible to pass data via `php://input` between processes
     * @return string
     */
    protected function getPhpInput()
    {
        return file_get_contents('php://input');
    }

    protected function getWorkspace()
    {
        return $this->deployer->getWorkspace();
    }

    protected function createDeployment($project, $payload)
    {
        $this->deployer->queueJob($project, $payload);
        return $this;
    }
}
