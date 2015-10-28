<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'request' => [
            'enableCookieValidation' => true,
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'XFYe6SVN-SAc4X4YkXWsmVGkufy5UPvv',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ]
    ],
];
