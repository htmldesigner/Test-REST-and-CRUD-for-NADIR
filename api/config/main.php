<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

return [
    'id' => 'api',
    'aliases' => [
        '@api' => dirname(dirname(__DIR__)) . '/api',
    ],
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'v1' => [
            'basePath' => '@app/modules/v1',
            'class' => 'api\modules\v1\Module'
        ]
    ],
    'components' => [
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
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
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                [
//                    'pluralize' => false,
                    'class' => 'yii\rest\UrlRule',
                    'controller' => ['v1/book'],
                    'extraPatterns' => [
                        'GET list' => 'index',
                        'GET by-id/{id}' => 'view',
                        'DELETE id/{id}' => 'delete',
                        'PATCH update/{id}' => 'update',
                    ],
                ]
            ],
        ]
    ],
    'params' => $params,
];



