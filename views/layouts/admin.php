<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\resourse\Resourse;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->request->get('reg')==''
                ? '<img src="/images/logo_bell_org.png" alt="StudentWay">'
                : Resourse::getCity(Yii::$app->request->get('reg')),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [

                ['label' => 'Главная', 'url' => ['/admin/default/index']],
                ['label' => 'Курсы Польского', 'url' => ['/admin/admin-course-polish/index']],
                ['label' => 'Мобильный(Курсы)', 'url' => ['/admin/mobi-course-polish/index']],
                ['label' => 'Институты', 'url' => ['/admin/institutes/index']],
                ['label' => 'Университеты в Австрии', 'url' => ['/admin/tour/index']],
                ['label' => 'Изображения', 'url' => ['/admin/images/index']],

                Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
                ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Выход (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn-link logout',]
                    )
                    . Html::endForm()
                    . '</li>'
                ),

            ],
        ]);
        NavBar::end();
        ?>
    </div>


        <?= $content ?>


    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; StudentWay <?= date('Y') ?></p>

            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
