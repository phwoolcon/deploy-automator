<?php

namespace Phwoolcon\DeployAutomator\Controllers;

use Phwoolcon\DeployAutomator\Deployer;
use Phwoolcon\Payload;

trait WebhookTrait
{
    /**
     * @var Deployer
     */
    protected $deployer;

    protected function createDeployment($project, $payload)
    {
        $this->deployer or $this->deployer = Deployer::getInstance();
        $this->deployer->queueJob($project, $payload);
        return $this;
    }

    protected function getWorkspace()
    {
        $this->deployer or $this->deployer = Deployer::getInstance();
        return $this->deployer->getWorkspace();
    }

    /**
     * @param $input
     * @return null|Payload
     */
    protected function parseJsonPayload($input)
    {
        $json = json_decode($input, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return null;
        }
        return Payload::create($json ?: []);
    }
}
