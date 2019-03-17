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
<!-- блок Контакты -->
<div class="cta-sub no-color"
     style="background-image:linear-gradient(to right, rgba(0, 174, 218, 0.5), rgba(0, 174, 218, 0.9)), url(/tours/images/<?= $tour_contact_img_block->image ?>)">
    <div class="container">
        <div class="cta-inner">
            <h1 class="wow fadeInUp"><?= $tour_have_questions_block['title_big_head'] ?></h1>
            <br>
            <a href="https://m.me/studentway.ukraina?ref=w3726749" style="background:#3498db;"
               class="btn btn-action wow fadeInUp"><?= $tour_have_questions_block['btn_message_text'] ?></a>
            <br>
            <br>
            <br>
            <br>
            <h1 id="contacts" class="wow fadeInUp" data-wow-delay="0s">
                <?= $tour_contact_block['title_big_head'] ?>
            </h1>
            <br>
            <br>
            <br>
            <h3 style="font-size: 20px; color: white" class="wow fadeInUp" data-wow-delay="0s">
                <?= $tour_contact_block['text_head'] ?>
            </h3>
            <br>
            <hr>
            <br>
            <br>
            <div class="row" style="margin-left: 5px">
                <div class="col-xs-6 col-md-2" style="width: 230px;">
                    <a href="viber://chat?number=+380676367247" class="thumbnail btn-social">
                        <i class="fab fa-viber"></i>
                    </a>
                    <p><?= $tour_contact_block['description_first'] ?></p>
                </div>
                <div class="col-xs-6 col-md-2" style="width: 230px">
                    <a href="https://t.me/StudentWay_Ukraina" class="thumbnail btn-social">
                        <i class="fab fa-telegram"></i>
                    </a>
                    <p><?= $tour_contact_block['description_second'] ?></p>
                </div>
                <div class="col-xs-6 col-md-2" style="width: 230px">
                    <a href="https://m.me/studentway.ukraina?ref=w3726749" class="thumbnail btn-social">
                        <i class="fab fa-facebook-messenger"></i>
                    </a>
                    <p><?= $tour_contact_block['description_third'] ?></p>
                </div>
                <div class="col-xs-6 col-md-2" style="width: 230px">
                    <a href="whatsapp://send?phone=+380968141132" class="thumbnail btn-social">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <p><?= $tour_contact_block['description_four'] ?></p>
                </div>
                <div class="col-xs-6 col-md-2" style="width: 230px">
                    <a href="https://www.instagram.com/studentway_ukraina/" class="thumbnail btn-social">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <p><?= $tour_contact_block['description_five'] ?></p>
                </div>
            </div>
            <hr>
            <br>
            <br>
            <h3 style="font-size: 20px; color: white" class="wow fadeInUp" data-wow-delay="0s">
                <?= $tour_contact_block['text_footer'] ?>
            </h3>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6"><h1><a style="color: white" title="Позвонить"
                                             href="tel:
<?= $tour_contact_block['link_phone_first'] ?>"><?= $tour_contact_block['link_phone_first'] ?></a></h1></div>
                <div class="col-md-6"><h1><a style="color: white" title="Позвонить"
                                             href="tel:
<?= $tour_contact_block['link_phone_second'] ?>"><?= $tour_contact_block['link_phone_second'] ?></a></h1></div>

            </div>
        </div>
    </div>
</div>
<!-- конец блока Контакты -->
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
