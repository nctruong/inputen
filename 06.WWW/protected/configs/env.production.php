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
                'thanh-vien/dang-nhap' => 'member/login',
                'thanh-vien/<id:\d+>' => 'member/detail',
                
                
                
                'video' => 'video',
                'video/<title:.*?>-<tid:\d+>/<slug:.*?>-<id:\d+>' => array('video/view/', 'urlSuffix' => '.html'),
                'video/<slug:.*>-<id:\d+>' => 'video/viewlist/',

                'tieng-anh-pho-thong' => 'collect',
                'tieng-anh-pho-thong/<slug:.*?>-<sid:\d+>/lop/<title:.*?>-<tid:\d+>' => array('collect/viewcate/', 'urlSuffix' => '.html'),                
                'tieng-anh-pho-thong/<title:.*?>-<pid:\d+>/<slug:.*?>-<cid:\d+>/<slug2:.*?>-<id:\d+>' => array('collect/view/', 'urlSuffix' => '.html'),
                'tieng-anh-pho-thong/<slug:.*>-<id:\d+>' => 'collect/viewlist/',
                

                
                
                
                'bai-hoc' => 'listen',
                'bai-hoc/<title:.*?>-<tid:\d+>/<slug:.*?>-<id:\d+>' => array('listen/view/', 'urlSuffix' => '.html'),
                'bai-hoc/<slug:.*>-<id:\d+>' => 'listen/viewlist/',
                
                'hoc-offline' => 'offline',
                'hoc-offline/<title:.*?>-<tid:\d+>/<slug:.*?>-<id:\d+>' => array('offline/view/', 'urlSuffix' => '.html'),
                'hoc-offline/<slug:.*>-<id:\d+>' => 'offline/viewlist/',
                
                'hoc-qua-clip' => 'clip',
                'hoc-qua-clip/<title:.*?>-<tid:\d+>/<slug:.*?>-<id:\d+>' => array('clip/view/', 'urlSuffix' => '.html'),
                'hoc-qua-clip/<slug:.*>-<id:\d+>' => 'clip/viewlist/',
                
                'hoc-va-choi' => 'lern',
                'hoc-va-choi/<title:.*?>-<tid:\d+>/<slug:.*?>-<id:\d+>' => array('lern/view/', 'urlSuffix' => '.html'),
                'hoc-va-choi/<slug:.*>-<id:\d+>' => 'lern/viewlist/',
                
                'bai-test' => 'test',
                'bai-test/<title:.*?>-<tid:\d+>/<slug:.*?>-<id:\d+>' => array('test/view/', 'urlSuffix' => '.html'),
                'bai-test/<slug:.*>-<id:\d+>' => 'test/viewlist/',
                
                'tham-khao' => 'reference',
                'tham-khao/<title:.*?>-<tid:\d+>/<slug:.*?>-<id:\d+>' => array('reference/view/', 'urlSuffix' => '.html'),
                'tham-khao/<slug:.*>-<id:\d+>' => 'reference/viewlist/',
               
                
                'tin-tuc' => 'news',
                'tin-tuc/<title:.*?>-<tid:\d+>/<slug:.*?>-<id:\d+>' => array('news/view/', 'urlSuffix' => '.html'),
                'tin-tuc/<slug:.*>-<id:\d+>' => 'news/viewlist/',
               
                 //clip
                'hoc-qua-clip' => 'clip',
                'hoc-qua-clip/<controller:\w+>' => 'news/<controller>',
                'hoc-qua-clip/<controller:\w+>/<action:\w+>' => 'news/<controller>/<action>',
                
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                
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
//        'cache' => array(
//            'class' => 'application.components.MiisMemCache',
//            'useMemcached' => true,
//        ),
//        'cache' => array(
//            'class' => 'system.caching.CFileCache',
//        ),
    ),
    'params' => array(
        'encryptionKey' => 'M@I@S@S@'
    )
);