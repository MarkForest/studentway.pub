<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 02.10.17
 * Time: 0:59
 */

namespace app\assets;


use yii\web\AssetBundle;

class ImageAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/simple-line-icons.css',
    ];
    public $js = [
        'js/sendForms.js',
        'institute/js/ajax.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}