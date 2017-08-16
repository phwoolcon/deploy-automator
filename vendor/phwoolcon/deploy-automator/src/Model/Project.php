<?php

namespace Phwoolcon\DeployAutomator\Model;

use Phwoolcon\Model;
use Text;

class Project extends Model
{
    use \ProjectsModelTrait;
    protected $_table = 'projects';
    protected $_useDistributedId = false;
    protected $_jsonFields = ['extra_data'];

    public function generateProjectId()
    {
        do {
            $id = Text::random(Text::RANDOM_ALNUM, 16);
        } while (static::findFirstSimple(['project_id' => $id]));
        return $id;
    }

    public function getExtraData($key = null, $default = null)
    {
        return $key === null ? $this->extra_data : fnGet($this->extra_data, $key, $default);
    }
}
