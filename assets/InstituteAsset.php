<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 22.10.17
 * Time: 12:50
 */

namespace app\assets;


use yii\web\AssetBundle;

class InstituteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'institute/css/bootstrap.min.css',
        'institute/css/font-awesome.min.css',
        'institute/css/animate.min.css',
        'institute/css/et-line-font.css',
        'institute/css/nivo-lightbox.css',
        'institute/css/nivo_themes/default/default.css',
        'institute/css/style.css',
        'https://fonts.googleapis.com/css?family=Roboto:400,300,500',
        'institute/css/sequence-theme.modern-slide-in.css',
    ];
    public $js = [
//        'institute/js/jquery.js',
        'institute/js/wow.min.js',
//       'institute/js/bootstrap.min.js',
        'institute/js/jquery.backstretch.min.js',
        'institute/js/isotope.js',
        'institute/js/imagesloaded.min.js',
        'institute/js/nivo-lightbox.min.js',
        'institute/js/smoothscroll.js',
        'institute/js/custom.js',
        'institute/js/imagesloaded.pkgd.min.js',
        'institute/js/hammer.min.js',
        'institute/js/sequence.min.js',
        'institute/js/sequence-theme.modern-slide-in.js',
        'institute/js/script.js',
        'institute/js/ajax.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapPluginAsset',
    ];
}