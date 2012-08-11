<?php

header('P3P:CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');
date_default_timezone_set('Asia/Ho_Chi_Minh');
$exec_start_time = microtime(true);
if (!defined('APPLICATION_PATH'))
    define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/protected'));
if (!defined('APPLICATION_ROOT'))
    define('APPLICATION_ROOT', realpath(dirname(__FILE__) . '/'));
if (!defined('YII_PATH'))
    define('YII_PATH', 'D:/Zend/ZendServer/share/YiiFramework');
if (!defined('DS'))
    define('DS', DIRECTORY_SEPARATOR);
if (!defined('PS'))
    define('PS', PATH_SEPARATOR);
if (!defined('DS'))
    define('DS', DIRECTORY_SEPARATOR);
if (!defined('MIIS_DEBUG'))
    define('MIIS_DEBUG', (@$_GET['XDEBUG'] == 1));

// Prefix evironment variable 
$prefixEnv = 'env.';

// Set configurations based on environment
if (!defined('APPLICATION_ENV')) {
    if (getenv('APPLICATION_ENV')) {
        $env = getenv('APPLICATION_ENV');
    } else {
        $env = 'production';
    }

    $reqHost = explode('.', $_SERVER['HTTP_HOST']);
    if (count($reqHost) > 2 && $reqHost[0] != 'wwww') {
        if (file_exists(APPLICATION_PATH . DS . 'configs' . DS . 'env.' . $reqHost[0] . '.php')) {
            $env = $reqHost[0];
        }
    }
    define('APPLICATION_ENV', $env);
}

// Set evironment path
$configMain = require_once APPLICATION_PATH . DS . 'configs' . DS . 'application.php';
$configEnv = require_once APPLICATION_PATH . DS . 'configs' . DS . $prefixEnv . APPLICATION_ENV . '.php';

// Set framework path
$yii = YII_PATH . DS . 'yii.php';

// Include Yii framework
require_once($yii);

// Run application
$config = CMap::mergeArray($configMain, $configEnv);
Yii::createWebApplication($config)->run();
$end_time = microtime(true);
//*
if (MIIS_DEBUG) {
    $fhd = null;
    if ($fhd = fopen(APPLICATION_ROOT . '/logs/execute_time.log', 'a+')) {
        fwrite($fhd, $_SERVER['REQUEST_URI']);
        fwrite($fhd, ' : ' . number_format(($end_time - $exec_start_time), 5, '.', ',') . " sec\n");
        fclose($fhd);
    }
}
//*/
exit(0);
