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
        'application.components.*'
    ),
    'modules' => array(
        'members',
        'sysadmin',
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123admin!@#$',
        ),
    ),
    'components' => array(
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                // members module
                'members' => 'members',
                'members/<controller:\w+>' => 'members/<controller>',
                'members/<controller:\w+>/<action:\w+>' => 'members/<controller>/<action>',
                // sysadmin module
                'sysadmin' => 'sysadmin',
                'sysadmin/<controller:\w+>' => 'sysadmin/<controller>',
                'sysadmin/<controller:\w+>/<action:\w+>' => 'sysadmin/<controller>/<action>',
                // auto generate
                'gii' => 'gii',
                'gii/<controller:\w+>' => 'gii/<controller>',
                'gii/<controller:\w+>/<action:\w+>' => 'gii/<controller>/<action>',
            ),
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                array(
                    'class' => 'CWebLogRoute',
                ),
            ),
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
            'class' => 'system.caching.CMemCache',
            'useMemcached' => true,
        ),
        'session' => array(
            'autoStart' => true,
        ),
        'cache' => array(
            'class' => 'system.caching.CFileCache',
        ),
    ),
);