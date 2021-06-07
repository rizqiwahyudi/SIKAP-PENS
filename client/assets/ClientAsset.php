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
    public $sourcePath = '@client/themes/agency';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',
        'lib/slick/slick.css',
        'libs/slick/slick-theme.css',
        'lib/lightbox/css/lightbox.min.css',
        'css/style.css',
    ];
    public $js = [
        'https://code.jquery.com/jquery-3.4.1.min.js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js',
        'lib/slick/slick.min.js',
        'lib/isotope/isotope.pkgd.min.js',
        'lib/lightbox/js/lightbox.min.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
