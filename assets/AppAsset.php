<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [

//        'css/bootstrap.min.css',
        'css/animate.css',
        'css/icomoon.css',
        'css/simple-line-icons.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/style.css',
        'css/lightbox.min.css',
    ];
public $js = [

//        'js/jquery-3.2.1.min.js',

    'https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js',
    'js/bootstrap.min.js',
    'js/modernizr-2.6.2.min.js',
    'js/jquery.easing.1.3.js',
    'js/jquery.waypoints.min.js',
    'js/jquery.stellar.min.js',
    'js/owl.carousel.min.js',
    'js/main.js',
    'js/countdown.js',
    'js/sendForms.js',
    'js/lightbox.min.js',
    'js/jquery.maskedinput.min.js',
    'js/maskedinput.js',

//


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
