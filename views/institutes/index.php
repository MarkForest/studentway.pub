<?php
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<!--CHoose Institute-->
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Українська мова</th>
                            <th>Русский язык</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr class="success">
                            <td><?= Html::a('АКАДЕМИЯ ИМ. А.Ф. МОДЖЕВСКОГО В КРАКОВЕ', ['institutes/index?reg=modzewskogo&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('АКАДЕМІЯ ІМ. А.Ф. МОДЖЕВСЬКОГО У КРАКОВІ', ['institutes/index?reg=modzewskogo&loc=uk'])?><img src="/images/uk.png"></td>
                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('COLLEGIUM CIVITAS (ВАРШАВА)', ['institutes/index?reg=civitas&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('COLLEGIUM CIVITAS (ВАРШАВА)', ['institutes/index?reg=civitas&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="info">
                            <td><?= Html::a('COLLEGIUM DA VINCI (ВЫСШАЯ ШКОЛА ГУМАНИТАРНЫХ НАУК В ПОЗНАНИ)', ['institutes/index?reg=cdv&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('COLLEGIUM DA VINCI (ВИЩА ШКОЛА ГУМАНІТАРНИХ НАУК В ПОЗНАНІ)', ['institutes/index?reg=cdv&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('АКАДЕМИЯ ИМ. ЛЕОНА КОЗМИНСКОГО В ВАРШАВЕ', ['institutes/index?reg=kozmonskego&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('АКАДЕМІЯ ІМ. ЛЕОНА КОЗМІНСЬКОГО У ВАРШАВІ', ['institutes/index?reg=kozmonskego&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="active">
                            <td><?= Html::a('АКАДЕМИЯ МОРСКАЯ В ЩЕЦИНЕ', ['institutes/index?reg=mas&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('АКАДЕМІЯ МОРСЬКА в ЩЕЦИНІ', ['institutes/index?reg=mas&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="success">
                            <td><?= Html::a('АКАДЕМИЯ ОБЩЕСТВЕННЫХ НАУК В ВАРШАВЕ', ['institutes/index?reg=san&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('АКАДЕМІЯ ГРОМАДСЬКИХ НАУК У ВАРШАВІ', ['institutes/index?reg=san&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА БИЗНЕСА В ДОМБРОВЕ ГУРНИЧЕЙ', ['institutes/index?reg=wsbdg&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a(' ВИЩА ШКОЛА БІЗНEСУ В ДОМБРОВІ ГУРНІЧEЙ', ['institutes/index?reg=wsbdg&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="info">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА ГОСТИНИЧНОГО БИЗНЕСА И ОБЩЕСТВЕННОГО ПИТАНИЯ В ПОЗНАНИ', ['institutes/index?reg=gotelpoz&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('ВИЩА ШКОЛА ГОТЕЛЬНОГО БІЗНЕСУ ТА ГРОМАДСЬКОГО ХАРЧУВАННЯ У ПОЗНАНІ', ['institutes/index?reg=gotelpoz&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА ЛОГИСТИКИ В ПОЗНАНИ', ['institutes/index?reg=logistpoz&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('ВИЩА ШКОЛА ЛОГИСТИКИ В ПОЗНАНІ', ['institutes/index?reg=logistpoz&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="active">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА ТУРИЗМА И ЭКОЛОГИИ В СУХОЙ БЕСКИДСКОЙ', ['institutes/index?reg=sb&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('ВИЩА ШКОЛА ТУРИЗМУ ТА ЕКОЛОГІЇ В СУХИЙ БЕСКИДСЬКІЙ', ['institutes/index?reg=sb&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="success">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА ЭКОНОМИКИ В РАДОМЕ', ['institutes/index?reg=radom&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('ВИЩА ШКОЛА ЕКОНОМІКИ У РАДОМІ', ['institutes/index?reg=radom&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('ГОРНО-МЕТАЛЛУРГИЧЕСКАЯ АКАДЕМИЯ В КРАКОВЕ', ['institutes/index?reg=agh&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('ГІРНИЧО-МЕТАЛУРГІЙНА АКАДЕМІЯ У КРАКОВІ', ['institutes/index?reg=agh&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="info">
                            <td><?= Html::a('ПЕДАГОГИЧЕСКИЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['institutes/index?reg=pedkr&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('ПЕДАГОГІЧНИЙ УНІВЕРСИТЕТ У КРАКОВІ', ['institutes/index?reg=pedkr&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('ПОЛИТЕХНИЧЕСКИЙ УНИВЕРСИТЕТ В ВАРШАВЕ', ['institutes/index?reg=politehw&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('ПОЛІТЕХНІЧНИЙ УНІВЕРСИТЕТ У ВАРШАВІ', ['institutes/index?reg=politehw&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="active">
                            <td><?= Html::a('ПОЛИТЕХНИЧЕСКИЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['institutes/index?reg=politehkr&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('ПОЛІТЕХНІЧНИЙ УНІВЕРСИТЕТ В КРАКОВІ', ['institutes/index?reg=politehkr&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="success">
                            <td><?= Html::a('ПОЛИТЕХНИЧЕСКИЙ УНИВЕРСИТЕТ ВО ВРОЦЛАВЕ', ['institutes/index?reg=politehwr&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('ПОЛІТЕХНІЧНИЙ УНІВЕРСИТЕТ У ВРОЦЛАВІ', ['institutes/index?reg=politehwr&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('ПОЛЬСКО-ЯПОНСКАЯ АКАДЕМИЯ КОМПЬЮТЕРНЫХ ТЕХНОЛОГИЙ', ['institutes/index?reg=pj&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('ПОЛЬСЬКО-ЯПОНСЬКА АКАДЕМІЯ КОМП\'ЮТЕРНИХ ТЕХНОЛОГІЙ', ['institutes/index?reg=pj&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="info">
                            <td><?= Html::a('СЕЛЬСКОХОЗЯЙСТВЕННЫЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['institutes/index?reg=rolkr&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('СІЛЬСЬКОГОСПОДАРСЬКИЙ УНІВЕРСИТЕТ В КРАКОВІ', ['institutes/index?reg=rolkr&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('СИЛЕЗСКИЙ УНИВЕРСИТЕТ В КАТОВИЦАХ', ['institutes/index?reg=sukatov&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('СІЛЕЗЬКИЙ УНІВЕРСИТЕТ В КАТОВИЦЯХ', ['institutes/index?reg=sukatov&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="active">
                            <td><?= Html::a('УНИВЕРСИТЕТ SWPS', ['institutes/index?reg=swps&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('УНІВЕРСИТЕТ SWPS', ['institutes/index?reg=swps&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="success">
                            <td><?= Html::a('УНИВЕРСИТЕТ ВАРШАВСКИЙ', ['institutes/index?reg=uw&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('УНІВЕРСИТЕТ ВАРШАВСЬКИЙ', ['institutes/index?reg=uw&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('УНИВЕРСИТЕТ ВРОЦЛАВСКИЙ', ['institutes/index?reg=uwr&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('УНІВЕРСИТЕТ ВРОЦЛАВСЬКИЙ', ['institutes/index?reg=uwr&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="info">
                            <td><?= Html::a('УНИВЕРСИТЕТ ИМ. АДАМА МИЦКЕВИЧА В ПОЗНАНИ', ['institutes/index?reg=uam&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('УНІВЕРСИТЕТ ЇМ. АДАМА МІЦКЕВИЧА В ПОЗНАНІ', ['institutes/index?reg=uam&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('УНИВЕРСИТЕТ ИМ. МАРИИ КЮРИ-СКЛОДОВСКОЙ В ЛЮБЛИНЕ', ['institutes/index?reg=usk&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('УНІВЕРСИТЕТ ЇМ. МАРІЇ КЮРИ-СКЛОДОВСКОЙ В ЛЮБЛІНІ', ['institutes/index?reg=usk&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="active">
                            <td><?= Html::a('УНИВЕРСИТЕТ ОПОЛЬСКИЙ', ['institutes/index?reg=uo&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('УНІВЕРСИТЕТ ОПОЛЬСКИЙ', ['institutes/index?reg=uo&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="success">
                            <td><?= Html::a('УНИВЕРСИТЕТ ПРИРОДНИЧИЙ В ПОЗНАНИ', ['institutes/index?reg=prurodpoz&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('УНІВЕРСИТЕТ ПРИРОДНИЧИЙ В ПОЗНАНІ', ['institutes/index?reg=prurodpoz&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('УНИВЕРСИТЕТ ЩЕЦИНСКИЙ', ['institutes/index?reg=uz&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('УНІВЕРСИТЕТ ЩЕЦІНСЬКИЙ', ['institutes/index?reg=uz&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="info">
                            <td><?= Html::a('ЭКОНОМИЧЕСКИЙ УНИВЕРСИТЕТ В КАТОВИЦАХ', ['institutes/index?reg=uekat&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('ЕКОНОМІЧНИЙ УНІВЕРСИТЕТ В КАТОВИЦЯХ', ['institutes/index?reg=uekat&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('ЭКОНОМИЧЕСКИЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['institutes/index?reg=uek&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('ЕКОНОМІЧНИЙ УНІВЕРСИТЕТ В КРАКОВІ', ['institutes/index?reg=uek&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        <tr class="active">
                            <td><?= Html::a('ЯГЕЛЛОНСКИЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['institutes/index?reg=uj&loc=ru'])?><img src="/images/ru.png"></td>
                            <td><?= Html::a('ЯГЕЛЛОНСКИЙ УНІВЕРСИТЕТ В КРАКОВІ', ['institutes/index?reg=uj&loc=uk'])?><img src="/images/uk.png"></td>

                        </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>


<!-- preloader section -->
<div class="preloader">
    <div class="sk-spinner sk-spinner-circle">
        <div class="sk-circle1 sk-circle"></div>
        <div class="sk-circle2 sk-circle"></div>
        <div class="sk-circle3 sk-circle"></div>
        <div class="sk-circle4 sk-circle"></div>
        <div class="sk-circle5 sk-circle"></div>
        <div class="sk-circle6 sk-circle"></div>
        <div class="sk-circle7 sk-circle"></div>
        <div class="sk-circle8 sk-circle"></div>
        <div class="sk-circle9 sk-circle"></div>
        <div class="sk-circle10 sk-circle"></div>
        <div class="sk-circle11 sk-circle"></div>
        <div class="sk-circle12 sk-circle"></div>
    </div>
</div>

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <!--<a href="<?= Url::toRoute('/site/index')?>" class="navbar-brand"><?=$loc=='uk'?nl2br($iHome['logo_title_uk']):nl2br($iHome['logo_title_ru'])?></a> -->
			<a href="<?= Url::toRoute('/site/index')?>" class="navbar-brand"><img src="/institute/images/400_64.png" class="img-responsive" alt="StudentWay"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right top-menu">
                <li><a href="#home" class="smoothScroll active"><?=$loc=='uk'?nl2br($iMenu['home_uk']):nl2br($iMenu['home_ru'])?></a></li>
                <li><a href="#work" class="smoothScroll"><?=$loc=='uk'?nl2br($iMenu['wedo_uk']):nl2br($iMenu['wedo_ru'])?></a></li>
                <li><a href="#about" class="smoothScroll"><?=$loc=='uk'?nl2br($iMenu['level_uk']):nl2br($iMenu['level_ru'])?></a></li>
                <li><a href="#portfolio" class="smoothScroll"><?=$loc=='uk'?nl2br($iMenu['portfolio_uk']):nl2br($iMenu['portfolio_ru'])?></a></li>
                <li><a href="#team" class="smoothScroll"><?=$loc=='uk'?nl2br($iMenu['sent_uk']):nl2br($iMenu['sent_ru'])?></a></li>
                <li><a href="#pricing" class="smoothScroll"><?=$loc=='uk'?nl2br($iMenu['price_uk']):nl2br($iMenu['price_ru'])?></a></li>
                <li><a href="#footer" class="smoothScroll"><?=$loc=='uk'?nl2br($iMenu['contact_uk']):nl2br($iMenu['contact_ru'])?></a></li>
            </ul>
        </div>
    </div>
</section>

<!-- home section -->
<section id="home">
    <div class="container">
<!--        todo ПЕРВЫЙ ВАРИАНТ!-->
        <div class="row">
            <div class="col-md-12 soc-block text-right">
                <a target="_blank" href="<?=\yii\helpers\Url::to('https://www.facebook.com/studentway.ukraina/')?>"><img src="../../web/institute/images/facebook_color.png" alt="" class="soc-icons"></a>
                <a target="_blank" href="<?=\yii\helpers\Url::to('https://www.instagram.com/studentway_ukraina/')?>"><img src="../../web/institute/images/instagram_color.png" alt="" class="soc-icons"></a>
                <a target="_blank" href="<?=\yii\helpers\Url::to('https://www.youtube.com/channel/UCTZ6RKr62Fc3GgXOdnvWXuQ')?>"><img src="../../web/institute/images/youtube_color.png" alt="" class="soc-icons"></a>
                <a target="_blank" href="<?=\yii\helpers\Url::to('https://web.telegram.org/#/im?p=@studentwaypl')?>"><img src="../../web/institute/images/telegram.png" alt="" class="soc-icons"></a>
                <a target="_blank" href="<?=\yii\helpers\Url::to('https://twitter.com/StudentwayU')?>"><img src="../../web/institute/images/twiter_color.png" alt="" class="soc-icons"></a>
            </div>
        </div>
        <div class="row">
<!-- todo Исправил dic на div-->
            <div class="col-md-4 text-left">
                <div class="disc-block">
                    <p><i><?= $loc=='uk'?nl2br($iHome['top_description_uk']):nl2br($iHome['top_description_ru'])?></i></p>
                </div>
            </div>
            <div class="col-md-8 text-right soc-block"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">

                <p class="newsize"><?=$loc=='uk'?nl2br($iHome['main_description_uk']):nl2br($iHome['main_description_ru'])?></p>
                <h1><?=$loc=='uk'?nl2br($iHome['header_uk']):nl2br($iHome['header_ru'])?></h1>
                <h3><?=$loc=='uk'?nl2br($iHome['city_uk']):nl2br($iHome['city_ru'])?></h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <?php foreach($iHomeList as $list):?>
            <div class="col-md-4" >
                    <a onclick="LIRAX.showWidget()" class="smoothScroll btn btn-danger sign-up">
                        <h3><?= $loc=='uk'?nl2br($list['title_uk']):nl2br($list['title_ru'])?></h3>
                        <p><?= $loc=='uk'?nl2br($list['content_uk']):nl2br($list['content_ru'])?></p>
                        <h3><?= $loc=='uk'?nl2br($list['consult_uk']):nl2br($list['consult_ru'])?></h3>
                    </a>
            </div>
            <?php endforeach;?>
        </div>
    </div>
<!--    Фоновые изображения-->
    <?php $count = 1;?>
    <?php foreach($iHomePhoto as $photo):?>
    <span id="path<?=$count++;?>" class="hidden"><?=$photo['photo'];?></span>
    <?php endforeach;?>
</section>

<!-- work section -->
<section id="work">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <strong>01</strong>
                    <h1 class="heading bold"><?=$loc=='uk'?nl2br($iFirst['title_uk']):nl2br($iFirst['title_ru'])?></h1>
                    <hr>
                </div>
            </div>
            <?php $count=0?>
            <?php foreach($iFirstList as $list):?>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                <i class="<?=$iFirstIcons[$count++]?> medium-icon"></i>
                <h3><?=$loc=='uk'?nl2br($list['title_uk']):nl2br($list['title_ru'])?></h3>
                <hr>
                <p><?=$loc=='uk'?nl2br($list['content_uk']):nl2br($list['content_ru'])?></p>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<!-- about section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="section-title">
                    <strong>02</strong>
                    <h1 class="heading bold"><?=$loc=='uk'?nl2br($iSecond['title_uk']):nl2br($iSecond['title_ru'])?></h1>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="/institute/images/<?=$iSecond['photo']?>" class="img-responsive" alt="about img">
            </div>


            <div class="col-md-6 col-sm-12">
                <h3 class="bold" style="text-transform: uppercase"><?=$loc=='uk'?nl2br($iSecond['top_description_uk']):nl2br($iSecond['top_description_ru'])?></h3>
                <h1 class="heading bold"><?=$loc=='uk'?nl2br($iSecond['description_uk']):nl2br($iSecond['description_ru'])?></h1>
                <!-- Nav tabs -->


                <ul class="nav nav-tabs" role="tablist">
                    <?php $count=1;?>
                    <?php foreach($iSecondList as $list):?>
                        <li class="<?=$count==1?'active':''?>"><a href="#<?=$list['id']?>" aria-controls="<?=$list['id']?>" role="tab" data-toggle="tab"><?=$loc=='uk'?nl2br($list['title_uk']):nl2br($list['title_ru'])?></a></li>
                        <?php $count++;?>
                    <?php endforeach;?>
                </ul>
                <!-- tab panes -->
                <div class="tab-content">
                    <?php $count=1;?>
                    <?php foreach($iSecondList as $list):?>
                    <div role="tabpanel" class="tab-pane <?=$count==1?'active':''?>" id="<?=$list['id']?>">
                        <h4 style="font-weight: normal;"><?=$loc=='uk'?nl2br($list['description_uk']):nl2br($list['description_ru'])?></h4>
                        <p><?=$loc=='uk'?nl2br($list['content_uk']):nl2br($list['content_ru'])?></p>
                        <p><a href="#" data-toggle="modal" data-target="#myModal<?=$count?>"><?=$loc=='uk'?nl2br($list['link_text_uk']):nl2br($list['link_text_ru'])?></a></p>
                    </div>
                        <?php $count++;?>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- portfolio section -->
<div id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <strong>03</strong>
                    <h1 class="heading bold"><?=$loc=='uk'?nl2br($iThird['title_uk']):nl2br($iThird['title_ru'])?></h1>
                    <hr>
                </div>
                <!-- ISO section -->
                <div class="iso-section">

                    <ul class="filter-wrapper hidden-xs">
                        <?php $count=1;?>
                        <?php foreach($iThirdList as $list):?>
                        <li><a href="#" id="<?=$count==1?'firstPort':''?>" class="opc-main-bg <?=$count==1?'selected':''?>" data-filter=".<?=$list['id']?>"><?=$loc=='uk'?nl2br($list['header_uk']):nl2br($list['header_ru'])?></a></li>
                        <?php $count++;?>
                        <?php endforeach;?>
                        <li><a href="#" id="btnAll1" class="opc-main-bg" data-filter=".all">Все</a></li>
                    </ul>
                    <div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
                        <div class="iso-box-wrapper col4-iso-box">
                            <?php foreach($iThirdList as $list):?>

                                <?php foreach(\app\models\IThirdListPhoto::find()->where(['iThird_list_id'=>$list['id']])->all() as $photo):?>

                                    <div class="hidden-xs all iso-box <?=$list['id']?> html wordpress mobile col-lg-4 col-md-4 col-sm-6">
                                        <a href="/institute/images/<?=$photo['photo']?>" data-lightbox-gallery="portfolio-gallery"><img src="/institute/images/<?=$photo['photo']?>" alt="portfolio img"></a>
                                    </div>

                                <?php endforeach?>

                            <?php endforeach;?>

                            <?php foreach($iThirdList as $list):?>
                            <div class="all iso-box <?=$list['id']?> document career history text-left col-md-10 col-md-offset-1" style="border: 3px solid #27a9ff; padding: 20px; margin-top: 40px;">
                                <h3 class="page-header" style="font-weight: normal"><?=$loc=='uk'?nl2br($list['title_uk']):nl2br($list['title_ru'])?></h3>
                                <p><?=$loc=='uk'?nl2br($list['content_uk']):nl2br($list['content_ru'])?></p>
                                <a onclick="LIRAX.showWidget()" class="mynew" style=" cursor: pointer; "><?=$loc=='uk'?nl2br($list['button_text_uk']):nl2br($list['button_text_ru'])?></a>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- team section -->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <strong>04</strong>
                    <h1 class="heading bold"><?=$loc=='uk'?nl2br($iFourth['title_uk']):nl2br($iFourth['title_ru'])?></h1>
                    <hr>
                </div>
            </div>
            <?php foreach($iFourthList as $list):?>
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
                <div class="team-wrapper">
                    <img src="/institute/images/<?=\app\models\IFourthListPhoto::findOne($list['id'])->toArray()['photo']?>" class="img-responsive" alt="team img">
                    <div class="team-des">
                        <h4><?=$loc=='uk'?nl2br($list['title_uk']):nl2br($list['title_ru'])?></h4>
                        <h3 style="line-height: 1.7em"><?=$loc=='uk'?nl2br($list['content_uk']):nl2br($list['content_ru'])?></h3>
                        <hr>
                        <a href="#" onclick="LIRAX.showWidget()" class="smoothScroll" style="border-radius: 15px 15px 15px 15px;">
                            <?=$loc=='uk'?nl2br($list['button_text_uk']):nl2br($list['button_text_ru'])?>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach?>
        </div>
    </div>
</section>

<!-- pricing section -->
<section id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="section-title">
                    <strong>05</strong>
                    <h1 class="heading bold"><?=$loc=='uk'?nl2br($iFifth['title_uk']):nl2br($iFifth['title_ru'])?></h1>
                    <hr>
                </div>
            </div>
            <?php foreach($iFifthList as $list):?>
            <div class="col-md-4 col-sm-6">
                <div class="plan plan-one wow bounceIn" data-wow-delay="0.3s">
                    <div class="plan_title">
                        <i class="icon-wallet medium-icon"></i>
                        <h3><?=$loc=='uk'?nl2br($list['title_uk']):nl2br($list['title_ru'])?></h3>
                        <h2><?=$list['coast']?><span><?=$loc=='uk'?nl2br($list['period_uk']):nl2br($list['period_ru'])?></span></h2>
                    </div>
                    <ul>
                        <li><?=$loc=='uk'?nl2br($list['list_one_uk']):nl2br($list['list_one_ru'])?></li>
                        <li><?=$loc=='uk'?nl2br($list['list_two_uk']):nl2br($list['list_two_ru'])?></li>
                        <li><?=$loc=='uk'?nl2br($list['list_three_uk']):nl2br($list['list_three_ru'])?></li>
                    </ul>
                    <button class="btn btn-warning" onclick="LIRAX.showWidget()"><?=$loc=='uk'?nl2br($list['button_text_uk']):nl2br($list['button_text_ru'])?></button>
                </div>
            </div>
            <?php endforeach?>
        </div>
    </div>
</section>

<!--Perspective learning-->
<div id="perspectiveInLearning">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title text-center">
                    <strong>06</strong>
                    <h1 class="heading bold"><?=$loc=='uk'?nl2br($iSixth['title_uk']):nl2br($iSixth['title_ru'])?></h1>
                    <hr>
                </div>
                <!-- ISO section -->
                <div class="iso-section">
                    <ul class="hidden-xs filter-wrapper2">
                        <?php $count=1;?>
                        <?php foreach($iSixthList as $list):?>
                        <li><a href="#" id="<?=$count==1?'firstPerspective':''?>" class="opc-main-bg <?=$count==1?'selected':''?>" data-filter=".<?=$list['id']?>"><?=$loc=='uk'?nl2br($list['header_uk']):nl2br($list['header_ru'])?></a></li>
                        <?php $count++?>
                        <?php endforeach?>
                        <li><a href="#" id="btnAll2" class="opc-main-bg" data-filter=".all2">Все</a></li>

                    </ul>
                    <div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
                        <div class="iso-box-wrapper1 col4-iso-box">
                            <?php foreach($iSixthList as $list):?>
                                <?php foreach(\app\models\ISixthListPhoto::find()->where(['iSixth_list_id'=>$list['id']])->all() as $list_photo):?>
                            <div class="hidden-xs all2 iso-box <?=$list['id']?> car history col-lg-4 col-md-4 col-sm-6 ">
                                <a href="/institute/images/<?=$list_photo['photo']?>" data-lightbox-gallery="portfolio-gallery"><img src="/institute/images/<?=$list_photo['photo']?>" alt="portfolio img"></a>
                            </div>
                                <?php endforeach?>
                            <?php endforeach?>
                            <?php foreach($iSixthList as $list):?>
                            <div class="all2 iso-box document <?=$list['id']?> wordpress mobile photoshop html text-left col-md-10 col-md-offset-1" style="border: 3px solid #27a9ff; padding: 20px;">
                                <h3 class="page-header" style="font-weight: normal"><?=$loc=='uk'?nl2br($list['title_uk']):nl2br($list['title_ru'])?></h3>
                                <p><?=$loc=='uk'?nl2br($list->content_uk):nl2br($list->content_ru)?></p>
                            </div>
                            <?php endforeach?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--Testimonials -->
<section id="Testimonials">
    <div class="section-title text-center">
        <strong>07</strong>
        <h1 class="heading bold"><?=$loc=='uk'?nl2br($iSeventh['title_uk']):nl2br($iSeventh['title_ru'])?></h1>
        <hr>
    </div>
    <div id="sequence" class="seq">

        <div class="seq-screen">
            <ul class="seq-canvas">
                <?php foreach($iSeventhList as $list):?>
                <li class="seq-in">
                    <div class="seq-model">
                        <img style="height: 80%" data-seq src="/institute/images/<?=\app\models\ISeventhListPhoto::findOne(['iSeventh_list_id'=>$list['id']])->toArray()['photo']?>" alt="A female model with long curly brown hair wears a gray sweater, brown shorts, bright yellow socks, and black high heel shoes. She raises one leg, and tilts her head to the side" />
                    </div>

                    <div class="seq-title">
                        <h2 data-seq><?=$loc=='uk'?nl2br($list['name_uk']):nl2br($list['name_ru'])?></h2>
                        <h3 data-seq><?=$loc=='uk'?nl2br($list['content_uk']):nl2br($list['content_ru'])?></h3>
                    </div>
                </li>
                <?php endforeach?>
            </ul>
        </div>

        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
            <button type="button" class="seq-prev" aria-label="Previous">Previous</button>
            <button type="button" class="seq-next" aria-label="Next">Next</button>
        </fieldset>

        <ul role="navigation" aria-label="Pagination" class="seq-pagination">
            <?php foreach($iSeventhList as $list):?>
            <li><a href="#step1" rel="step1" title="Go to slide 1"><img style="height: 130px;"  src="/institute/images/<?=\app\models\ISeventhListPhoto::findOne(['iSeventh_list_id'=>$list['id']])->toArray()['photo']?>" /></a></li>
            <?php endforeach?>
        </ul>
    </div>
</section>

<!-- contact section-->
<section id="contact" style="background-image: url('/institute/images/<?=$iEighth["photo_back"]?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="section-title">
                    <strong>08</strong>
                    <h1 class="heading bold"><?=$loc=='uk'?nl2br($iEighth['title_uk']):nl2br($iEighth['title_ru'])?></h1>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 contact-info">
                <h2 class="heading bold"><?=$loc=='uk'?nl2br($iEighth['info_title_uk']):nl2br($iEighth['info_title_ru'])?></h2>
                <p><?=$loc=='uk'?nl2br($iEighth['info_content_uk']):nl2br($iEighth['info_content_ru'])?></p>
                <div class="col-md-6 col-sm-4">
                    <h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> <?=$loc=='uk'?nl2br($iEighth['email_title_uk']):nl2br($iEighth['email_title_ru'])?></h3>
                    <p><?=$iEighth['email_content']?></p>
                </div>
                <div class="col-md-6 col-sm-4">
                    <h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> <?=$loc=='uk'?nl2br($iEighth['phone_title_uk']):nl2br($iEighth['phone_title_ru'])?></h3>
                    <p><?=$iEighth['phone_content']?></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <?php $form = ActiveForm::begin(['id'=>'MessageContactForm','class'=>'wow fadeInUp',]);?>

                    <div class="col-md-6 col-sm-6">
                        <?=$form->field($MessageContactForm,'name')->textInput(['placeholder'=>$loc=='ru'?'Имя':'Ім\'я'])->label(false)?>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <?=$form->field($MessageContactForm,'email')->textInput(['placeholder'=>'Email'])->label(false)?>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <?=$form->field($MessageContactForm,'message')->textarea(['placeholder'=>$loc=='ru'?'Сообщение':'Повідомлення','rows'=>'7'])->label(false)?>
                    </div>
                    <div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
                        <?=$form->field($MessageContactForm,'institute')->textInput(['value'=>$reg, 'class'=>'hidden'])->label(false);?>
                        <?php $btn_text = ($loc=='uk'?nl2br($iEighth['button_text_uk']):nl2br($iEighth['button_text_ru']));?>
                        <?=Html::submitButton($btn_text,['class'=>'form-control']);?>

                    </div>

                <?php ActiveForm::end();?>

            </div>
        </div>
    </div>
</section>

<!-- footer section -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p><?=$loc=='uk'?nl2br($iEighth['copyright_uk']):nl2br($iEighth['copyright_ru'])?></a></p>
                <hr>
                <ul class="social-icon">
                    <li>
                        <a target="_blank" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s" href="<?=\yii\helpers\Url::to('https://www.facebook.com/studentway2017/')?>"></a>
                    </li>
                    <li>
                        <a target="_blank" class="fa fa-youtube wow fadeIn" data-wow-delay="0.6s" href="<?=\yii\helpers\Url::to('https://www.youtube.com/user/kovalenkoo1964')?>"></a>
                    </li>
                </ul>
                <div id="btnOpenSpace">
                    <span  style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Все ВУЗы</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div  id="myModal" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Введите Ваш Email</h4>
            </div>
            <?php $form = ActiveForm::begin(['id'=>'LevelMessageForm1'])?>
            <div class="modal-body">

                    <div class="form-group">
                        <?=$form->field($LevelMessageForm,'email')->textInput()->label()?>
                        <?=$form->field($LevelMessageForm,'level')->textInput(['value'=>'БАКАЛАВР','class'=>'hidden'])->label(false)?>
                        <?=$form->field($LevelMessageForm,'institute')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <?= Html::submitButton($loc=='ru'?'Отправить':'Відправити',['class'=>'btn btn-primary'])?>
            </div>
            <?php ActiveForm::end()?>
        </div>
    </div>
</div><!-- /.modal -->

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div  id="myModal" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Введите Ваш Email</h4>
            </div>
            <?php $form = ActiveForm::begin(['id'=>'LevelMessageForm2'])?>
            <div class="modal-body">

                <div class="form-group">
                    <?=$form->field($LevelMessageForm,'email')->textInput()->label()?>
                    <?=$form->field($LevelMessageForm,'level')->textInput(['value'=>'МАГИСТР','class'=>'hidden'])->label(false)?>
                    <?=$form->field($LevelMessageForm,'institute')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <?= Html::submitButton($loc=='ru'?'Отправить':'Відправити',['class'=>'btn btn-primary'])?>
            </div>
            <?php ActiveForm::end()?>
        </div>
    </div>
</div><!-- /.moda2 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div  id="myModal" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Введите Ваш Email</h4>
            </div>
            <?php $form = ActiveForm::begin(['id'=>'LevelMessageForm3'])?>
            <div class="modal-body">

                <div class="form-group">
                    <?=$form->field($LevelMessageForm,'email')->textInput()->label()?>
                    <?=$form->field($LevelMessageForm,'level')->textInput(['value'=>'НА АНГИЙСКОМ','class'=>'hidden'])->label(false)?>
                    <?=$form->field($LevelMessageForm,'institute')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <?= Html::submitButton($loc=='ru'?'Отправить':'Відправити',['class'=>'btn btn-primary'])?>
            </div>
            <?php ActiveForm::end()?>
        </div>
    </div>

</div><!-- /.moda3 -->



<div class="alert alert-success message-success">
    <?=$loc=='uk'?'Повідомлення відправленно':'Сообщение nl2br(отправлено'?>
</div)>

<div class="alert alert-danger message-danger">
    <?=$loc=='uk'?'Повідомлення не відправленно! Перевірте )поля nl2br(які ви заповнювали!':'Сообщение не отправлено!  Проверте заполняемые поля!'?>
</div>

<div class="alert alert-success ask-success">
    <?=$loc=='uk'?'Питання відправлено.':'nl2br(Вопрос отпрален.'?>
)</div>

<div class="alert alert-danger ask-danger">
    <?=$loc=='uk'?'Питання не відправлено!':'Вопрос не отправлен.'?>
</div>