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
