<?php
$this->title = "Admin|University"

?>

<?php
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
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
                            <th>Все институты</th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr class="success">
                            <td><?= Html::a('АКАДЕМИЯ ИМ. А.Ф. МОДЖЕВСКОГО В КРАКОВЕ', ['institutes/index?reg=modzewskogo'])?></td>
                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('COLLEGIUM CIVITAS (ВАРШАВА)', ['institutes/index?reg=civitas'])?></td>
                        </tr>
                        <tr class="info">
                            <td><?= Html::a('COLLEGIUM DA VINCI (ВЫСШАЯ ШКОЛА ГУМАНИТАРНЫХ НАУК В ПОЗНАНИ)', ['institutes/index?reg=cdv'])?></td>
                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('АКАДЕМИЯ ИМ. ЛЕОНА КОЗМИНСКОГО В ВАРШАВЕ', ['institutes/index?reg=kozmonskego'])?></td>
                        </tr>
                        <tr class="active">
                            <td><?= Html::a('АКАДЕМИЯ МОРСКАЯ В ЩЕЦИНЕ', ['institutes/index?reg=mas'])?></td>
                        </tr>
                        <tr class="success">
                            <td><?= Html::a('АКАДЕМИЯ ОБЩЕСТВЕННЫХ НАУК В ВАРШАВЕ', ['institutes/index?reg=san'])?></td>
                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА БИЗНЕСА В ДОМБРОВЕ ГУРНИЧЕЙ', ['institutes/index?reg=wsbdg'])?></td>
                        </tr>
                        <tr class="info">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА ГОСТИНИЧНОГО БИЗНЕСА И ОБЩЕСТВЕННОГО ПИТАНИЯ В ПОЗНАНИ', ['institutes/index?reg=gotelpoz'])?></td>
                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА ЛОГИСТИКИ В ПОЗНАНИ', ['institutes/index?reg=logistpoz'])?></td>
                        </tr>
                        <tr class="active">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА ТУРИЗМА И ЭКОЛОГИИ В СУХОЙ БЕСКИДСКОЙ', ['institutes/index?reg=sb'])?></td>
                        </tr>
                        <tr class="success">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА ЭКОНОМИКИ В РАДОМЕ', ['institutes/index?reg=radom'])?></td>
                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('ГОРНО-МЕТАЛЛУРГИЧЕСКАЯ АКАДЕМИЯ В КРАКОВЕ', ['institutes/index?reg=agh'])?></td>
                        </tr>
                        <tr class="info">
                            <td><?= Html::a('ПЕДАГОГИЧЕСКИЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['institutes/index?reg=pedkr'])?></td>
                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('ПОЛИТЕХНИЧЕСКИЙ УНИВЕРСИТЕТ В ВАРШАВЕ', ['institutes/index?reg=politehw'])?></td>
                        </tr>
                        <tr class="active">
                            <td><?= Html::a('ПОЛИТЕХНИЧЕСКИЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['institutes/index?reg=politehkr'])?></td>
                        </tr>
                        <tr class="success">
                            <td><?= Html::a('ПОЛИТЕХНИЧЕСКИЙ УНИВЕРСИТЕТ ВО ВРОЦЛАВЕ', ['institutes/index?reg=politehwr'])?></td>
                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('ПОЛЬСКО-ЯПОНСКАЯ АКАДЕМИЯ КОМПЬЮТЕРНЫХ ТЕХНОЛОГИЙ', ['institutes/index?reg=pj'])?></td>
                        </tr>
                        <tr class="info">
                            <td><?= Html::a('СЕЛЬСКОХОЗЯЙСТВЕННЫЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['institutes/index?reg=rolkr'])?></td>
                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('СИЛЕЗСКИЙ УНИВЕРСИТЕТ В КАТОВИЦАХ', ['institutes/index?reg=sukatov'])?></td>
                        </tr>
                        <tr class="active">
                            <td><?= Html::a('УНИВЕРСИТЕТ SWPS', ['institutes/index?reg=swps'])?></td>
                        </tr>
                        <tr class="success">
                            <td><?= Html::a('УНИВЕРСИТЕТ ВАРШАВСКИЙ', ['institutes/index?reg=uw'])?></td>
                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('УНИВЕРСИТЕТ ВРОЦЛАВСКИЙ', ['institutes/index?reg=uwr'])?></td>
                        </tr>
                        <tr class="info">
                            <td><?= Html::a('УНИВЕРСИТЕТ ИМ. АДАМА МИЦКЕВИЧА В ПОЗНАНИ', ['institutes/index?reg=uam'])?></td>
                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('УНИВЕРСИТЕТ ИМ. МАРИИ КЮРИ-СКЛОДОВСКОЙ В ЛЮБЛИНЕ', ['institutes/index?reg=usk'])?></td>
                        </tr>
                        <tr class="active">
                            <td><?= Html::a('УНИВЕРСИТЕТ ОПОЛЬСКИЙ', ['institutes/index?reg=uo'])?></td>
                        </tr>
                        <tr class="success">
                            <td><?= Html::a('УНИВЕРСИТЕТ ПРИРОДНИЧИЙ В ПОЗНАНИ', ['institutes/index?reg=prurodpoz'])?></td>
                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('УНИВЕРСИТЕТ ЩЕЦИНСКИЙ', ['institutes/index?reg=uz'])?></td>
                        </tr>
                        <tr class="info">
                            <td><?= Html::a('ЭКОНОМИЧЕСКИЙ УНИВЕРСИТЕТ В КАТОВИЦАХ', ['institutes/index?reg=uekat'])?></td>
                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('ЭКОНОМИЧЕСКИЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['institutes/index?reg=uek'])?></td>
                        </tr>
                        <tr class="active">
                            <td><?= Html::a('ЯГЕЛЛОНСКИЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['institutes/index?reg=uj'])?></td>
                        </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
<div id="btnOpenSpace">
    <span  style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Все ВУЗы</span>
</div>

<?php $form = ActiveForm::begin(['id'=>'IHomeForm'])?>
<?=$form->field($iHomeForm,'itoken')->textInput(['value'=>$reg, 'class'=>'hidden'])->label(false)?>

<!-- navigation section -->
<section id="nav-admin-institute" class="navbar custom-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home-logo_title_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#home-logo_title_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>
                <div class="tab-content">
                    <div id="home-logo_title_uk" class="tab-pane fade in active">
                        <?=$form->field($iHomeForm,'logo_title_uk')->textarea([
                            'value'=>$iHome['logo_title_uk'],
                            'class'=>'textarea',
                            'rows'=>1,

                        ])->label(false)?>
                    </div>
                    <div id="home-logo_title_ru" class="tab-pane fade">
                        <?=$form->field($iHomeForm,'logo_title_ru')->textarea([
                            'value'=>$iHome['logo_title_ru'],
                            'class'=>'textarea',
                            'rows'=>1,

                        ])->label(false)?>
                    </div>
                </div>

        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right top-menu">
                <li>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu-home-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#menu-home-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="menu-home-uk" class="tab-pane fade in active">
                            <?=$form->field($iHomeForm,'home_uk')->textarea([
                                'value'=>$iMenu['home_uk'],
                                'class'=>'textarea',
                                'rows'=>1,
                                'cols'=>15,
                            ])->label(false)?>
                        </div>
                        <div id="menu-home-ru" class="tab-pane fade">
                            <?=$form->field($iHomeForm,'home_ru')->textarea([
                                'value'=>$iMenu['home_ru'],
                                'class'=>'textarea',
                                'rows'=>1,
                                'cols'=>15,
                            ])->label(false)?>
                        </div>
                    </div>
                </li>
                <li>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu-wedo_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#menu-wedo_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="menu-wedo_uk" class="tab-pane fade in active">
                            <?=$form->field($iHomeForm,'wedo_uk')->textarea([
                                'value'=>$iMenu['wedo_uk'],
                                'class'=>'textarea',
                                'rows'=>1,
                                'cols'=>15,
                            ])->label(false)?>
                        </div>
                        <div id="menu-wedo_ru" class="tab-pane fade">
                            <?=$form->field($iHomeForm,'wedo_ru')->textarea([
                                'value'=>$iMenu['wedo_ru'],
                                'class'=>'textarea',
                                'rows'=>1,
                                'cols'=>15,
                            ])->label(false)?>
                        </div>
                    </div>
                </li>
                <li>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu-level_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#menu-level_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="menu-level_uk" class="tab-pane fade in active">
                            <?=$form->field($iHomeForm,'level_uk')->textarea([
                                'value'=>$iMenu['level_uk'],
                                'class'=>'textarea',
                                'rows'=>1,
                                'cols'=>15,
                            ])->label(false)?>
                        </div>
                        <div id="menu-level_ru" class="tab-pane fade">
                            <?=$form->field($iHomeForm,'level_ru')->textarea([
                                'value'=>$iMenu['level_ru'],
                                'class'=>'textarea',
                                'rows'=>1,
                                'cols'=>15,
                            ])->label(false)?>
                        </div>
                    </div>
                </li>
                <li>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu-portfolio_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#menu-portfolio_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="menu-portfolio_uk" class="tab-pane fade in active">
                            <?=$form->field($iHomeForm,'portfolio_uk')->textarea([
                                'value'=>$iMenu['portfolio_uk'],
                                'class'=>'textarea',
                                'rows'=>1,
                                'cols'=>15,
                            ])->label(false)?>
                        </div>
                        <div id="menu-portfolio_ru" class="tab-pane fade">
                            <?=$form->field($iHomeForm,'portfolio_ru')->textarea([
                                'value'=>$iMenu['portfolio_ru'],
                                'class'=>'textarea',
                                'rows'=>1,
                                'cols'=>15,
                            ])->label(false)?>
                        </div>
                    </div>
                </li>
                <li>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu-sent_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#menu-sent_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="menu-sent_uk" class="tab-pane fade in active">
                            <?=$form->field($iHomeForm,'sent_uk')->textarea([
                                'value'=>$iMenu['sent_uk'],
                                'class'=>'textarea',
                                'rows'=>1,
                                'cols'=>15,
                            ])->label(false)?>
                        </div>
                        <div id="menu-sent_ru" class="tab-pane fade">
                            <?=$form->field($iHomeForm,'sent_ru')->textarea([
                                'value'=>$iMenu['sent_ru'],
                                'class'=>'textarea',
                                'rows'=>1,
                                'cols'=>15,
                            ])->label(false)?>
                        </div>
                    </div>
                </li>
                <li>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu-price_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#menu-price_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="menu-price_uk" class="tab-pane fade in active">
                            <?=$form->field($iHomeForm,'price_uk')->textarea([
                                'value'=>$iMenu['price_uk'],
                                'class'=>'textarea',
                                'rows'=>1,
                                'cols'=>15,
                            ])->label(false)?>
                        </div>
                        <div id="menu-price_ru" class="tab-pane fade">
                            <?=$form->field($iHomeForm,'price_ru')->textarea([
                                'value'=>$iMenu['price_ru'],
                                'class'=>'textarea',
                                'rows'=>1,
                                'cols'=>15,
                            ])->label(false)?>
                        </div>
                    </div>
                </li>
                <li>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu-contact_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#menu-contact_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="menu-contact_uk" class="tab-pane fade in active">
                            <?=$form->field($iHomeForm,'contact_uk')->textarea([
                                'value'=>$iMenu['contact_uk'],
                                'class'=>'textarea',
                                'rows'=>1,
                                'cols'=>15,
                            ])->label(false)?>
                        </div>
                        <div id="menu-contact_ru" class="tab-pane fade">
                            <?=$form->field($iHomeForm,'contact_ru')->textarea([
                                'value'=>$iMenu['contact_ru'],
                                'class'=>'textarea',
                                'rows'=>1,
                                'cols'=>15,
                            ])->label(false)?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- home section -->
<section id="home" class="iHome">
    <div class="container">
        <div class="row">

            <dic class="col-md-4 text-left">
                <div class="disc-block">
                    <p>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home-top_description_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#home-top_description_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home-top_description_uk" class="tab-pane fade in active">
                                <?=$form->field($iHomeForm,'top_description_uk')->textarea([
                                    'value'=>$iHome['top_description_uk'],
                                    'class'=>'textarea',
                                    'rows'=>2,
                                    'cols'=>15,
                                ])->label(false)?>
                            </div>
                            <div id="home-top_description_ru" class="tab-pane fade">
                                <?=$form->field($iHomeForm,'top_description_ru')->textarea([
                                    'value'=>$iHome['top_description_ru'],
                                    'class'=>'textarea',
                                    'rows'=>2,
                                    'cols'=>20,
                                ])->label(false)?>
                            </div>
                        </div>
                    </p>
                </div>
            </dic>
            <div class="col-md-8"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p class="newsize center-block">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home-main_description_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#home-main_description_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home-main_description_uk" class="tab-pane fade in active">
                            <?=$form->field($iHomeForm,'main_description_uk')->textarea([
                                'value'=>$iHome['main_description_uk'],
                                'class'=>'textarea text-center',
                                'rows'=>1,

                            ])->label(false)?>
                        </div>
                        <div id="home-main_description_ru" class="tab-pane fade">
                            <?=$form->field($iHomeForm,'main_description_ru')->textarea([
                                'value'=>$iHome['main_description_ru'],
                                'class'=>'textarea text-center',
                                'rows'=>1,

                            ])->label(false)?>
                        </div>
                    </div>
                </p>
                <h1>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home-header_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#home-header_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home-header_uk" class="tab-pane fade in active">
                            <?=$form->field($iHomeForm,'header_uk')->textarea([
                                'value'=>$iHome['header_uk'],
                                'class'=>'textarea text-center',
                                'rows'=>2,

                            ])->label(false)?>
                        </div>
                        <div id="home-header_ru" class="tab-pane fade">
                            <?=$form->field($iHomeForm,'header_ru')->textarea([
                                'value'=>$iHome['header_ru'],
                                'class'=>'textarea text-center',
                                'rows'=>2,

                            ])->label(false)?>
                        </div>
                    </div>
                </h1>
                <h3>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home-city_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#home-city_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home-city_uk" class="tab-pane fade in active">
                            <?=$form->field($iHomeForm,'city_uk')->textarea([
                                'value'=>$iHome['city_uk'],
                                'class'=>'textarea text-center',
                                'rows'=>2,

                            ])->label(false)?>
                        </div>
                        <div id="home-city_ru" class="tab-pane fade">
                            <?=$form->field($iHomeForm,'city_ru')->textarea([
                                'value'=>$iHome['city_ru'],
                                'class'=>'textarea text-center',
                                'rows'=>2,

                            ])->label(false)?>
                        </div>
                    </div>
                </h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <?php $count=1?>
            <?php foreach($iHomeList as $list):?>
                <div class="col-md-4" >
                    <div  class="smoothScroll btn btn-danger sign-up">

                        <h3>
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home-list-title_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#home-list-title_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="home-list-title_uk<?=$count?>" class="tab-pane fade in active">
                                    <?=$form->field($iHomeForm,'homeList['.$list->id.'][title_uk]')->textarea([
                                        'value'=>$list['title_uk'],
                                        'class'=>'textarea text-center',
                                        'rows'=>2,

                                    ])->label(false)?>
                                </div>
                                <div id="home-list-title_ru<?=$count?>" class="tab-pane fade">
                                    <?=$form->field($iHomeForm,'homeList['.$list->id.'][title_ru]')->textarea([
                                        'value'=>$list['title_ru'],
                                        'class'=>'textarea text-center',
                                        'rows'=>2,

                                    ])->label(false)?>
                                </div>
                            </div>
                        </h3>

                        <p>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home-list-content_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#home-list-content_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home-list-content_uk<?=$count?>" class="tab-pane fade in active">
                                <?=$form->field($iHomeForm,'homeList['.$list->id.'][content_uk]')->textarea([
                                    'value'=>$list['content_uk'],
                                    'class'=>'textarea text-center',
                                    'rows'=>4,

                                ])->label(false)?>
                            </div>
                            <div id="home-list-content_ru<?=$count?>" class="tab-pane fade">
                                <?=$form->field($iHomeForm,'homeList['.$list->id.'][content_ru]')->textarea([
                                    'value'=>$list['content_ru'],
                                    'class'=>'textarea text-center',
                                    'rows'=>4,

                                ])->label(false)?>
                            </div>
                        </div>

                        </p>

                        <h3>
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home-list-consult_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#home-list-consult_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="home-list-consult_uk<?=$count?>" class="tab-pane fade in active">
                                    <?=$form->field($iHomeForm,'homeList['.$list->id.'][consult_uk]')->textarea([
                                        'value'=>$list['consult_uk'],
                                        'class'=>'textarea text-center',
                                        'rows'=>2,

                                    ])->label(false)?>
                                </div>
                                <div id="home-list-consult_ru<?=$count?>" class="tab-pane fade">
                                    <?=$form->field($iHomeForm,'homeList['.$list->id.'][consult_ru]')->textarea([
                                        'value'=>$list['consult_ru'],
                                        'class'=>'textarea text-center',
                                        'rows'=>2,

                                    ])->label(false)?>
                                </div>
                            </div>
                        </h3>

                    </div>
                </div>
                <?php $count++?>
            <?php endforeach;?>
        </div>
    </div>

</section>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>

<?php $form = ActiveForm::begin(['id'=>'IFirstForm'])?>
<?=$form->field($iFirstForm, 'iToken')->textInput(['value'=>$reg,'class'=>'hidden'])?>
<!-- work section -->
<section id="work" class="iFirst">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <strong>01</strong>

                    <h1 class="heading bold">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#first-title_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#first-title_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="first-title_uk" class="tab-pane fade in active">
                                <?=$form->field($iFirstForm,'title_uk')->textarea([
                                    'value'=>$iFirst['title_uk'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                            <div id="first-title_ru" class="tab-pane fade">
                                <?=$form->field($iFirstForm,'title_ru')->textarea([
                                    'value'=>$iFirst['title_ru'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                        </div>
                    </h1>
                    <hr>
                </div>
            </div>
            <?php $count=1?>
            <?php foreach($iFirstList as $list):?>
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">

                    <h3>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#first-list-title_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#first-list-title_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="first-list-title_uk<?=$count?>" class="tab-pane fade in active">
                                <?=$form->field($iFirstForm,'firstList['.$list->id.'][title_uk]')->textarea([
                                    'value'=>$list['title_uk'],
                                    'class'=>'textarea text-center',
                                    'rows'=>2,

                                ])->label(false)?>
                            </div>
                            <div id="first-list-title_ru<?=$count?>" class="tab-pane fade">
                                <?=$form->field($iFirstForm,'firstList['.$list->id.'][title_ru]')->textarea([
                                    'value'=>$list['title_ru'],
                                    'class'=>'textarea text-center',
                                    'rows'=>2,

                                ])->label(false)?>
                            </div>
                        </div>
                    </h3>
                    <hr>
                    <p>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#first-list-content_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#first-list-content_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="first-list-content_uk<?=$count?>" class="tab-pane fade in active">
                            <?=$form->field($iFirstForm,'firstList['.$list->id.'][content_uk]')->textarea([
                                'value'=>$list['content_uk'],
                                'class'=>'textarea text-center',
                                'rows'=>3,

                            ])->label(false)?>
                        </div>
                        <div id="first-list-content_ru<?=$count?>" class="tab-pane fade">
                            <?=$form->field($iFirstForm,'firstList['.$list->id.'][content_ru]')->textarea([
                                'value'=>$list['content_ru'],
                                'class'=>'textarea text-center',
                                'rows'=>3,

                            ])->label(false)?>
                        </div>
                    </div>

                    </p>
                </div>
                <?php $count++?>
            <?php endforeach;?>
        </div>
    </div>
</section>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!-- about section -->
<?php ActiveForm::begin(['id'=>'ISecondForm'])?>
<?=$form->field($iSecondForm,'iToken')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<section id="about" class="iSecond">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="section-title">
                    <strong>02</strong>
                    <h1 class="heading bold">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#second-title_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#second-title_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="second-title_uk" class="tab-pane fade in active">
                                <?=$form->field($iSecondForm,'title_uk')->textarea([
                                    'value'=>$iSecond['title_uk'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                            <div id="second-title_ru" class="tab-pane fade">
                                <?=$form->field($iSecondForm,'title_ru')->textarea([
                                    'value'=>$iSecond['title_ru'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                        </div>
                    </h1>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="/institute/images/<?=$iSecond['photo']?>" class="img-responsive" alt="about img">
            </div>


            <div class="col-md-6 col-sm-12">
                <h3 class="bold" style="text-transform: uppercase">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#second-top_description_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#second-top_description_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="second-top_description_uk" class="tab-pane fade in active">
                            <?=$form->field($iSecondForm,'top_description_uk')->textarea([
                                'value'=>$iSecond['top_description_uk'],
                                'class'=>'textarea text-center',
                                'rows'=>1,

                            ])->label(false)?>
                        </div>
                        <div id="second-top_description_ru" class="tab-pane fade">
                            <?=$form->field($iSecondForm,'top_description_ru')->textarea([
                                'value'=>$iSecond['top_description_ru'],
                                'class'=>'textarea text-center',
                                'rows'=>1,

                            ])->label(false)?>
                        </div>
                    </div>
                </h3>
                <h1 class="heading bold">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#second-description_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#second-description_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="second-description_uk" class="tab-pane fade in active">
                            <?=$form->field($iSecondForm,'description_uk')->textarea([
                                'value'=>$iSecond['description_uk'],
                                'class'=>'textarea text-center',
                                'rows'=>1,

                            ])->label(false)?>
                        </div>
                        <div id="second-description_ru" class="tab-pane fade">
                            <?=$form->field($iSecondForm,'description_ru')->textarea([
                                'value'=>$iSecond['description_ru'],
                                'class'=>'textarea text-center',
                                'rows'=>1,

                            ])->label(false)?>
                        </div>
                    </div>
                </h1>
                <!-- Nav tabs -->


                <ul style="list-style: none">
                    <?php $count=1;?>
                    <?php foreach($iSecondList as $list):?>

                        <li>
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#second-list-title_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#second-list-title_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="second-list-title_uk<?=$count?>" class="tab-pane fade in active">
                                    <?=$form->field($iSecondForm,'secondList['.$list->id.'][title_uk]')->textarea([
                                        'value'=>$list['title_uk'],
                                        'class'=>'textarea text-center',
                                        'rows'=>1,

                                    ])->label(false)?>
                                </div>
                                <div id="second-list-title_ru<?=$count?>" class="tab-pane fade">
                                    <?=$form->field($iSecondForm,'secondList['.$list->id.'][title_ru]')->textarea([
                                        'value'=>$list['title_ru'],
                                        'class'=>'textarea text-center',
                                        'rows'=>1,

                                    ])->label(false)?>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h4 style="font-weight: normal;">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#second-list-description_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                        <li><a data-toggle="tab" href="#second-list-description_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="second-list-description_uk<?=$count?>" class="tab-pane fade in active">
                                            <?=$form->field($iSecondForm,'secondList['.$list->id.'][description_uk]')->textarea([
                                                'value'=>$list['description_uk'],
                                                'class'=>'textarea text-center',
                                                'rows'=>2,

                                            ])->label(false)?>
                                        </div>
                                        <div id="second-list-description_ru<?=$count?>" class="tab-pane fade">
                                            <?=$form->field($iSecondForm,'secondList['.$list->id.'][description_ru]')->textarea([
                                                'value'=>$list['description_ru'],
                                                'class'=>'textarea text-center',
                                                'rows'=>2,

                                            ])->label(false)?>
                                        </div>
                                    </div>

                                </h4>
                                <p>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#second-list-content_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                        <li><a data-toggle="tab" href="#second-list-content_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="second-list-content_uk<?=$count?>" class="tab-pane fade in active">
                                            <?=$form->field($iSecondForm,'secondList['.$list->id.'][content_uk]')->textarea([
                                                'value'=>$list['content_uk'],
                                                'class'=>'textarea text-center content-text-style',
                                                'rows'=>2,

                                            ])->label(false)?>
                                        </div>
                                        <div id="second-list-content_ru<?=$count?>" class="tab-pane fade">
                                            <?=$form->field($iSecondForm,'secondList['.$list->id.'][content_ru]')->textarea([
                                                'value'=>$list['content_ru'],
                                                'class'=>'textarea text-center content-text-style',
                                                'rows'=>2,

                                            ])->label(false)?>
                                        </div>
                                    </div>
                                </p>
                                <p class="yellow-textarea">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#second-list-link_text_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                        <li><a data-toggle="tab" href="#second-list-link_text_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="second-list-link_text_uk<?=$count?>" class="tab-pane fade in active">
                                            <?=$form->field($iSecondForm,'secondList['.$list->id.'][link_text_uk]')->textarea([
                                                'value'=>$list['link_text_uk'],
                                                'class'=>'textarea text-center yellow',
                                                'rows'=>2,

                                            ])->label(false)?>
                                        </div>
                                        <div id="second-list-link_text_ru<?=$count?>" class="tab-pane fade">
                                            <?=$form->field($iSecondForm,'secondList['.$list->id.'][link_text_ru]')->textarea([
                                                'value'=>$list['link_text_ru'],
                                                'class'=>'textarea text-center yellow',
                                                'rows'=>2,

                                            ])->label(false)?>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </li>
                        <?php $count++;?>
                    <?php endforeach;?>
                </ul>
                <!-- tab panes -->

            </div>
        </div>
    </div>
</section>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!-- portfolio section -->
<?php $form = ActiveForm::begin(['id'=>'IThirdForm'])?>
<?= $form->field($iThirdForm, 'itoken')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<div id="portfolio" class="iThird">
    <div class="container" id="iThird">
        <div class="row">
            <div class="col-md-10 col-lg-offset-1 col-sm-12">
                <div class="section-title">
                    <strong>03</strong>
                    <h1 class="heading bold">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#third-title_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#third-title_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="third-title_uk" class="tab-pane fade in active">
                                <?=$form->field($iThirdForm,'title_uk')->textarea([
                                    'value'=>$iThird['title_uk'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                            <div id="third-title_ru" class="tab-pane fade">
                                <?=$form->field($iThirdForm,'title_ru')->textarea([
                                    'value'=>$iThird['title_ru'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                        </div>
                    </h1>
                    <hr>
                </div>
                <!-- ISO section -->

                        <?php $count=1;?>
                        <?php foreach($iThirdList as $list):?>
                                <div>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#third-list-header_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                        <li><a data-toggle="tab" href="#third-list-header_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="third-list-header_uk<?=$count?>" class="tab-pane fade in active">
                                            <?=$form->field($iThirdForm,'thirdList['.$list->id.'][header_uk]')->textarea([
                                                'value'=>$list['header_uk'],
                                                'class'=>'textarea text-center',
                                                'rows'=>1,
                                            ])->label(false)?>
                                        </div>
                                        <div id="third-list-header_ru<?=$count?>" class="tab-pane fade">
                                            <?=$form->field($iThirdForm,'thirdList['.$list->id.'][header_ru]')->textarea([
                                                'value'=>$list['header_ru'],
                                                'class'=>'textarea text-center',
                                                'rows'=>1,
                                            ])->label(false)?>
                                        </div>
                                    </div>
                                </div>


                                <div class=" text-left col-md-10 col-md-offset-1" style="border: 3px solid #00c6d7; padding: 20px;">
                                    <h3 class="page-header" style="font-weight: normal">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#third-list-title_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                            <li><a data-toggle="tab" href="#third-list-title_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="third-list-title_uk<?=$count?>" class="tab-pane fade in active">
                                                <?=$form->field($iThirdForm,'thirdList['.$list->id.'][title_uk]')->textarea([
                                                    'value'=>$list['title_uk'],
                                                    'class'=>'textarea',
                                                    'rows'=>2,
                                                ])->label(false)?>
                                            </div>
                                            <div id="third-list-title_ru<?=$count?>" class="tab-pane fade">
                                                <?=$form->field($iThirdForm,'thirdList['.$list->id.'][title_ru]')->textarea([
                                                    'value'=>$list['title_ru'],
                                                    'class'=>'textarea',
                                                    'rows'=>2,
                                                ])->label(false)?>
                                            </div>
                                        </div>
                                    </h3>
                                    <p>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#third-list-content_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                        <li><a data-toggle="tab" href="#third-list-content_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="third-list-content_uk<?=$count?>" class="tab-pane fade in active">
                                            <?=$form->field($iThirdForm,'thirdList['.$list->id.'][content_uk]')->textarea([
                                                'value'=>$list['content_uk'],
                                                'class'=>'textarea',
                                                'rows'=>2,
                                            ])->label(false)?>
                                        </div>
                                        <div id="third-list-content_ru<?=$count?>" class="tab-pane fade">
                                            <?=$form->field($iThirdForm,'thirdList['.$list->id.'][content_ru]')->textarea([
                                                'value'=>$list['content_ru'],
                                                'class'=>'textarea',
                                                'rows'=>2,
                                            ])->label(false)?>
                                        </div>
                                    </div>
                                    </p>
                                   <p>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#third-list-button_text_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                            <li><a data-toggle="tab" href="#third-list-button_text_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="third-list-button_text_uk<?=$count?>" class="tab-pane fade in active">
                                                <?=$form->field($iThirdForm,'thirdList['.$list->id.'][button_text_uk]')->textarea([
                                                    'value'=>$list['button_text_uk'],
                                                    'class'=>'textarea ',
                                                    'rows'=>2,
                                                ])->label(false)?>
                                            </div>
                                            <div id="third-list-button_text_ru<?=$count?>" class="tab-pane fade">
                                                <?=$form->field($iThirdForm,'thirdList['.$list->id.'][button_text_ru]')->textarea([
                                                    'value'=>$list['button_text_ru'],
                                                    'class'=>'textarea',
                                                    'rows'=>2,
                                                ])->label(false)?>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            <hr>

                            <?php $count++;?>
                        <?php endforeach;?>

            </div>
        </div>
    </div>
</div>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!-- team section -->
<?php $form = ActiveForm::begin(['id'=>'IFourthForm'])?>
<?= $form->field($iFourthForm, 'itoken')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<section id="team" class="iFourth">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <strong>04</strong>
                    <h1 class="heading bold">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#fourth-title_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#fourth-title_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="fourth-title_uk" class="tab-pane fade in active">
                                <?=$form->field($iFourthForm,'title_uk')->textarea([
                                    'value'=>$iFourth['title_uk'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                            <div id="fourth-title_ru" class="tab-pane fade">
                                <?=$form->field($iFourthForm,'title_ru')->textarea([
                                    'value'=>$iFourth['title_ru'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                        </div>
                    </h1>
                    <hr>
                </div>
            </div>
            <?php $count=1?>
            <?php foreach($iFourthList as $list):?>
                <div class="col-md-12 col-sm-12 wow fadeIn" id="iFourthTeam" data-wow-delay="0.9s">
                    <div class="team-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/institute/images/<?=\app\models\IFourthListPhoto::findOne($list['id'])->toArray()['photo']?>" class="img-responsive" alt="team img">
                                </div>
                                <div class="col-md-6">
                                    <div class="team-des">
                                        <h4>
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a data-toggle="tab" href="#fourth-list-title_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                                <li><a data-toggle="tab" href="#fourth-list-title_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="fourth-list-title_uk<?=$count?>" class="tab-pane fade in active">
                                                    <?=$form->field($iFourthForm,'fourthList['.$list->id.'][title_uk]')->textarea([
                                                        'value'=>$list['title_uk'],
                                                        'class'=>'textarea text-center',
                                                        'rows'=>2,

                                                    ])->label(false)?>
                                                </div>
                                                <div id="fourth-list-title_ru<?=$count?>" class="tab-pane fade">
                                                    <?=$form->field($iFourthForm,'fourthList['.$list->id.'][title_ru]')->textarea([
                                                        'value'=>$list['title_ru'],
                                                        'class'=>'textarea text-center',
                                                        'rows'=>2,

                                                    ])->label(false)?>
                                                </div>
                                            </div>
                                        </h4>
                                        <h3 style="line-height: 1.7em">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a data-toggle="tab" href="#fourth-list-content_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                                <li><a data-toggle="tab" href="#fourth-list-content_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="fourth-list-content_uk<?=$count?>" class="tab-pane fade in active">
                                                    <?=$form->field($iFourthForm,'fourthList['.$list->id.'][content_uk]')->textarea([
                                                        'value'=>$list['content_uk'],
                                                        'class'=>'textarea text-center',
                                                        'rows'=>2,

                                                    ])->label(false)?>
                                                </div>
                                                <div id="fourth-list-content_ru<?=$count?>" class="tab-pane fade">
                                                    <?=$form->field($iFourthForm,'fourthList['.$list->id.'][content_ru]')->textarea([
                                                        'value'=>$list['content_ru'],
                                                        'class'=>'textarea text-center',
                                                        'rows'=>2,

                                                    ])->label(false)?>
                                                </div>
                                            </div>
                                        </h3>
                                        <hr>
                                        <p class="" style="border-radius: 15px 15px 15px 15px;">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a data-toggle="tab" href="#fourth-list-button_text_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                                <li><a data-toggle="tab" href="#fourth-list-button_text_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="fourth-list-button_text_uk<?=$count?>" class="tab-pane fade in active">
                                                    <?=$form->field($iFourthForm,'fourthList['.$list->id.'][button_text_uk]')->textarea([
                                                        'value'=>$list['button_text_uk'],
                                                        'class'=>'textarea text-center',
                                                        'rows'=>2,

                                                    ])->label(false)?>
                                                </div>
                                                <div id="fourth-list-button_text_ru<?=$count?>" class="tab-pane fade">
                                                    <?=$form->field($iFourthForm,'fourthList['.$list->id.'][button_text_ru]')->textarea([
                                                        'value'=>$list['button_text_ru'],
                                                        'class'=>'textarea text-center',
                                                        'rows'=>2,

                                                    ])->label(false)?>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <?php $count++?>
            <?php endforeach?>
        </div>
    </div>
</section>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!-- pricing section -->
<?php $form = ActiveForm::begin(['id'=>'IFifthForm'])?>
<?=$form->field($iFifthForm, 'itoken')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<section id="pricing" class="iFifth">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="section-title">
                    <strong>05</strong>
                    <h1 class="heading bold">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#fifth-title_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#fifth-title_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="fifth-title_uk" class="tab-pane fade in active">
                                <?=$form->field($iFifthForm,'title_uk')->textarea([
                                    'value'=>$iFifth['title_uk'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                            <div id="fifth-title_ru" class="tab-pane fade">
                                <?=$form->field($iFifthForm,'title_ru')->textarea([
                                    'value'=>$iFifth['title_ru'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                        </div>
                    </h1>
                    <hr>
                </div>
            </div>
            <?php $count =1?>
            <?php foreach($iFifthList as $list):?>
                <div class="col-md-4 col-sm-6">
                    <div class="plan plan-one wow bounceIn" data-wow-delay="0.3s">
                        <div class="plan_title">
                            <i class="icon-wallet medium-icon"></i>
                            <h3>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#fifth-list-title_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                    <li><a data-toggle="tab" href="#fifth-list-title_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="fifth-list-title_uk<?=$count?>" class="tab-pane fade in active">
                                        <?=$form->field($iFifthForm,'fifthList['.$list->id.'][title_uk]')->textarea([
                                            'value'=>$list['title_uk'],
                                            'class'=>'textarea text-center',
                                            'rows'=>2,

                                        ])->label(false)?>
                                    </div>
                                    <div id="fifth-list-title_ru<?=$count?>" class="tab-pane fade">
                                        <?=$form->field($iFifthForm,'fifthList['.$list->id.'][title_ru]')->textarea([
                                            'value'=>$list['title_ru'],
                                            'class'=>'textarea text-center',
                                            'rows'=>2,

                                        ])->label(false)?>
                                    </div>
                                </div>
                            </h3>
                            <h2>
                                <?=$form->field($iFifthForm,'fifthList['.$list->id.'][coast]')->textarea([
                                    'value'=>$list['coast'],
                                    'class'=>'textarea',
                                    'rows'=>1,
                                ])->label(false) ?>
                                <span>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#fifth-list-period_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                        <li><a data-toggle="tab" href="#fifth-list-period_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="fifth-list-period_uk<?=$count?>" class="tab-pane fade in active">
                                            <?=$form->field($iFifthForm,'fifthList['.$list->id.'][period_uk]')->textarea([
                                                'value'=>$list['period_uk'],
                                                'class'=>'textarea ',
                                                'rows'=>2,

                                            ])->label(false)?>
                                        </div>
                                        <div id="fifth-list-period_ru<?=$count?>" class="tab-pane fade">
                                            <?=$form->field($iFifthForm,'fifthList['.$list->id.'][period_ru]')->textarea([
                                                'value'=>$list['period_ru'],
                                                'class'=>'textarea ',
                                                'rows'=>2,

                                            ])->label(false)?>
                                        </div>
                                    </div>
                                </span>
                            </h2>
                        </div>
                        <ul>
                            <li>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#fifth-list-list_one_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                    <li><a data-toggle="tab" href="#fifth-list-list_one_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="fifth-list-list_one_uk<?=$count?>" class="tab-pane fade in active">
                                        <?=$form->field($iFifthForm,'fifthList['.$list->id.'][list_one_uk]')->textarea([
                                            'value'=>$list['list_one_uk'],
                                            'class'=>'textarea text-center',
                                            'rows'=>1,

                                        ])->label(false)?>
                                    </div>
                                    <div id="fifth-list-list_one_ru<?=$count?>" class="tab-pane fade">
                                        <?=$form->field($iFifthForm,'fifthList['.$list->id.'][list_one_ru]')->textarea([
                                            'value'=>$list['list_one_ru'],
                                            'class'=>'textarea text-center',
                                            'rows'=>1,

                                        ])->label(false)?>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#fifth-list-list_two_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                    <li><a data-toggle="tab" href="#fifth-list-list_two_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="fifth-list-list_two_uk<?=$count?>" class="tab-pane fade in active">
                                        <?=$form->field($iFifthForm,'fifthList['.$list->id.'][list_two_uk]')->textarea([
                                            'value'=>$list['list_two_uk'],
                                            'class'=>'textarea text-center',
                                            'rows'=>1,

                                        ])->label(false)?>
                                    </div>
                                    <div id="fifth-list-list_two_ru<?=$count?>" class="tab-pane fade">
                                        <?=$form->field($iFifthForm,'fifthList['.$list->id.'][list_two_ru]')->textarea([
                                            'value'=>$list['list_two_ru'],
                                            'class'=>'textarea text-center',
                                            'rows'=>1,

                                        ])->label(false)?>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#fifth-list-list_three_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                    <li><a data-toggle="tab" href="#fifth-list-list_three_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="fifth-list-list_three_uk<?=$count?>" class="tab-pane fade in active">
                                        <?=$form->field($iFifthForm,'fifthList['.$list->id.'][list_three_uk]')->textarea([
                                            'value'=>$list['list_three_uk'],
                                            'class'=>'textarea text-center',
                                            'rows'=>1,

                                        ])->label(false)?>
                                    </div>
                                    <div id="fifth-list-list_three_ru<?=$count?>" class="tab-pane fade">
                                        <?=$form->field($iFifthForm,'fifthList['.$list->id.'][list_three_ru]')->textarea([
                                            'value'=>$list['list_three_ru'],
                                            'class'=>'textarea text-center',
                                            'rows'=>1,

                                        ])->label(false)?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <button class="btn btn-warning">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#fifth-list-button_text_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#fifth-list-button_text_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="fifth-list-button_text_uk<?=$count?>" class="tab-pane fade in active">
                                    <?=$form->field($iFifthForm,'fifthList['.$list->id.'][button_text_uk]')->textarea([
                                        'value'=>$list['button_text_uk'],
                                        'class'=>'textarea text-center',
                                        'rows'=>1,

                                    ])->label(false)?>
                                </div>
                                <div id="fifth-list-button_text_ru<?=$count?>" class="tab-pane fade">
                                    <?=$form->field($iFifthForm,'fifthList['.$list->id.'][button_text_ru]')->textarea([
                                        'value'=>$list['button_text_ru'],
                                        'class'=>'textarea text-center',
                                        'rows'=>1,

                                    ])->label(false)?>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                <?php $count++?>
            <?php endforeach?>
        </div>
    </div>
</section>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!--Perspective learning-->
<?php $form = ActiveForm::begin(['id'=>'ISixthForm'])?>
<?=$form->field($iSixthForm, 'itoken')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<div id="perspectiveInLearning">
    <div class="container" id="iSixth" >
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12">
                <div class="section-title text-center" >
                    <strong>06</strong>
                    <h1 class="heading bold">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#sixth-title_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#sixth-title_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="sixth-title_uk" class="tab-pane fade in active">
                                <?=$form->field($iSixthForm,'title_uk')->textarea([
                                    'value'=>$iSixth['title_uk'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                            <div id="sixth-title_ru" class="tab-pane fade">
                                <?=$form->field($iSixthForm,'title_ru')->textarea([
                                    'value'=>$iSixth['title_ru'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                        </div>
                    </h1>
                    <hr>
                </div>
            </div>
            <!-- ISO section -->

            <div class="col-md-10 col-md-offset-1">
                <?php $count=1;?>
                <?php foreach($iSixthList as $list):?>
                    <div>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#sixth-list-header_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#sixth-list-header_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="sixth-list-header_uk<?=$count?>" class="tab-pane fade in active">
                                <?=$form->field($iSixthForm,'sixthList['.$list->id.'][header_uk]')->textarea([
                                    'value'=>$list['header_uk'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                            <div id="sixth-list-header_ru<?=$count?>" class="tab-pane fade">
                                <?=$form->field($iSixthForm,'sixthList['.$list->id.'][header_ru]')->textarea([
                                    'value'=>$list['header_ru'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                        </div>
                    </div>
                        <div class="text-left" style="border: 3px solid #00c6d7; padding: 20px;margin-bottom: 20px">
                            <h3 class="page-header" style="font-weight: normal">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#sixth-list-title_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                    <li><a data-toggle="tab" href="#sixth-list-title_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="sixth-list-title_uk<?=$count?>" class="tab-pane fade in active">
                                        <?=$form->field($iSixthForm,'sixthList['.$list->id.'][title_uk]')->textarea([
                                            'value'=>$list['title_uk'],
                                            'class'=>'textarea',
                                            'rows'=>1,

                                        ])->label(false)?>
                                    </div>
                                    <div id="sixth-list-title_ru<?=$count?>" class="tab-pane fade">
                                        <?=$form->field($iSixthForm,'sixthList['.$list->id.'][title_ru]')->textarea([
                                            'value'=>$list['title_ru'],
                                            'class'=>'textarea',
                                            'rows'=>1,

                                        ])->label(false)?>
                                    </div>
                                </div>
                            </h3>
                            <p>
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#sixth-list-content_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#sixth-list-content_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="sixth-list-content_uk<?=$count?>" class="tab-pane fade in active">
                                    <?=$form->field($iSixthForm,'sixthList['.$list->id.'][content_uk]')->textarea([
                                        'value'=>$list['content_uk'],
                                        'class'=>'textarea',
                                        'rows'=>2,

                                    ])->label(false)?>
                                </div>
                                <div id="sixth-list-content_ru<?=$count?>" class="tab-pane fade">
                                    <?=$form->field($iSixthForm,'sixthList['.$list->id.'][content_ru]')->textarea([
                                        'value'=>$list['content_ru'],
                                        'class'=>'textarea',
                                        'rows'=>2,

                                    ])->label(false)?>
                                </div>
                            </div>

                            </p>
                        </div>
                    <?php $count++?>
                <?php endforeach?>
            </div>
        </div>
    </div>
</div>

<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!--Testimonials -->
<?php $form = ActiveForm::begin(['id'=>'ISeventhForm'])?>
<?=$form->field($iSeventhForm,'itoken')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<section id="Testimonials" class="iSeventh">
    <div class="container">
        <div class="row">
            <div class="section-title text-center ">
                <strong>07</strong>
                <h1 class="heading bold">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#seventh-title_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#seventh-title_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="seventh-title_uk" class="tab-pane fade in active">
                            <?=$form->field($iSeventhForm,'title_uk')->textarea([
                                'value'=>$iSeventh['title_uk'],
                                'class'=>'textarea text-center',
                                'rows'=>1,

                            ])->label(false)?>
                        </div>
                        <div id="seventh-title_ru" class="tab-pane fade">
                            <?=$form->field($iSeventhForm,'title_ru')->textarea([
                                'value'=>$iSeventh['title_ru'],
                                'class'=>'textarea text-center',
                                'rows'=>1,

                            ])->label(false)?>
                        </div>
                    </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        <?php $count=1?>
                        <?php foreach($iSeventhList as $list):?>
                            <li class="seq-in">
                                <div class="seq-title">
                                    <h2 data-seq>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#seventh-list-name_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                            <li><a data-toggle="tab" href="#seventh-list-name_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="seventh-list-name_uk<?=$count?>" class="tab-pane fade in active">
                                                <?=$form->field($iSeventhForm,'seventhList['.$list->id.'][name_uk]')->textarea([
                                                    'value'=>$list['name_uk'],
                                                    'class'=>'textarea',
                                                    'rows'=>1,

                                                ])->label(false)?>
                                            </div>
                                            <div id="seventh-list-name_ru<?=$count?>" class="tab-pane fade">
                                                <?=$form->field($iSeventhForm,'seventhList['.$list->id.'][name_ru]')->textarea([
                                                    'value'=>$list['name_ru'],
                                                    'class'=>'textarea',
                                                    'rows'=>1,

                                                ])->label(false)?>
                                            </div>
                                        </div>
                                    </h2>
                                    <h3 data-seq>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#seventh-list-content_uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                            <li><a data-toggle="tab" href="#seventh-list-content_ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="seventh-list-content_uk<?=$count?>" class="tab-pane fade in active">
                                                <?=$form->field($iSeventhForm,'seventhList['.$list->id.'][content_uk]')->textarea([
                                                    'value'=>$list['content_uk'],
                                                    'class'=>'textarea',
                                                    'rows'=>2,

                                                ])->label(false)?>
                                            </div>
                                            <div id="seventh-list-content_ru<?=$count?>" class="tab-pane fade">
                                                <?=$form->field($iSeventhForm,'seventhList['.$list->id.'][content_ru]')->textarea([
                                                    'value'=>$list['content_ru'],
                                                    'class'=>'textarea',
                                                    'rows'=>2,

                                                ])->label(false)?>
                                            </div>
                                        </div>
                                    </h3>
                                </div>
                            </li>
                            <?php $count++?>
                        <?php endforeach?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!-- contact section-->
<?php $form = ActiveForm::begin(['id'=>'IEighthForm'])?>
<?=$form->field($iEighthForm,'itoken')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<section id="contact" class="iEighth" style="background-image: url('/institute/images/<?=$iEighth["photo_back"]?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="section-title">
                    <strong>08</strong>
                    <h1 class="heading bold">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#eighth-title_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#eighth-title_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="eighth-title_uk" class="tab-pane fade in active">
                                <?=$form->field($iEighthForm,'title_uk')->textarea([
                                    'value'=>$iEighth['title_uk'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                            <div id="eighth-title_ru" class="tab-pane fade">
                                <?=$form->field($iEighthForm,'title_ru')->textarea([
                                    'value'=>$iEighth['title_ru'],
                                    'class'=>'textarea text-center',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                        </div>
                    </h1>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 contact-info">
                <h2 class="heading bold">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#eighth-info_title_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#eighth-info_title_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="eighth-info_title_uk" class="tab-pane fade in active">
                            <?=$form->field($iEighthForm,'info_title_uk')->textarea([
                                'value'=>$iEighth['info_title_uk'],
                                'class'=>'textarea text-center',
                                'rows'=>1,

                            ])->label(false)?>
                        </div>
                        <div id="eighth-info_title_ru" class="tab-pane fade">
                            <?=$form->field($iEighthForm,'info_title_ru')->textarea([
                                'value'=>$iEighth['info_title_ru'],
                                'class'=>'textarea text-center',
                                'rows'=>1,

                            ])->label(false)?>
                        </div>
                    </div>
                </h2>
                <p>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#eighth-info_content_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#eighth-info_content_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>
                <div class="tab-content">
                    <div id="eighth-info_content_uk" class="tab-pane fade in active">
                        <?=$form->field($iEighthForm,'info_content_uk')->textarea([
                            'value'=>$iEighth['info_content_uk'],
                            'class'=>'textarea text-center info_footer',
                            'rows'=>3,

                        ])->label(false)?>
                    </div>
                    <div id="eighth-info_content_ru" class="tab-pane fade">
                        <?=$form->field($iEighthForm,'info_content_ru')->textarea([
                            'value'=>$iEighth['info_content_ru'],
                            'class'=>'textarea text-center info_footer',
                            'rows'=>3,

                        ])->label(false)?>
                    </div>
                </div>
                </p>
                <div class="col-md-6 col-sm-4">
                    <h3>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#eighth-email_title_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#eighth-email_title_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="eighth-email_title_uk" class="tab-pane fade in active">
                                <?=$form->field($iEighthForm,'email_title_uk')->textarea([
                                    'value'=>$iEighth['email_title_uk'],
                                    'class'=>'textarea ',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                            <div id="eighth-email_title_ru" class="tab-pane fade">
                                <?=$form->field($iEighthForm,'email_title_ru')->textarea([
                                    'value'=>$iEighth['email_title_ru'],
                                    'class'=>'textarea ',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                        </div>
                    </h3>
                    <p>
                        <?=$form->field($iEighthForm,'email_content')->textarea([
                            'value'=>$iEighth['email_content'],
                            'class'=>'textarea ',
                            'rows'=>1,
                        ])->label(false)?>
                    </p>
                </div>
                <div class="col-md-6 col-sm-4">
                    <h3>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#eighth-phone_title_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#eighth-phone_title_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="eighth-phone_title_uk" class="tab-pane fade in active">
                                <?=$form->field($iEighthForm,'phone_title_uk')->textarea([
                                    'value'=>$iEighth['phone_title_uk'],
                                    'class'=>'textarea ',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                            <div id="eighth-phone_title_ru" class="tab-pane fade">
                                <?=$form->field($iEighthForm,'phone_title_ru')->textarea([
                                    'value'=>$iEighth['phone_title_ru'],
                                    'class'=>'textarea ',
                                    'rows'=>1,

                                ])->label(false)?>
                            </div>
                        </div>
                    </h3>
                    <p>
                        <?=$form->field($iEighthForm,'phone_content')->textarea([
                            'value'=>$iEighth['phone_content'],
                            'class'=>'textarea ',
                            'rows'=>2,
                        ])->label(false)?>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">

            </div>
        </div>
    </div>
</section>

<!-- footer section -->
<footer id="footer" class="iEighth">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#eighth-copyright_uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#eighth-copyright_ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>
                <div class="tab-content">
                    <div id="eighth-copyright_uk" class="tab-pane fade in active">
                        <?=$form->field($iEighthForm,'copyright_uk')->textarea([
                            'value'=>$iEighth['copyright_uk'],
                            'class'=>'textarea text-center',
                            'rows'=>1,

                        ])->label(false)?>
                    </div>
                    <div id="eighth-copyright_ru" class="tab-pane fade">
                        <?=$form->field($iEighthForm,'copyright_ru')->textarea([
                            'value'=>$iEighth['copyright_ru'],
                            'class'=>'textarea text-center',
                            'rows'=>1,

                        ])->label(false)?>
                    </div>
                </div>

                </p>
                <hr>
                <ul class="social-icon">
                    <li><a href="#" target="_blank" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
                    <li><a href="#" target="_blank" class="fa fa-youtube wow fadeIn" data-wow-delay="0.6s"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>

<div class="alert alert-success message-success">
    Изменения сохранены успешно!
</div>

<div class="alert alert-danger message-danger">
    Изменения не со хранены, что-то пошло не так!
</div>