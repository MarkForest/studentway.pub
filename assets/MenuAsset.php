<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 24.08.17
 * Time: 17:00
 */

namespace app\assets;


use yii\web\AssetBundle;

class MenuAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/mainMenuStyle.css',
        'css/icomoon.css',
        'css/simple-line-icons.css',
    ];
    public $js = [

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',

    ];
}