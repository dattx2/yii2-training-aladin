<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/owl.transitions.css',
        'css/jquery-ui.css',
        'css/meanmenu.min.css',
        'lib/css/nivo-slider.css',
        'lib/css/preview.css',
        'css/animate.css',
        'css/magic.css',
        'css/normalize.css',
        'css/main.css',
        'style.css',
        'css/responsive.css',

    ];
    public $js = [
        'js/vendor/modernizr-2.8.3.min.js',
        'js/vendor/jquery-1.12.1.min.js',
        'js/bootstrap.min.js',
        'js/wow.min.js',
        'js/jquery-price-slider.js',
        'lib/js/jquery.nivo.slider.js',
        'lib/home.js',
        'js/jquery.meanmenu.js',
        'js/owl.carousel.min.js',
        'js/jquery.elevatezoom.js',
        'js/jquery.scrollUp.min.js',
        'js/plugins.js',
        'js/main.js',
        'js/vendor/modernizr-2.8.3.min.js'


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
