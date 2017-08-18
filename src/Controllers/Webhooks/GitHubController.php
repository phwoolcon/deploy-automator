<?php

namespace Phwoolcon\DeployAutomator\Controllers\Webhooks;

use Phwoolcon\Controller;
use Phwoolcon\DeployAutomator\Controllers\WebhookTrait;

class GitHubController extends Controller
{
    use Controller\Api;
    use WebhookTrait;

    public function postPush()
    {
        /*
         * Request data sample:

        $_SERVER = [
            'HTTP_X_HUB_SIGNATURE' => 'sha1=ed35e33c570d7d4af211648cc2e07b1f1d421eb0',
            'HTTP_CONTENT_TYPE' => 'application/json',
            'HTTP_X_GITHUB_DELIVERY' => 'f15d6970-8351-11e7-8f4e-595102e90fe3',
            'HTTP_X_GITHUB_EVENT' => 'push',
            'HTTP_USER_AGENT' => 'GitHub-Hookshot/8c529e0',
            'REQUEST_URI' => '/webhooks/github/push?id=YourXxoOId',
            'REQUEST_METHOD' => 'POST',
            'QUERY_STRING' => 'id=YourXxoOId',
        ];

        $_REQUEST = [
            'id' => 'YourXxoOId',
        ];
         */
        if ('push' != $this->request->getHeader('X-GitHub-Event')) {
            return $this->jsonApiReturnMeta(['status' => 'ignored', 'why' => 'Not push event']);
        }
        /**
         * @see https://developer.github.com/webhooks/creating/#content-type
         */
        $useFormPayload = strtolower($this->request->getContentType()) == 'application/x-www-form-urlencoded';
        $payloadString = $useFormPayload ? $this->input('payload') : $this->getRawPhpInput();

        $projectId = $this->input('id');
        $signature = $this->request->getHeader('X-Hub-Signature');
        // Verify project
        if (!$project = $this->findAndVerifyProject($projectId, $payloadString, $signature)) {
            // Return 404 if project not found, or signature mismatch
            $this->missingMethod();
        }

        /**
         * @see example/webhook-samples/github.json
         * @see https://developer.github.com/webhooks/#payloads
         */
        $payload = $this->parseJsonPayload($payloadString);

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

    protected function findAndVerifyProject($projectId, $payloadString, $signature)
    {
        if (empty($projectId) || empty($payloadString) || empty($signature)) {
            return null;
        }
        $signatureComponents = explode('=', $signature);
        if (empty($signatureComponents[1])) {
            return null;
        }
        list($algorithm, $hash) = $signatureComponents;
        if (!$project = $this->findProject($projectId)) {
            return null;
        }
        $token = $project->getGithubToken();
        if (!hash_equals($hash, hash_hmac($algorithm, $payloadString, $token))) {
            return null;
        }
        return $project;
    }
}
