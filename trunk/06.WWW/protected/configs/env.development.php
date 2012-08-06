<?php

// Database
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Tiếng Anh 123',
    'preload' => array(
        'bootstrap',
    ),
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.modules.*',
    ),
    'components' => array(
        'bootstrap' => array(
            'class' => 'ext.bootstrap.components.Bootstrap',
        ),
        'db' => array(
            'class' => 'CDbConnection',
            'connectionString' => 'mysql:host=localhost;dbname=ciicms',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'schemaCachingDuration' => '3600',
            'enableProfiling' => true,
        ),
        'cache' => array(
            'class' => 'system.caching.CFileCache',
        ),
        'session' => array(
            'autoStart' => true,
        ),
        'cache' => array(
            'class' => 'system.caching.CFileCache',
        ),
    ),
);