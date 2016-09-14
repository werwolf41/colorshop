<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap-datetimepicker.min.css',
        'css/font-awesome.min.css',
        'css/nivo-slider.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/stylesheet.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/bootstrap-datetimepicker.min.js',
        'js/jquery.countdown.min.js',
        'js/jquery.dotdotdot.min.js',
        'js/jquery.nivo.slider.pack.js',
        'js/moment.js',
        'js/owl.carousel.min.js',
        'js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        //'yii\web\JqueryAsset',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
