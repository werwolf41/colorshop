<?php
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
            'mode' => \pavlinter\display\DisplayImage::MODE_MIN,
        ],
        'all' => [
            'imagesWebDir' => '@web',
            'imagesDir' => '@webroot',
            'defaultWebDir' => '@web/admin/upload/',
            'defaultDir' => '@webroot/admin/upload/',
            'mode' => \pavlinter\display\DisplayImage::MODE_MIN,
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
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'timeZone' => 'Europe/Kiev',
            'dateFormat' => 'php:d.m.Y',
            'datetimeFormat' => 'php:d.m.Y H:i:s',
            'timeFormat' => 'php:H:i:s',
        ],
    ],
    'modules'=>[
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.*'],
        ],
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.*'],
        ],
    ],

];
