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
        //'css/site.css',
        //'aspect1/css/bootstrap.min.css',
        'aspect1/css/idangerous.swiper.css',
        'aspect1/css/animate.css',
        'aspect1/css/jquery.circliful.css',
        'aspect1/css/style.css'
    ];
    public $js = [

    'aspect1/js/jquery.min.js',
    'aspect1/js/bootstrap.min.js',
    'aspect1/js/idangerous.swiper.min.js',
    'aspect1/js/jquery.viewportchecker.js',
    'aspect1/js/jquery.scrollUp.min.js',
    'aspect1/js/isotope.pkgd.min.js',  
    'aspect1/js/jquery.circliful.min.js',      
     'aspect1/js/global.js'  
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
