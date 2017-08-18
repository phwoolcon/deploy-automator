<?php

define('BASE_DIR', empty($_SERVER['BASE_DIR']) ? __DIR__ : $_SERVER['BASE_DIR']);
define('WORKSPACE', empty($_SERVER['WORKSPACE']) ? BASE_DIR . '/workspace' : $_SERVER['WORKSPACE']);

require BASE_DIR . '/vendor/autoload.php';

$recipe = empty($_SERVER['RECIPE']) ? 'recipe/phwoolcon.php' : $_SERVER['RECIPE'];

require $recipe;
