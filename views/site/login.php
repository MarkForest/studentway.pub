<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход в панель Администратора.';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <style type="text/css">
        .sub a{
            color:#fff;
            background:#272727;
            text-decoration:none;
            padding:10px 20px;
            font-size:13px;
            font-family: arial, serif;
            font-weight:bold;
            -webkit-border-radius:.5em;
            -moz-border-radius:.5em;
            -border-radius:.5em;
            margin-top: 20px;
        }
    </style>
    <br>
    <div class="sub">
        <p><a href="<?=\yii\helpers\Url::previous()?>">Назад </a></p>
    </div>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Введите логин и пароль.</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true,])->label('Имя:') ?>

        <?= $form->field($model, 'password')->passwordInput()->label('Пароль:') ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Вход', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
