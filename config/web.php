<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
	
	'modules' => [
		'translator' => [
			'class' => 'infun3\translator\Module',
		],
		'simplehtmldom' => [
			'class' => 'garyjl\yii2-simple_html_dom\SimpleHtmlDom',
		],
		'user' => [
			'admins' => ['1nf', 'ind'],
			'class' => 'dektrium\user\Module',
			'enableUnconfirmedLogin' => true,
			'modelMap' => [
				'User' => 'app\models\User',

			],
		],
	],
    'components' => [
	'translate' => [
        'class' => 'wfstudioru\translate\Translation',
        'key' => 'trnsl.1.1.20151223T230612Z.01b9b249f23a3c05.78a147b3149c9e8fef4bd7bf2120ee33c8e1fded',
    ],
		'view' => [
			
		],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'lAJ4NxTsvQS1dlamNrsASLrAPqlO9gX1',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
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
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
		'class' => 'yii\debug\Module',
		'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.*'] 
	];

        $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
		'class' => 'yii\gii\Module',
		'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.*'] 
	];

}

return $config;
