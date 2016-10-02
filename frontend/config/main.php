<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);
Yii::$container->set('pavlinter\display\DisplayImage', [
    //'returnSrc' => false,
    //'mode' => DisplayImage::MODE_INSET,
    'defaultImage' => 'default.jpg',
    //'bgColor' => '000000',
    //'bgAlpha' => 0,
    'cacheDir' => '@webroot/admin/upload/cache',
    'cacheWebDir' => '@web/admin/upload/cache',
    //'innerCacheDir' => null, //example: 'cacheDirectory' takes precedence over [[cacheDir]]
    //'generalDefaultDir' => true
    'defaultCategory' => 'all',
    'config' => [
        'items' => [
            'imagesWebDir' => '@web',
            'imagesDir' => '@webroot',
            'defaultWebDir' => '@web/admin/upload/',
            'defaultDir' => '@webroot/admin/upload/',
            'mode' => \pavlinter\display\DisplayImage::MODE_STATIC,
        ],
        'all' => [
            'imagesWebDir' => '@web',
            'imagesDir' => '@webroot',
            'defaultWebDir' => '@web/admin/upload/',
            'defaultDir' => '@webroot/admin/upload/',
            'mode' => \pavlinter\display\DisplayImage::MODE_OUTBOUND,
        ],
        'users' => [
            'imagesWebDir' => '@web',
            'imagesDir' => '@webroot',
            'defaultWebDir' => '@web/admin/upload/',
            'defaultDir' => '@webroot/admin/upload/',
            'mode' => 'ownMode',
            'bgColor' => 'ff0000',
            'resize' => function ($sender, $originalImage) {
                /* @var $sender \pavlinter\display\DisplayImage */
                /* @var $originalImage \Imagine\Imagick\Image */

                $Box = new \Imagine\Image\Box($sender->width, $sender->height);
                $newImage = $originalImage->thumbnail($Box);

                $point = new \Imagine\Image\Point(0, 0);
                $color = new \Imagine\Image\Color($sender->bgColor, $sender->bgAlpha);

                return yii\imagine\Image::getImagine()->create($Box, $color)->paste($newImage, $point);
            },
        ],
    ]
]);
return [
    'id' => 'app-frontend',
    'language'=>'ru-RU',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<_c:[\w\-]+>/<id:\d+>' => '<_c>/view',
                '<_c:[\w\-]+>' => '<_c>/index',
                '<_c:[\w\-]+>/<_a:[\w\-]+>/<id:\d+>' => '<_c>/<_a>',
            ],
        ],
    ],
    'params' => $params,
];
