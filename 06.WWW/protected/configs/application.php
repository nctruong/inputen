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
        'urlManager' => array(
            'class' => 'SlugURLManager',
            'cache' => true,
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                /*
                'sitemap.xml' => '/site/sitemap',
                'search/<page:\d+>' => '/site/search',
                'search/<id:\d+>' => '/site/mysqlsearch',
                'search' => '/site/mysqlsearch',
                'contact' => '/site/contact',
                'blog.rss' => '/content/rss',
                'blog/<page:\d+>' => '/content/list',
                 * 
                 */
                '/' => '/content/list',
                '/<id:\w+>' => '/content/index',
                /*
                'blog' => '/content/list',
                'activation/<email:\w+>/<id:\w+>' => '/site/activation',
                'activation' => '/site/activation',
                'forgot/<id:\w+>' => '/site/forgot',
                'forgot' => '/site/forgot',
                'register' => '/site/register',
                'login' => '/site/login',
                'logout' => '/site/logout',
                 * 
                 */
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