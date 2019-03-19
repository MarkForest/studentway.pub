<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Tours | Austria';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<div class="wrapper">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#00aeda; margin-top: -10px ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll" style="padding-top: 10px">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <a href="<?= \yii\helpers\Url::toRoute('/site/index') ?>"
                       style="color: white; text-decoration: none;">
                        <p style=" font-family: 'Open Sans', sans-serif "><?= $tour_head['logo_text'] ?></p>
                        <p style="font-size: 12px; margin-top: 5px "><?= $tour_head['phone_number'] ?></p>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right " id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <?php foreach ($tour_head_menus as $value): ?>
                            <li><a class="page-scroll " style="font-weight: 800; font-size: 15px; color: black;"
                                   onmouseover="this.style.color='#f5f5f5';" onmouseout="this.style.color='black';"
                                   href="#<?= $value['link_text'] ?>"><?= $value['menu_text'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->

    <div class="main app form" id="main">
        <!-- блок Главная-->
        <div class="cta-sub no-color{"
             style="background-image:linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)), url(/tours/images/<?= $tour_first_img_block->image ?>)">
            <div class="container nopadding">
                <div class="col-md-12">
                    <div class="hero-content text-center">
                        <h1 class="wow fadeInUp newcll" data-wow-delay="0.1s"
                            style="color: white"><?= $tour_first_block['title'] ?></h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"
                           style="color: white;font-size: larger; font-weight:bold  "> <?= $tour_first_block['description'] ?> </p>

                        <a href="https://m.me/studentway.ukraina?ref=w5191658" class="btn btn-action wow fadeInUp"

                           style="visibility: visible; animation-name: fadeInUp;"><?= $tour_first_block['btn_message_text'] ?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- конец блока Главная-->
        <!-- блок Инфо -->
        <div style="padding: 50px 0 20px 0;" class="pitch text-center" id="info">
            <div style="padding-bottom: 5px;" class="container">
                <div style="padding: 0;" class="pitch-intro">
                    <h1 class="wow fadeInDown" data-wow-delay="0.2s"><?= $tour_info_block['title_big_head'] ?></h1>
                    <!-- <p class="wow fadeInDown" data-wow-delay="0.2s">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p> -->
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div style="background-color: transparent;" class="pitch-icon">
                                <img src="/tours/icons/web.png" class="img-responsive" alt="picture"></img>
                                <!--<i class="ion-ios-checkmark-outline"></i>-->
                            </div>
                            <div class="pitch-content">
                                <h1><?= $tour_info_block['title_first'] ?></h1>
                                <p> <?= $tour_info_block['description_first'] ?> </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div style="background-color: transparent" class="pitch-icon">
                                <img src="/tours/icons/diploma.png" class="img-responsive" alt="picture"></img>
                            </div>
                            <div class="pitch-content">
                                <h1><?= $tour_info_block['title_second'] ?></h1>
                                <p> <?= $tour_info_block['description_second'] ?> </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div style="background-color: transparent" class="pitch-icon">
                                <img src="/tours/icons/alarm.png" class="img-responsive" alt="picture"></img>
                            </div>
                            <div class="pitch-content">
                                <h1><?= $tour_info_block['title_third'] ?></h1>
                                <p> <?= $tour_info_block['description_third'] ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div style="background-color: transparent" class="pitch-icon">
                                <img src="/tours/icons/germany.png" class="img-responsive" alt="picture"></img>
                            </div>
                            <div class="pitch-content">
                                <h1><?= $tour_info_block['title_four'] ?></h1>
                                <p> <?= $tour_info_block['description_four'] ?> </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div style="background-color: transparent" class="pitch-icon">
                                <img src="/tours/icons/graduate.png" class="img-responsive" alt="picture"></img>
                            </div>
                            <div class="pitch-content">
                                <h1><?= $tour_info_block['title_five'] ?></h1>
                                <p> <?= $tour_info_block['description_five'] ?> </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div style="background-color: transparent" class="pitch-icon">
                                <img src="/tours/icons/coins.png" class="img-responsive" alt="picture"></img>
                            </div>
                            <div class="pitch-content">
                                <h1><?= $tour_info_block['title_six'] ?></h1>
                                <p> <?= $tour_info_block['description_six'] ?> </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <a href="https://m.me/studentway.ukraina?ref=w5191658" class="btn btn-action wow fadeInUp"
               style="margin-bottom: 20px; visibility: visible; animation-name: fadeInUp;">Получить консультацию</a>
            <div>
                <h6 style="color: white; font-weight: bold"><?= $tour_info_block['text_footer'] ?></h6>
                <br>
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><a style="color: black" title="Позвонить"
                                                                     href="tel:<?= $tour_info_block['btn_first_text'] ?>"><?= $tour_info_block['btn_first_text'] ?></a>
                    </button>
                    <button type="button" class="btn btn-info"><a style="color: black" title="Позвонить"
                                                                  href="tel:<?= $tour_info_block['btn_second_text'] ?>"><?= $tour_info_block['btn_second_text'] ?></a>
                    </button>
                </div>
            </div>

        </div>
        <!-- конец блока Инфо -->

        <!-- блок Про Университеты  -->


        <div style="padding: 100px 0 50px 0" class="app-features text-center" id="about_universiti">
            <div class="container">
                <h1 class="wow fadeInDown"
                    data-wow-delay="0.1s"><?= $tour_about_university_block['title_big_head'] ?></h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s" style="color: #4a4a4a">
                    <?= $tour_about_university_block['text_head'] ?>

                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-5 wow fadeInDown" data-wow-delay="0.2s">
                                <div class="feature-single">
                                    <img class="img-responsive"
                                         src="/tours/images/<?= $tour_about_university_img_block[1]['image']; ?>"
                                         alt="App"
                                         style="margin-bottom: 30px"/>
                                </div>
                            </div>
                            <div class="col-md-7 wow fadeInDown" data-wow-delay="0.2s">
                                <div class="feature-single">
                                    <div style="background-color: transparent" class="pitch-icon">
                                        <img style="width: 70px; height: 70px;" class="img-responsive" alt="picture"
                                             src="/tours/icons/univer.png"/>
                                    </div>
                                    <h1 style="font-weight: 800"> <?= $tour_about_university_block['title_first'] ?></h1>
                <p style="color: #4a4a4a">
                    <?= $tour_about_university_block['description_first'] ?>
                </p>
                <br>
                <div style="width: 100%; display: flex; align-items: center; justify-content: center;">
                    <a href="<?php echo Yii::$app->urlManager->createUrl(['tour/venskiy-universitet']) ?>"
                       class="btn btn-action wow fadeInUp"
                       style=" width: 500px; margin-bottom: 20px; visibility: visible; animation-name: fadeInUp;"
                       target="_blank">Подробнее</a>
                </div>
            </div>

        </div>

    </div>


    <div class="row">
        <div class="col-md-7 wow fadeInDown" data-wow-delay="0.2s">
            <div class="feature-single">
                <div style="background-color: transparent" class="pitch-icon">
                    <img src="/tours/icons/search.png" class="img-responsive" alt="picture">
                </div>
                <a target="_blank"
                   href="<?php echo Yii::$app->urlManager->createUrl(['tour/venskiy-technicheskiy-universitet']) ?>">
                    <h1 style="font-weight: 800"><?= $tour_about_university_block['title_second'] ?></h1></a>
                <p style="color: #4a4a4a">
                    <?= $tour_about_university_block['description_second'] ?>
                </p>
                <br>
                <div style="width: 100%; display: flex; align-items: center; justify-content: center;">
                    <a href="<?php echo Yii::$app->urlManager->createUrl(['tour/venskiy-technicheskiy-universitet']) ?>"
                       class="btn btn-action wow fadeInUp"
                       style=" width: 500px; margin-bottom: 20px; visibility: visible; animation-name: fadeInUp;"
                       target="_blank">Подробнее</a>
                </div>
            </div>

        </div>
        <div class="col-md-5 wow fadeInDown" data-wow-delay="0.2s">
            <div class="feature-single">
                <img class="img-responsive" src="/tours/images/<?= $tour_about_university_img_block[0]['image']; ?>"
                     alt="App"
                     style="margin-bottom: 15px"/>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-5 wow fadeInDown" data-wow-delay="0.2s">
            <div class="feature-single">
                <img class="img-responsive" src="/tours/images/<?= $tour_about_university_img_block[2]['image']; ?>"
                     alt="App"/>
            </div>
        </div>
        <div class="col-md-7 wow fadeInDown" data-wow-delay="0.2s">
            <div class="feature-single">
                <div style="background-color: transparent" class="pitch-icon">
                    <img src="/tours/icons/rich.png" class="img-responsive" alt="picture">
                </div>
                <a target="_blank"
                   href="<?php echo Yii::$app->urlManager->createUrl(['tour/venskii-universitet-ekonomiki-i-biznesa']) ?>">
                    <h1 style="font-weight: 800"><?= $tour_about_university_block['title_third'] ?></h1></a>
                <p style="color: #4a4a4a">
                    <?= $tour_about_university_block['description_third'] ?>
                </p>
                <br>
                <div style="width: 100%; display: flex; align-items: center; justify-content: center;">
                    <a href="<?php echo Yii::$app->urlManager->createUrl(['tour/venskii-universitet-ekonomiki-i-biznesa']) ?>"
                       class="btn btn-action wow fadeInUp"
                       style=" width: 500px; margin-bottom: 20px; visibility: visible; animation-name: fadeInUp;"
                       target="_blank">Подробнее</a>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<div style="margin-right: 0" class="row">
    <div class="col-md-12 wow fadeInDown" data-wow-delay="0.2s">
        <div style="margin-bottom: 20px;" class="feature-single">
            <div class="icon"><i class="ion-ios-heart-outline"></i></div>
            <h1 style="font-weight: 800; font-size: xx-large"
                id="other_universities"><?= $tour_about_university_block['title_big_footer'] ?></h1>
            <br>
            <div id="listFaculties">
                <div class="text-center">
                    <br>
                    <div id="carousel" class="carousel slide" data-ride="carousel"
                         style="display: inline-block;">
                        <!-- Индикаторы -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                            <li data-target="#carousel" data-slide-to="3"></li>
                            <li data-target="#carousel" data-slide-to="4"></li>
                        </ol>
                        <div style="max-width: 1120px;" class="carousel-inner">
                            <div class="item active">
                                <img src="/tours/images/<?= $tour_other_university_img_block[0]['image'] ?>"
                                     alt="Венский Аграрный Университет">
                                <div class="carousel-caption"
                                <p style="color: #00aeda; font-size: x-large; font-weight: 400;"><?= $tour_about_university_block['curusel_title_first'] ?></p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/tours/images/<?= $tour_other_university_img_block[1]['image'] ?>"
                                 alt="Венский Медицинский Университет">
                            <div class="carousel-caption"
                            <p style="color: #00aeda; font-size: x-large; font-weight: 400;"><?= $tour_about_university_block['curusel_title_second'] ?></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/tours/images/<?= $tour_other_university_img_block[2]['image'] ?>"
                             alt="Венский Ветеринарный Университет">
                        <div class="carousel-caption"
                        <p style="color: #00aeda; font-size: x-large; font-weight: 400;"><?= $tour_about_university_block['curusel_title_third'] ?></p>
                    </div>
                </div>
                <div class="item">
                    <img src="/tours/images/<?= $tour_other_university_img_block[3]['image'] ?>"
                         alt="Венский Университет Прикладных Наук">
                    <div class="carousel-caption"
                    <p style="color: #00aeda; font-size: x-large; font-weight: 400;"><?= $tour_about_university_block['curusel_title_four'] ?></p>
                </div>
            </div>
            <div class="item">
                <img src="/tours/images/<?= $tour_other_university_img_block[4]['image'] ?>"
                     alt="Курсы немецкого языка в Вене">
                <div class="carousel-caption"
                <p style="color: #00aeda; font-size: x-large; font-weight: 400;"><?= $tour_about_university_block['curusel_title_five'] ?></p>
            </div>

        </div>
    </div>
    <!-- Элементы управления -->
    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Предыдущий</span>
    </a>
    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Следующий</span>
    </a>
</div>

</div>
</div>
<br>
<p style="color: #4a4a4a; font-size: 15px;">
    <?= $tour_about_university_block['text_footer'] ?>
</p>
</div>

<a href="https://m.me/studentway.ukraina?ref=w5191658" class="btn btn-action wow fadeInUp"

   style="visibility: visible; animation-name: fadeInUp;"><?= $tour_about_university_block['btn_message_text'] ?></a>
</div>

</div>
<br>
<div>
    <div class="btn-group">
        <button type="button" class="btn btn-info"><a style="color: black" title="Позвонить"
                                                      href="tel:<?= $tour_about_university_block['btn_first_text'] ?>"><?= $tour_about_university_block['btn_first_text'] ?></a>
        </button>
        <button type="button" class="btn btn-default"><a style="color: black" title="Позвонить"
                                                         href="tel:<?= $tour_about_university_block['btn_second_text'] ?>"><?= $tour_about_university_block['btn_second_text'] ?></a>
        </button>
    </div>
</div>
</div>
<!-- конец блока Про Университеты  -->
<!-- блок О нас -->
<div style="padding: 50px 0 0 0;" class="split-features2" id="about_us">
    <div class="row">
        <div class="col-md-6 nopadding">
            <div class="split-content second">
                <h1 class="wow fadeInUp" style="margin: 0px;"><?= $tour_about_us_block['title_big_head'] ?></h1>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p class="wow fadeInUp"
               style="color: #4a4a4a; font-weight: 500;padding-left:130px;text-align:right;line-height:35px;">
                <?= $tour_about_us_block['text_head'] ?></p>
        </div>

        <div class="col-md-5 nopadding">
            <div class="split-image"><img class="img-responsive wow fadeIn"
                                          src="/tours/images/<?= $tour_about_us_img_block[0]['image'] ?>"
                                          alt="Image"/></div>
        </div>
    </div>

</div>
<!-- About Us Section 2-->
<div class="split-features">
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <div class="split-content">
                <h1 class="wow fadeInUp" style="margin: 0px;">
                    <?= $tour_about_us_block['title_big_footer'] ?>
                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-1 nopadding">
            <div class="split-image"><img class="img-responsive wow fadeIn"
                                          src="/tours/images/<?= $tour_about_us_img_block[1]['image'] ?>"
                                          alt="Image"/></div>
        </div>
        <div class="col-md-6 nopadding">
            <div class="split-content">
                <h3 class="wow fadeInUp" style="font-weight: 700">
                    <?= $tour_about_us_block['title_first'] ?>
                </h3>
                <ul class="wow fadeInUp" style="list-style: none">
                    <li style="color: #4a4a4a">
                        <?= $tour_about_us_block['description_first'] ?>
                    </li>
                </ul>
                <h3 class="wow fadeInUp" style="font-weight: 700">
                    <?= $tour_about_us_block['title_second'] ?>
                </h3>
                <ul class="wow fadeInUp" style="list-style: none">
                    <li style="color: #4a4a4a">
                        <?= $tour_about_us_block['description_second'] ?>
                    </li>
                </ul>
                <h3 class="wow fadeInUp" style="font-weight: 700">
                    <?= $tour_about_us_block['title_third'] ?>
                </h3>
                <ul class="wow fadeInUp" style="list-style: none">
                    <li style="color: #4a4a4a">
                        <?= $tour_about_us_block['description_third'] ?>
                    </li>
                </ul>
                <h3 class="wow fadeInUp" style="font-weight: 700">
                    <?= $tour_about_us_block['title_four'] ?>
                </h3>
                <ul class="wow fadeInUp" style="list-style: none">
                    <li style="color: #4a4a4a">
                        <?= $tour_about_us_block['description_four'] ?>
                    </li>
                </ul>
                <h3 class="wow fadeInUp" style="font-weight: 700">
                    <?= $tour_about_us_block['title_five'] ?>
                </h3>
                <ul class="wow fadeInUp" style="list-style: none">
                    <li style="color: #4a4a4a">
                        <?= $tour_about_us_block['description_five'] ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div style="text-align: center; margin-top: 50px;">
        <h6 style="color: black; font-weight: bold">
            <?= $tour_about_us_block['text_footer'] ?>
        </h6>
        <br>
        <div style="width: 100%; display: flex; align-items: center; justify-content: center;">
            <a href="https://m.me/studentway.ukraina?ref=w5191658" class="btn btn-action wow fadeInUp"
               style=" width: 500px; margin-bottom: 20px; visibility: visible; animation-name: fadeInUp;">Получить
                консультацию</a>
        </div>

        <div class="btn-group">
            <button type="button" class="btn btn-default"><a style="color: black" title="Позвонить"
                                                             href="tel:<?= $tour_about_us_block['btn_first_text'] ?>"><?= $tour_about_us_block['btn_first_text'] ?></a>
            </button>
            <button type="button" class="btn btn-info"><a style="color: black" title="Позвонить"
                                                          href="tel:<?= $tour_about_us_block['btn_second_text'] ?>"><?= $tour_about_us_block['btn_second_text'] ?></a>
            </button>
        </div>
    </div>
</div>
<!-- конец блока О нас -->
<!-- блок Наши Услуги -->
<div class="split-features" id="our_services">
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <div class="split-content">
                <h1 class="wow fadeInUp"><?= $tour_our_services_block['title_big_head'] ?></h1>
            </div>
        </div>
    </div>
   <div class="row">
       <div class="col-md-5 col-md-offset-1 nopadding">
           <div class="split-image"><img class="img-responsive wow fadeIn"
                                         src="/tours/images/<?= $tour_our_services_img_block->image ?>"
                                         alt="Image"/></div>
       </div>
       <div class="col-md-6 nopadding">
           <div class="split-content">
               <h3 class="wow fadeInUp" style="font-weight: 700"><?= $tour_our_services_block['title_first'] ?></h3>
               <ul class="wow fadeInUp">
                   <li style="color: #4a4a4a"><?= $tour_our_services_block['description_first_first'] ?></li>
                   <li style="color: #4a4a4a"><?= $tour_our_services_block['description_first_second'] ?></li>
                   <li style="color: #4a4a4a"><?= $tour_our_services_block['description_first_third'] ?></li>
               </ul>
               <h3 class="wow fadeInUp" style="font-weight: 700"><?= $tour_our_services_block['title_second'] ?></h3>
               <ul class="wow fadeInUp">
                   <li style="color: #4a4a4a"><?= $tour_our_services_block['description_second_first'] ?></li>
                   <li style="color: #4a4a4a"><?= $tour_our_services_block['description_second_second'] ?></li>
                   <li style="color: #4a4a4a"><?= $tour_our_services_block['description_second_third'] ?></li>
                   <li style="color: #4a4a4a"><?= $tour_our_services_block['description_second_four'] ?></li>
               </ul>
               <h3 class="wow fadeInUp" style="font-weight: 700"><?= $tour_our_services_block['title_third'] ?> </h3>
               <ul class="wow fadeInUp">
                   <li style="color: #4a4a4a"><?= $tour_our_services_block['description_third_first'] ?></li>
                   <li style="color: #4a4a4a"><?= $tour_our_services_block['description_third_second'] ?></li>
               </ul>
               <h3 class="wow fadeInUp" style="font-weight: 700"><?= $tour_our_services_block['title_four'] ?></h3>
           </div>

       </div>
   </div>


    <div style="padding-top: 30px; width: 100%; display: flex; align-items: center; justify-content: center;">
        <a href="https://m.me/studentway.ukraina?ref=w5191658" class="btn btn-action wow fadeInUp"
           style=" width: 500px; margin-bottom: 20px; visibility: visible; animation-name: fadeInUp;">Получить
            консультацию</a>
    </div>

    <div style="text-align: center;">
        <div class="btn-group">
            <button type="button" class="btn btn-default"><a style="color: black" title="Позвонить"
                                                             href="tel:<?= $tour_our_services_block['btn_first_text'] ?>"><?= $tour_our_services_block['btn_first_text'] ?></a>
            </button>
            <button type="button" class="btn btn-info"><a style="color: black" title="Позвонить"
                                                          href="tel:<?= $tour_our_services_block['btn_second_text'] ?>"><?= $tour_our_services_block['btn_second_text'] ?></a>
            </button>
        </div>
    </div>
</div>
<!-- конец блока Наши Услуги -->
<!-- блок Цены -->
<div id="pricing" class="pricing-section text-center">
    <div class="container">
        <div class="col-md-12 col-sm-12 nopadding">
            <div class="pricing-intro">
                <h1 class="wow fadeInUp" style="margin: 0px;" data-wow-delay="0s"><?= $tour_prices_block['title_big_head'] ?></h1>
            </div>
            <div class="pricing-table">
                <div class="col">
                    <div class="table">
                        <h2>Базовый</h2>
                        <div class="price">
                            €1390

                        </div>
                        <ul>
                            <li>Подготовка к поступлению в ВУЗ</li>
                            <li>Поступление в ВУЗ</li>
                            <li>Подробный инструктаж перед и во время пребывания в Австрии</li>
                        </ul>
                        <a href="https://m.me/studentway.ukraina?ref=w5191658">Заказать сейчас</a>
                    </div>
                </div>
                <div class="col">
                    <div class="table">
                        <h2>Стандарт</h2>

                        <div class="price">
                            €1790

                        </div>
                        <ul>
                            <li>Базовый</li>
                            <li>+ Поиск и бронирования жилья</li>
                        </ul>
                        <a href="https://m.me/studentway.ukraina?ref=w5191658">Заказать сейчас</a>
                    </div>
                </div>
                <div class="col">
                    <div class="table">
                        <h2>Полный</h2>
                        <div class="price">
                            €2390

                        </div>
                        <ul>
                            <li>Стандарт</li>
                            <li>+ Подача документов на визы</li>
                            <li>+ Оформление всех документов в Австрии</li>
                        </ul>
                        <a href="https://m.me/studentway.ukraina?ref=w5191658">Заказать сейчас</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <h6 style="color: white; font-weight: bold"><?= $tour_prices_block['text_footer'] ?></h6>
        <br>
        <div class="btn-group">
            <button type="button" class="btn btn-info"><a style="color: black" title="Позвонить"
                                                          href="tel:<?= $tour_prices_block['btn_first_text'] ?>"><?= $tour_prices_block['btn_first_text'] ?></a>
            </button>
            <button type="button" class="btn btn-default"><a style="color: black" title="Позвонить"
                                                             href="tel:<?= $tour_prices_block['btn_second_text'] ?>"><?= $tour_prices_block['btn_second_text'] ?></a>
            </button>
        </div>
    </div>
</div>
<!-- конец блока Цены -->
<!-- блок Отзывы -->
<div style="padding: 150px 0 0 0" class="review-section" id="review">
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="reviews owl-carousel owl-theme">
                <div class="review-single">
                    <img class="img-circle" src="/tours/images/<?= $tour_review_img_block[0]['image'] ?>"
                         alt="Client Testimonoal"/>
                    <div class="review-text wow fadeInUp" data-wow-delay="0.2s">
                        <p><?= $tour_review_block['text_review_first'] ?></p>
                        <h3><?= $tour_review_block['name_first'] ?></h3>
                    </div>
                </div>
                <div class="review-single">
                    <img class="img-circle" src="/tours/images/<?= $tour_review_img_block[1]['image'] ?>"
                         alt="Client Testimonoal"/>
                    <div class="review-text">
                        <p><?= $tour_review_block['text_review_second'] ?></p>
                        <h3><?= $tour_review_block['name_second'] ?></h3>
                    </div>
                </div>
                <div class="review-single"><img class="img-circle"
                                                src="/tours/images/<?= $tour_review_img_block[2]['image'] ?>"
                                                alt="Client Testimonoal"/>
                    <div class="review-text">
                        <p><?= $tour_review_block['text_review_third'] ?></p>
                        <h3><?= $tour_review_block['name_third'] ?></h3>
                    </div>
                </div>
                <div class="review-single"><img class="img-circle"
                                                src="/tours/images/<?= $tour_review_img_block[3]['image'] ?>"
                                                alt="Client Testimonoal"/>
                    <div class="review-text">
                        <p><?= $tour_review_block['text_review_four'] ?></p>
                        <h3><?= $tour_review_block['name_four'] ?></h3>
                    </div>
                </div>
                <div class="review-single"><img class="img-circle"
                                                src="/tours/images/<?= $tour_review_img_block[4]['image'] ?>"
                                                alt="Client Testimonoal"/>
                    <div class="review-text">
                        <p><?= $tour_review_block['text_review_five'] ?></p>
                        <h3><?= $tour_review_block['name_five'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- конец блока Отзывы -->
<!-- блок Часто задаваемые вопросы -->
<div style="padding: 40px 0 40px 0" class="pitch text-center" id="questions">
    <div class="container">
        <div style="padding: 0 0 10px 0;" class="pitch-intro">
            <h1 class="wow fadeInDown" data-wow-delay="0.2s"><?= $tour_questions_block['title_big_head'] ?></h1>
            <!-- <p class="wow fadeInDown" data-wow-delay="0.2s">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p> -->
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                    <div style="background-color: transparent" class="pitch-icon">
                        <img class="img-responsive" src="/tours/icons/file.png" alt="picture">
                    </div>
                    <div class="pitch-content">
                        <h1><?= $tour_questions_block['title_first'] ?></h1>
                        <p>
                            <?= $tour_questions_block['description_first'] ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                    <div style="background-color: transparent" class="pitch-icon">
                        <img class="img-responsive" src="/tours/icons/hourglass.png" alt="picture">
                    </div>
                    <div class="pitch-content">
                        <h1><?= $tour_questions_block['title_second'] ?></h1>
                        <p>
                            <?= $tour_questions_block['description_second'] ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                    <div style="background-color: transparent" class="pitch-icon">
                        <img class="img-responsive" src="/tours/icons/germany.png" alt="picture">
                    </div>
                    <div class="pitch-content">
                        <h1><?= $tour_questions_block['title_third'] ?></h1>
                        <p>
                            <?= $tour_questions_block['description_third'] ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                    <div style="background-color: transparent" class="pitch-icon">
                        <img class="img-responsive" src="/tours/icons/coins.png" alt="picture">
                    </div>
                    <div class="pitch-content">
                        <h1><?= $tour_questions_block['title_four'] ?></h1>
                        <p>
                            <?= $tour_questions_block['description_four'] ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                    <div style="background-color: transparent" class="pitch-icon">
                        <img class="img-responsive" src="/tours/icons/diploma.png" alt="picture">
                    </div>
                    <div class="pitch-content">
                        <h1><?= $tour_questions_block['title_five'] ?></h1>
                        <p>
                            <?= $tour_questions_block['description_five'] ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                    <div style="background-color: transparent" class="pitch-icon">
                        <img class="img-responsive" src="/tours/icons/report.png" alt="picture">
                    </div>
                    <div class="pitch-content">
                        <h1><?= $tour_questions_block['title_six'] ?></h1>
                        <p>
                            <?= $tour_questions_block['description_six'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="width: 100%; display: flex; align-items: center; justify-content: center;">
        <a href="https://m.me/studentway.ukraina?ref=w5191658" class="btn btn-action wow fadeInUp"
           style=" width: 500px; margin-bottom: 20px; visibility: visible; animation-name: fadeInUp;">Получить
            консультацию</a>
    </div>
    <div style="text-align: center;">
        <h6 style="color: white; font-weight: bold"><?= $tour_questions_block['text_footer'] ?></h6>
        <br>
        <div class="btn-group">
            <button type="button" class="btn btn-default"><a style="color: black" title="Позвонить"
                                                             href="tel:<?= $tour_questions_block['btn_first_text'] ?>"><?= $tour_questions_block['btn_first_text'] ?></a>
            </button>
            <button type="button" class="btn btn-info"><a style="color: black" title="Позвонить"
                                                          href="tel:<?= $tour_questions_block['btn_second_text'] ?>"><?= $tour_questions_block['btn_second_text'] ?></a>
            </button>
        </div>
    </div>
</div>
<!-- конец блока Часто задаваемые вопросы -->

</body>
</html>
