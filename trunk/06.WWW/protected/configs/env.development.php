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
            'generatorPaths' => array(
                'ext.MiisCG',
            ),
        ),
    ),
    'sourceLanguage' => 'vi',
    'components' => array(
        'user' => array(
            'allowAutoLogin' => true,
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'urlSuffix' => '.html',
            'showScriptName' => false,
            'rules' => array(
                // a custom rule to handle default controller
                array('class' => 'application.components.MiisUrlRule'),
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
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'db' => array(
            'class' => 'CDbConnection',
            'connectionString' => 'mysql:host=localhost;dbname=tienganh123',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'schemaCachingDuration' => '3600',
            'enableProfiling' => true,
        ),
        'session' => array(
            'autoStart' => true,
        ),
    /*
      'cache' => array(
      'class' => 'application.components.MiisMemCache',
      'useMemcached' => false,
      ),
      'cache' => array(
      'class' => 'system.caching.CFileCache',
      ),
     * 
     */
    ),
    'params' => array(
        'encryptionKey' => 'M@I@S@S@'
    )
);