<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

//remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);

// change the following paths if necessary
$yii=dirname(__FILE__).'/yii/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

require_once($yii);
Yii::createWebApplication($config)->run();
