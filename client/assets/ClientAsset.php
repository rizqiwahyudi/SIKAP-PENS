<?php

namespace client\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ClientAsset extends AssetBundle
{
    // public $basePath = '@webroot';
    // public $baseUrl = '@client/themes/pcoint';
    public $sourcePath = '@client/themes/pcoint';
    public $css = [
        'css/bootstrap.min.css',
        'css/style.css',
        'css/responsive.css',
        'css/jquery.mCustomScrollbar.min.css',
        'css/font-awesome.css',
        'css/jquery.fancybox.min.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/popper.min.js',
        'js/bootstrap.bundle.min.js',
        'js/jquery-3.0.0.min.js',
        'js/plugin.js',
        'js/jquery.mCustomScrollbar.concat.min.js',
        'js/custom.js',
        'js/jquery.fancybox.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
