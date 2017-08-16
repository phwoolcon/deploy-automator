<?php

namespace Phwoolcon\DeployAutomator;

use Config;
use Phalcon\Di;
use Phwoolcon\DeployAutomator\Model\Project;
use Phwoolcon\Exception\QueueException;
use Phwoolcon\Payload;
use Phwoolcon\Queue\Adapter\DbQueue;
use Queue;

class Deployer
{
    /**
     * @var Di
     */
    protected static $di;

    /**
     * @var static
     */
    protected static $instance;
    protected $config;

    protected function __construct($config)
    {
        $this->config = $config;
    }

    public static function register(Di $di)
    {
        static::$di = $di;
        $di->remove('deployer');
        static::$instance = null;

        $di->setShared('deployer', function () {
            return new static(Config::get('deploy'));
        });
    }

    public static function getInstance()
    {
        static::$instance === null and static::$instance = static::$di->getShared('deployer');
        return static::$instance;
    }

    public static function handleQueueJob($job, $payload)
    {
        static::$instance === null and static::$instance = static::$di->getShared('deployer');
        call_user_func_array([static::$instance, 'deploy'], unserialize($payload));
    }

    /**
     * @param Project $project
     * @param Payload $payload
     */
    public function deploy($project, $payload)
    {
        $command = $_SERVER['PHWOOLCON_ROOT_PATH'] . '/vendor/bin/deploy';
        $workspace = $payload->getData('workspace');
        if (!is_dir($workspace)) {
            mkdir($workspace, 0777, true);
        }
        foreach ((array)$payload->getData('env') as $k => $v) {
            putenv("{$k}={$v}");
        }
        $deployScript =
            $project->getExtraData('deploy_script') ?: 'dep -v local:prepare prepare && dep -vvv deploy production';
        putenv("DEPLOY_SCRIPT={$deployScript}");
        $workspace = escapeshellarg($workspace);
        exec("{$command} {$workspace} > /dev/null 2>&1", $output, $exitCode);
        if ($exitCode) {
            throw new QueueException("Deploy error on project '{$project->getProjectId()}'", $exitCode);
        }
    }

    /**
     * @param Project $project
     * @param Payload $payload
     * @return $this
     */
    public function queueJob($project, $payload)
    {
        /* @var DbQueue $queue */
        $queue = Queue::connection('deployer');
        $queue->push([static::class, 'handleQueueJob'], serialize(func_get_args()));
        return $this;
    }

    public function getWorkspace()
    {
        $workspace = Config::get('deploy.workspace');
        $workspace{0} == '/' or $workspace = storagePath($workspace);
        return $workspace;
    }
}
