<?php
use app\assets\ToursAsset;
ToursAsset::register($this);
 ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Обучение в институтах Австрии">
    <meta name="keywords" content="Австрия, Обучение, Туры в Австрию">

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= $content ?>
<!-- Footer Section -->
<div class="footer" >
    <div class="container">
        <div class="col-md-5 contact">
            <h1>
                <?=$this->params['footer']['title_first']?>
            </h1>
            <p>
                <?=$this->params['footer']['description_first']?>
            </p>

        </div>
        <div class="col-md-2 contact footer-menu">
            <h1><?=$this->params['footer']['title_second']?></h1>
            <ul>
                <li><a href="<?=$this->params['footer']['href_link_first']?>"><?=$this->params['footer']['name_link_first']?></a></li>
                <li><a href="<?=$this->params['footer']['href_link_second']?>"><?=$this->params['footer']['name_link_second']?></a></li>
                <li><a href="<?=$this->params['footer']['href_link_third']?>"><?=$this->params['footer']['name_link_third']?></a></li>
                <li><a href="<?=$this->params['footer']['href_link_four']?>"><?=$this->params['footer']['name_link_four']?></a></li>
            </ul>
        </div>
        <div class="col-md-5 contact">
            <h1>
                <?=$this->params['footer']['title_third']?>

            </h1>
            <p><?=$this->params['footer']['description_third']?></p>
            <a href="mailto:support@gmail.com"><?=$this->params['footer']['link_footer']?></a> </div>
    </div>
</div>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
