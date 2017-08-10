<?php

namespace Phwoolcon\DeployAutomator\Model;

use Phwoolcon\Model;

class Project extends Model
{
    use \ProjectsModelTrait;
    protected $_table = 'projects';
}
