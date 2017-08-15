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
}
