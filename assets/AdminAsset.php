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
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'tours/css/adminStyle.css',
        'css/style.css',
        'css/site.css',
        'css/simple-line-icons.css',
        'institute/css/style.css',
        'institute/css/admin-institutes.css',

    ];
    public $js = [
        'js/sendForms.js',
        'institute/js/ajax.js',
        'tours/js/ajax.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}