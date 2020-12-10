<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\Controller',
            'access' => ['@'], //глобальный доступ к фаил менеджеру @ - для авторизорованных , ? - для гостей , чтоб открыть всем ['@', '?']
            'disabledCommands' => ['netmount'], //отключение ненужных команд https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#commands
            'roots' => [
                [
                    'baseUrl'=>'@web',
                    'basePath'=>'@webroot',
                    'path' => 'files/global',
                    'name' => 'global'
                ]
            ]
        ]
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'FkG0o_mwYOoHtEyTWIaikIYopnza4ilI',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
            'baseUrl' => ''
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\modules\admin\models\User',
            'loginUrl' => '/',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
//            'errorAction' => 'site/error',
            'errorAction' => '/index',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/v1/films',
//                    'except' => ['delete', 'create', 'update'],
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/v1/films-gallery',
//                    'except' => ['delete', 'create', 'update'],
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/v1/films-genres',
//                    'except' => ['delete', 'create', 'update'],
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/v1/serials',
//                    'except' => ['delete', 'create', 'update'],
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/v1/serials-gallery',
//                    'except' => ['delete', 'create', 'update'],
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/v1/serials-genres',
//                    'except' => ['delete', 'create', 'update'],
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/v1/anime',
//                    'except' => ['delete', 'create', 'update'],
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/v1/anime-gallery',
//                    'except' => ['delete', 'create', 'update'],
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/v1/anime-genres',
//                    'except' => ['delete', 'create', 'update'],
                ],
//                [
//                    'class' => 'yii\rest\UrlRule',
//                    'controller' => 'api/v2/film',
//                    'except' => ['delete', 'create', 'update'],
//                ],
//                [
//                    'class' => 'yii\rest\UrlRule',
//                    'controller' => 'film'
//                ],
//                [
//                    'class' => 'yii\rest\UrlRule',
//                    'controller' => 'cat'
//                ],
//                [
//                    'class' => 'yii\rest\UrlRule',
//                    'controller' => 'genre'
//                ],
//                [
//                    'class' => 'yii\rest\UrlRule',
//                    'controller' => 'gall'
//                ],
            ],
        ],
    ],
    'modules' => [
        'api' => [
            'class' => 'app\modules\api\Module',
        ],
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
