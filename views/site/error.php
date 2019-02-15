<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class=" site-error">
    <style type="text/css">
        body{
            font-family: 'Love Ya Like A Sister', cursive;
        }
        body{
            background:#eaeaea;
        }
        .wrap{
            margin:0 auto;
            /*width:1000px;*/
        }
        .logo{
            text-align:center;
            margin-top:50px;
        }
        .logo img{
            width:350px;
        }
        .logo p{
            color:#272727;
            font-size:40px;
            margin-top:1px;
        }
        .logo p span{
            color:lightgreen;
        }
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
        }

    </style>

    <div class="wrap">
        <div class="logo">
            <p>OOPS! - Could <?= Html::encode($this->title) ?> it. </p>
            <img src="/images/404-1.png"/>
            <div class="sub">
                <p><a href="<?=\yii\helpers\Url::previous()?>">Назад </a></p>
            </div>
        </div>
    </div>



<!--</div>-->

