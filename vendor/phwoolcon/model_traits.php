<?php
if (defined('PHWOOLCON_MODELS_TRAIT_LOADED')) {
    return;
}
define('PHWOOLCON_MODELS_TRAIT_LOADED', true);

trait ConfigModelTrait
{
    // protected $_table = 'config';

    public $key;
    public $value;

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param $key
     * @return static[]|\Phalcon\Mvc\Model\Resultset\Simple
     */
    public static function findByKey($key)
    {
        return static::findSimple([
            'key' => $key,
        ]);
    }

    /**
     * @param $key
     * @return static|false
     */
    public static function findFirstByKey($key)
    {
        return static::findFirstSimple([
            'key' => $key,
        ]);
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}

trait MigrationsModelTrait
{
    // protected $_table = 'migrations';

    public $file;
    public $run_at;

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @param $file
     * @return static[]|\Phalcon\Mvc\Model\Resultset\Simple
     */
    public static function findByFile($file)
    {
        return static::findSimple([
            'file' => $file,
        ]);
    }

    /**
     * @param $file
     * @return static|false
     */
    public static function findFirstByFile($file)
    {
        return static::findFirstSimple([
            'file' => $file,
        ]);
    }

    public function getRunAt()
    {
        return $this->run_at;
    }

    public function setRunAt($runAt)
    {
        $this->run_at = $runAt;
        return $this;
    }
}

trait ProjectsModelTrait
{
    // protected $_table = 'projects';

    public $id;
    public $project_id;
    public $gitlab_token;
    public $github_token;
    public $repository;
    public $branch;
    public $extra_data;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param $id
     * @return static[]|\Phalcon\Mvc\Model\Resultset\Simple
     */
    public static function findById($id)
    {
        return static::findSimple([
            'id' => $id,
        ]);
    }

    /**
     * @param $id
     * @return static|false
     */
    public static function findFirstById($id)
    {
        return static::findFirstSimple([
            'id' => $id,
        ]);
    }

    public function getProjectId()
    {
        return $this->project_id;
    }

    public function setProjectId($projectId)
    {
        $this->project_id = $projectId;
        return $this;
    }

    public function getGitlabToken()
    {
        return $this->gitlab_token;
    }

    public function setGitlabToken($gitlabToken)
    {
        $this->gitlab_token = $gitlabToken;
        return $this;
    }

    public function getGithubToken()
    {
        return $this->github_token;
    }

    public function setGithubToken($githubToken)
    {
        $this->github_token = $githubToken;
        return $this;
    }

    public function getRepository()
    {
        return $this->repository;
    }

    public function setRepository($repository)
    {
        $this->repository = $repository;
        return $this;
    }

    public function getBranch()
    {
        return $this->branch;
    }

    public function setBranch($branch)
    {
        $this->branch = $branch;
        return $this;
    }

    public function getExtraData()
    {
        return $this->extra_data;
    }

    public function setExtraData($extraData)
    {
        $this->extra_data = $extraData;
        return $this;
    }
}
