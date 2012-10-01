<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL);

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';

//$config=dirname(__FILE__).'/protected/config/main.php';
$config = array_merge_recursive(
    require dirname(__FILE__) . '/../app/common/config/main.php',
    require dirname(__FILE__) . '/../app/frontend/config/main.php',
    require dirname(__FILE__) . '/../app/frontend/config/routes.php'
);

//print_r($config); exit();

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);

Yii::setPathOfAlias('webroot', dirname(__FILE__) . '/../app');
Yii::setPathOfAlias('common', dirname(__FILE__) . '/../app/common');

Yii::createWebApplication($config)->run();
