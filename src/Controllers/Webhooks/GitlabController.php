<?php

namespace Phwoolcon\DeployAutomator\Controllers\Webhooks;

use Phwoolcon\Controller;
use Phwoolcon\DeployAutomator\Controllers\WebhookTrait;
use Phwoolcon\DeployAutomator\Model\Project;

class GitlabController extends Controller
{
    use Controller\Api;
    use WebhookTrait;

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
         */
        $projectId = $this->input('id');
        $token = $this->request->getHeader('X-Gitlab-Token');
        // Verify project
        if (!$project = $this->findAndVerifyProject($projectId, $token)) {
            // Return 404 if project not found, or token mismatch
            $this->missingMethod();
        }

        /**
         * @see example/webhook-samples/gitlab.json
         * @see https://gitlab.com/help/user/project/integrations/webhooks
         */
        $payload = $this->parseJsonPayload($this->getPhpInput());
        if ('push' != $payload->getData('object_kind')) {
            return $this->jsonApiReturnMeta(['status' => 'ignored', 'why' => 'Not push event']);
        }

        // Verify branch
        $branch = $project->getBranch();
        $ref = "refs/heads/{$branch}";

        // Skip non-listening branches
        if ($ref != $payload->getData('ref')) {
            return $this->jsonApiReturnMeta(['status' => 'ignored', 'why' => 'Branch not match']);
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
        // TODO implement project management UI
        if (!$project = Project::findFirstSimple(['project_id' => $projectId])) {
            return null;
        }
        if ($project->getGitlabToken() != $token) {
            return null;
        }
        return $project;
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
}
