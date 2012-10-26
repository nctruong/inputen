<?php

// Database
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Tiếng Anh 123',
    'preload' => array(
    'bootstrap','TiiSlug'
    ),
    'import' => array(
        'application.widgets.*',
        'application.models.*',
        'application.components.*',
     ),
    'modules' => array(
        'members',
        'sysadmin',
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '1',
            'generatorPaths'=>array(
            'bootstrap.gii',
        ),
        ),
    ),
    'components' => array(
        'errorHandler'=>array(
            'errorAction'=>'site/error',
        ),
        'bootstrap'=>array(
             'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
         ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'urlSuffix' => '.html',
            'rules' => array(
                
                // a custom rule to handle default controller
                array('class' => 'application.components.MiisUrlRule'),

                // members module
                'members' => 'members',
                'members/<controller:\w+>' => 'members/<controller>',
                'members/<controller:\w+>/<action:\w+>' => 'members/<controller>/<action>',
                //listen 
                // member
                'thanh-vien' => 'member',
                'thanh-vien/dang-ky' => 'member/register',
                'hoc-qua-clip/<controller:\w+>/<action:\w+>' => 'news/<controller>/<action>',
                                
                
                'bai-hoc' => 'listen',
                'bai-hoc/<title>/<slug:.*?>-<id:\d+>' => array('listen/view/', 'urlSuffix' => '.html'),
                'bai-hoc/<slug:.*>-<id:\d+>' => 'listen/viewlist/',
                
                'hoc-offline' => 'offline',
                'hoc-offline/<title>/<slug:.*?>-<id:\d+>' => array('offline/view/', 'urlSuffix' => '.html'),
                'hoc-offline/<slug:.*>-<id:\d+>' => 'offline/viewlist/',
                
                'hoc-qua-clip' => 'clip',
                'hoc-qua-clip/<title>/<slug:.*?>-<id:\d+>' => array('clip/view/', 'urlSuffix' => '.html'),
                'hoc-qua-clip/<slug:.*>-<id:\d+>' => 'clip/viewlist/',
                
                
                'tham-khao' => 'reference',
                'tham-khao/<title>/<slug:.*?>-<id:\d+>' => array('reference/view/', 'urlSuffix' => '.html'),
                'tham-khao/<slug:.*>-<id:\d+>' => 'reference/viewlist/',
               
                
                'tin-tuc' => 'news',
                'tin-tuc/<title>/<slug:.*?>-<id:\d+>' => array('news/view/', 'urlSuffix' => '.html'),
                'tin-tuc/<slug:.*>-<id:\d+>' => 'news/viewlist/',
               
                
                
                
                
                
                
                
                //news
               // 'tin-tuc' => 'news',
                //'tin-tuc/<controller:\w+>' => 'news/<controller>',
                //'tin-tuc/<controller:\w+>/<action:\w+>' => 'news/<controller>/<action>',
                 //clip
                'hoc-qua-clip' => 'clip',
                'hoc-qua-clip/<controller:\w+>' => 'news/<controller>',
                'hoc-qua-clip/<controller:\w+>/<action:\w+>' => 'news/<controller>/<action>',
                
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
        'cache' => array(
            'class' => 'application.components.MiisMemCache',
            'useMemcached' => true,
        ),
        'cache' => array(
            'class' => 'system.caching.CFileCache',
        ),
    ),
    'params' => array(
        'encryptionKey' => 'M@I@S@S@'
    )
);