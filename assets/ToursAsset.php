<?php
  namespace app\assets;

  use yii\web\AssetBundle;
  class ToursAsset extends AssetBundle
  {
      public $basePath = '@webroot';
      public $baseUrl = '@web';
      public $css = [

          'tours/bootstrap/css/bootstrap.min.css',
          'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900',
          'tours/css/animate.css',
          'tours/css/owl.carousel.css',
          'tours/css/owl.theme.css',
          'tours/css/ionicons.min.css',
          'https://use.fontawesome.com/releases/v5.3.1/css/all.css',
          'tours/css/style.css',
          'tours/css/extra-small.css',
          'tours/css/main.css',
          'tours/css/small.css',

      ];
      public $js = [
            'tours/js/jquery-2.1.1.js',
            'tours/js/bootstrap.min.js',
            'tours/js/plugins.js',
            'tours/js/menu.js',
            'tours/js/custom.js',
            'tours/js/jquery.subscribe.js',
      ];
      public $depends = [
          'yii\web\YiiAsset',
      ];
  }
