<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Tours | Austria';
?>
<div class="wrapper">
    <?php $form = ActiveForm::begin(['id'=>'TourHeadForm']);?>
    <?=$form->field($tour_head_form,'key_id')->textInput(['value'=>$tour_head->id,'class'=>'hidden'])->label(false)?>
    <?php if( Yii::$app->session->hasFlash('success') ): ?>
    <?php endif;?>
    <div style="background-color: #00b3ee; margin-top: -25px">

            <div class="container" style="margin-top: 80px;width: 100%; color: black">
                <h3 style="color: white">Блок head</h3>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="col-lg-2" style="margin-top: -10px">

                        <p><?=$form->field($tour_head_form,'logo_text')->textInput([
                                'value'=>$tour_head->logo_text,
                                'class'=>'textarea',
                            ])->label(false)?>
                        </p>
                        <p><?=$form->field($tour_head_form,'phone_number')->textInput([
                                'value'=>$tour_head->phone_number,
                                'class'=>'textarea',
                            ])->label(false)?>
                        </p>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="col-lg-10 "style="margin-top: 30px">
                    <ul class="nav navbar-nav">
                        <?php foreach ($tour_head_menus as $value):?>
                            <li >
                                <?=$form->field($tour_head_form,'tour_menus['.$value->id.'][menu_text]')->textInput([
                                    'value'=>$value->menu_text,
                                    'class'=>'textarea',
                                    'style'=>'width: 100px; font-size: 15px; margin-left: 14px'
                                ])->label(false)?>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <br>
<!--                <input type="submit" class="button-save center-block" value="Сохранить">-->


            </div>
        <?=Html::submitButton('Сохранить изменения', ['class'=>'btn btn-success'])?>
    </div>
    <?php ActiveForm::end();?>
    <div style="width: 100%; height: 10px; background-color: black"></div>
    <div class="main app form" id="main">
        <!-- блок Главная-->
        <?php if( Yii::$app->session->hasFlash('success') ): ?>
            <div class="container alert alert-success" role="alert">
                <button type="button" style="width: 50%" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Yii::$app->session->getFlash('success'); ?>
            </div>
        <?php endif;?>
        <?php $form=ActiveForm::begin(['id'=>'TourFirstBlockForm']);?>
        <div class="cta-sub2 no-color">
            <div class="container nopadding">
                <div class="col-md-12">
                    <div class="hero-content text-center">
                        <h1 class="wow fadeInUp newcll" data-wow-delay="0.1s" style="color: black">
                            <?=$form->field($tour_first_block_form,'title')->textInput([
                                'value'=>$tour_first_block->title,
                                'class'=>'textarea',
                                'style'=>'text-align:center'
                            ])->label(false)?>
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            <?=$form->field($tour_first_block_form,'description')->textInput([
                                'value'=>$tour_first_block->description,
                                'class'=>'textarea',
                                'style'=>'text-align:center;color:black'
                            ])->label(false)?>
                        </p>

                        <a href="#" class="btn btn-info wow fadeInUp"

                           style="visibility: visible; animation-name: fadeInUp;">
                            <?=$form->field($tour_first_block_form,'btn_message_text')->textInput([
                                'value'=>$tour_first_block->btn_message_text,
                                'class'=>'textarea',
                                'style'=>'text-align:center;color:black;width:350px;',
                            ])->label(false)?>
                        </a>
                    </div>
                </div>

            </div>
            <?=Html::submitButton('Сохранить изменения', ['class'=>'btn btn-success'])?>
        </div>
        <?php ActiveForm::end();?>
        <!-- конец блока Главная-->
        <div style="width: 100%; height: 10px; background-color: black"></div>
        <!-- блок Инфо -->
        <br>
        <br>
        <?php $form=ActiveForm::begin(['id'=>'TourInfoBlockForm']);?>
        <div class="pitch text-center info" id="info">
            <div class="container">
                <div class="pitch-intro">
                    <h3 class="wow fadeInDown" data-wow-delay="0.2s">
                        <?=$form->field($tour_info_block_form,'title_big_head')->textarea([
                            'value'=>$tour_info_block->title_big_head,
                            'class'=>'textarea',
                            'style'=>'text-align:center;color:black;',
                        ])->label(false)?>
                    </h3>
                    <!-- <p class="wow fadeInDown" data-wow-delay="0.2s">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p> -->
                </div>
                <hr>
                <div class="col-md-12 ">
                    <div class="row ">
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"><i class="ion-ios-checkmark-outline"></i></div>
                            <div class="pitch-content">
                                <h4>
                                    <?=$form->field($tour_info_block_form,'title_first')->textInput([
                                        'value'=>$tour_info_block->title_first,
                                        'class'=>'textarea',
                                        'style'=>'text-align:center;color:black;',
                                    ])->label(false)?>
                                </h4>
                                <p>
                                    <?=$form->field($tour_info_block_form,'description_first')->textarea([
                                        'value'=>$tour_info_block->description_first,
                                        'class'=>'textarea',
                                        'style'=>'text-align:center;color:black;font-size:16px',
                                        'rows'=>7
                                    ])->label(false)?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"><i class="ion-ios-mic-outline"></i></div>
                            <div class="pitch-content">
                                <h4>
                                    <?=$form->field($tour_info_block_form,'title_second')->textInput([
                                        'value'=>$tour_info_block->title_second,
                                        'class'=>'textarea',
                                        'style'=>'text-align:center;color:black;',
                                    ])->label(false)?>
                                </h4>
                                <p>
                                    <?=$form->field($tour_info_block_form,'description_second')->textarea([
                                        'value'=>$tour_info_block->description_second,
                                        'class'=>'textarea',
                                        'style'=>'text-align:center;color:black;font-size:16px',
                                        'rows'=>7
                                    ])->label(false)?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"><i class="ion-ios-folder-outline"></i></div>
                            <div class="pitch-content">
                                <h4>
                                    <?=$form->field($tour_info_block_form,'title_third')->textInput([
                                        'value'=>$tour_info_block->title_third,
                                        'class'=>'textarea',
                                        'style'=>'text-align:center;color:black;',
                                    ])->label(false)?>
                                </h4>
                                <p>
                                    <?=$form->field($tour_info_block_form,'description_third')->textarea([
                                        'value'=>$tour_info_block->description_third,
                                        'class'=>'textarea',
                                        'style'=>'text-align:center;color:black;font-size:16px',
                                        'rows'=>7
                                    ])->label(false)?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"><i class="ion-ios-folder-outline"></i></div>
                            <div class="pitch-content">
                                <h4>
                                    <?=$form->field($tour_info_block_form,'title_four')->textInput([
                                        'value'=>$tour_info_block->title_four,
                                        'class'=>'textarea',
                                        'style'=>'text-align:center;color:black;',
                                    ])->label(false)?>
                                </h4>
                                <p>
                                    <?=$form->field($tour_info_block_form,'description_four')->textarea([
                                        'value'=>$tour_info_block->description_four,
                                        'class'=>'textarea',
                                        'style'=>'text-align:center;color:black;font-size:16px',
                                        'rows'=>7
                                    ])->label(false)?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"><i class="ion-ios-folder-outline"></i></div>
                            <div class="pitch-content">
                                <h4>
                                    <?=$form->field($tour_info_block_form,'title_five')->textInput([
                                        'value'=>$tour_info_block->title_five,
                                        'class'=>'textarea',
                                        'style'=>'text-align:center;color:black;',
                                    ])->label(false)?>
                                </h4>
                                <p>
                                    <?=$form->field($tour_info_block_form,'description_five')->textarea([
                                        'value'=>$tour_info_block->description_five,
                                        'class'=>'textarea',
                                        'style'=>'text-align:center;color:black;font-size:16px',
                                        'rows'=>7
                                    ])->label(false)?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"><i class="ion-ios-folder-outline"></i></div>
                            <div class="pitch-content">
                                <h4>
                                    <?=$form->field($tour_info_block_form,'title_six')->textInput([
                                        'value'=>$tour_info_block->title_six,
                                        'class'=>'textarea',
                                        'style'=>'text-align:center;color:black;',
                                    ])->label(false)?>
                                </h4>
                                <p>
                                    <?=$form->field($tour_info_block_form,'description_six')->textarea([
                                        'value'=>$tour_info_block->description_six,
                                        'class'=>'textarea',
                                        'style'=>'text-align:center;color:black;font-size:16px',
                                        'rows'=>7
                                    ])->label(false)?>
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <div>
                <h4 style="color: black; font-weight: bold">
                    <?=$form->field($tour_info_block_form,'text_footer')->textInput([
                        'value'=>$tour_info_block->text_footer,
                        'class'=>'textarea',
                        'style'=>'text-align:center;color:black;',
                    ])->label(false)?></h4>
                <br>
                <div class="btn-group">
                    <a style="color: black" title="Позвонить"
                                                                     href="#">
                            <?=$form->field($tour_info_block_form,'btn_first_text')->textInput([
                                'value'=>$tour_info_block->btn_first_text,
                                'style'=>'text-align:center;color:black;',
                            ])->label(false)?>
                        </a>

                    <a style="color: black" title="Позвонить"
                       href="#">
                        <?=$form->field($tour_info_block_form,'btn_second_text')->textInput([
                            'value'=>$tour_info_block->btn_second_text,
                            'style'=>'text-align:center;color:black;',
                        ])->label(false)?>
                    </a>
                </div>
            </div>
            <?=Html::submitButton('Сохранить изменения', ['class'=>'btn btn-success'])?>
        </div>
        <?php ActiveForm::end();?>
        <!-- конец блока Инфо -->
        <br>
        <br>
        <div style="width: 100%; height: 10px; background-color: black"></div>
        <br>
        <!-- блок Про Университеты  -->
        <?php $form=ActiveForm::begin(['id'=>'TourAboutUniversityBlockForm'])?>
        <div class="app-features text-center info" id="about_universiti">
            <div class="container">
                <h1 class="wow fadeInDown" data-wow-delay="0.1s">

                    <?=$form->field($tour_about_university_block_form,'title_big_head')->textInput([
                        'value'=>$tour_about_university_block->title_big_head,
                        'style'=>'text-align:center;color:black;',
                    ])->label(false)?>

                </h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s" style="color: #4a4a4a">

                    <?=$form->field($tour_about_university_block_form,'text_head')->textInput([
                        'value'=>$tour_about_university_block->text_head,
                        'style'=>'text-align:center;color:black;',
                    ])->label(false)?>
                </p>

                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-5 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="feature-single">
                                <img class="img-responsive" src="/tours/images/univer1.jpg" alt="App"
                                     style="margin-bottom: 30px"/>
                            </div>
                        </div>

                        <div class="col-md-7 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="feature-single">
                                <div class="icon"><i class="ion-ios-list-outline"></i></div>
                                <h1 style="font-weight: 800">
                                    <?=$form->field($tour_about_university_block_form,'title_first')->textInput([
                                        'value'=>$tour_about_university_block->title_first,
                                        'style'=>'text-align:center;color:black;',
                                    ])->label(false)?>
                                </h1>
                                <p style="color: #4a4a4a">
                                    <?=$form->field($tour_about_university_block_form,'description_first')->textarea([
                                        'value'=>$tour_about_university_block->description_first,
                                        'style'=>'text-align:center;color:black;',
                                    ])->label(false)?>
                                </p>
                                <br>
                                <a target="_blank"
                                   href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-7 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="feature-single">
                                <div class="icon"><i class="ion-ios-americanfootball-outline"></i></div>

                                    <h1 style="font-weight: 800">
                                        <?=$form->field($tour_about_university_block_form,'title_second')->textInput([
                                            'value'=>$tour_about_university_block->title_second,
                                            'style'=>'text-align:center;color:black;',
                                        ])->label(false)?>
                                    </h1>
                                <p style="color: #4a4a4a">
                                    <?=$form->field($tour_about_university_block_form,'description_second')->textarea([
                                        'value'=>$tour_about_university_block->description_second,
                                        'style'=>'text-align:center;color:black;',
                                    ])->label(false)?>
                                </p>
                                <br>
                                <a target="_blank"
                                   href="<?php echo Yii::$app->urlManager->createUrl(['tour/venskiy-technicheskiy-universitet']) ?>">Подробнее</a>
                            </div>
                        </div>
                        <div class="col-md-5 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="feature-single">
                                <img class="img-responsive" src="/tours/images/wien.jpg" alt="App"
                                     style="margin-bottom: 15px"/>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-5 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="feature-single">
                                <img class="img-responsive" src="/tours/images/wu.jpg" alt="App"/>
                            </div>
                        </div>
                        <div class="col-md-7 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="feature-single">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                                    <h1 style="font-weight: 800">
                                        <?=$form->field($tour_about_university_block_form,'title_third')->textInput([
                                            'value'=>$tour_about_university_block->title_third,
                                            'style'=>'text-align:center;color:black;',
                                        ])->label(false)?>
                                    </h1>
                                <p style="color: #4a4a4a">
                                    <?=$form->field($tour_about_university_block_form,'description_third')->textarea([
                                        'value'=>$tour_about_university_block->description_third,
                                        'style'=>'text-align:center;color:black;',
                                    ])->label(false)?>
                                </p>
                                <br>
                                <a target="_blank"
                                   href="<?php echo Yii::$app->urlManager->createUrl(['tour/venskii-universitet-ekonomiki-i-biznesa']) ?>">Подробнее</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-md-12 wow fadeInDown" data-wow-delay="0.2s">
                    <div class="feature-single">
                        <div class="icon"><i class="ion-ios-heart-outline"></i></div>
                        <h1 style="font-weight: 800; font-size: xx-large" id="other_universities">
                            <?=$form->field($tour_about_university_block_form,'title_big_footer')->textInput([
                                'value'=>$tour_about_university_block->title_big_footer,
                                'style'=>'text-align:center;color:black;',
                            ])->label(false)?>
                        </h1>
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
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a target="_blank"
                                               href="<?php echo Yii::$app->urlManager->createUrl(['tour/venskij-agrarnyij-universitet']) ?>"><img
                                                    src="/tours/images/ven-agr-univer.jpg"
                                                    alt="Венский Аграрный Университет"></a>
                                            <div class="carousel-caption"
                                                 style="background: linear-gradient(#e4e4e4, #ccc);width: 100%;margin-left: -300px">
                                                <p style="color: #00aeda; font-size: x-large; font-weight: 400;">
                                                    <?=$form->field($tour_about_university_block_form,'curusel_title_first')->textInput([
                                                        'value'=>$tour_about_university_block->curusel_title_first,
                                                        'style'=>'text-align:center;color:black;',
                                                    ])->label(false)?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <a target="_blank"
                                               href="<?php echo Yii::$app->urlManager->createUrl(['tour/venskyy-medytsynskyy-unyversytet']) ?>"><img
                                                    src="/tours/images/venskyy-medytsynskyy-unyversytet-2.jpg"
                                                    alt="Венский Медицинский Университет"></a>
                                            <div class="carousel-caption"
                                                 style="background: linear-gradient(#e4e4e4, #ccc);width: 100%;margin-left: -300px">
                                                <p style="color: #00aeda; font-size: x-large; font-weight: 400;">
                                                    <?=$form->field($tour_about_university_block_form,'curusel_title_second')->textInput([
                                                        'value'=>$tour_about_university_block->curusel_title_second,
                                                        'style'=>'text-align:center;color:black;',
                                                    ])->label(false)?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <a target="_blank"
                                               href="<?php echo Yii::$app->urlManager->createUrl(['tour/videnskij-veterinarnij-universite']) ?>"><img
                                                    src="/tours/images/videnskij-veterinarnij-universitet-2.jpg"
                                                    alt="Венский Ветеринарный Университет"></a>
                                            <div class="carousel-caption"
                                                 style="background: linear-gradient(#e4e4e4, #ccc);width: 100%;margin-left: -300px">
                                                <p style="color: #00aeda; font-size: x-large; font-weight: 400;">
                                                    <?=$form->field($tour_about_university_block_form,'curusel_title_third')->textInput([
                                                        'value'=>$tour_about_university_block->curusel_title_third,
                                                        'style'=>'text-align:center;color:black;',
                                                    ])->label(false)?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <a target="_blank"
                                               href="<?php echo Yii::$app->urlManager->createUrl(['tour/venskiy-universitet-prikladnyh-nauk']) ?>"><img
                                                    src="/tours/images/venskiy-universitet-prikladnyh-nauk-2.jpg"
                                                    alt="Венский Университет Прикладных Наук"></a>
                                            <div class="carousel-caption"
                                                 style="background: linear-gradient(#e4e4e4, #ccc);width: 100%;margin-left: -300px">
                                                <p style="color: #00aeda; font-size: x-large; font-weight: 400;">
                                                    <?=$form->field($tour_about_university_block_form,'curusel_title_four')->textInput([
                                                        'value'=>$tour_about_university_block->curusel_title_four,
                                                        'style'=>'text-align:center;color:black;',
                                                    ])->label(false)?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <a target="_blank"
                                               href="<?php echo Yii::$app->urlManager->createUrl(['tour/coursi-nemeckogo-v-avstii']) ?>"><img
                                                    src="/tours/images/coursi-nemeckogo-v-avstii-2.jpg"
                                                    alt="Курсы немецкого языка в Вене"></a>
                                            <div class="carousel-caption"
                                                 style="background: linear-gradient(#e4e4e4, #ccc);width: 100%;margin-left: -300px">
                                                <p style="color: #00aeda; font-size: x-large; font-weight: 400;">
                                                    <?=$form->field($tour_about_university_block_form,'curusel_title_five')->textInput([
                                                        'value'=>$tour_about_university_block->curusel_title_five,
                                                        'style'=>'text-align:center;color:black;',
                                                    ])->label(false)?>
                                                </p>
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
                        </div
                        </br>
                        <p style="color: #4a4a4a">
                            <?=$form->field($tour_about_university_block_form,'text_footer')->textInput([
                                'value'=>$tour_about_university_block->text_footer,
                                'style'=>'text-align:center;color:black;',
                            ])->label(false)?>
                        </p>
                    </div>

                    <a href="#" class="btn btn-action wow fadeInUp"

                       style="visibility: visible; animation-name: fadeInUp;">
                        <?=$form->field($tour_about_university_block_form,'btn_message_text')->textInput([
                            'value'=>$tour_about_university_block->btn_message_text,
                            'style'=>'text-align:center;color:black;',
                        ])->label(false)?></a>
                </div>

            </div>
            <br>
            <div>
                <div class="btn-group">
                    <button type="button" class="btn btn-info"><a style="color: black" title="Позвонить"
                                                                  href="#">
                            <?=$form->field($tour_about_university_block_form,'btn_first_text')->textInput([
                                'value'=>$tour_about_university_block->btn_first_text,
                                'style'=>'text-align:center;color:black;',
                            ])->label(false)?>
                        </a>
                    </button>
                    <button type="button" class="btn btn-default"><a style="color: black" title="Позвонить"
                                                                     href="#">
                            <?=$form->field($tour_about_university_block_form,'btn_second_text')->textInput([
                                'value'=>$tour_about_university_block->btn_second_text,
                                'style'=>'text-align:center;color:black;',
                            ])->label(false)?></a>
                    </button>
                </div>
            </div>
            <br>
            <?=Html::submitButton('Сохранить изменения', ['class'=>'btn btn-success'])?>
        </div>
        <?php ActiveForm::end();?>
        <br>
        <br>
        <div style="width: 100%; height: 10px; background-color: black"></div>
        <br>
        <!-- конец блока Про Университеты  -->
        <!-- блок Наши Услуги -->
        <?php $form=ActiveForm::begin(['id'=>'TourOurServicesBlockForm'])?>
        <div class="split-features info" id="our_services">
            <div class="col-md-5 col-md-offset-1 nopadding">
                <div class="split-image"><img class="img-responsive wow fadeIn" src="/tours/images/picture1.jpg"
                                              alt="Image"/></div>
            </div>
            <div class="col-md-5 nopadding">
                <div class="split-content">
                    <h1 class="wow fadeInUp">
                        <?=$form->field($tour_our_services_block_form, 'title_big_head')->textInput([
                            'value'=>$tour_our_services_block->title_big_head,
                            'style'=>'text-align:center;color:black; font-size:25px',
                        ])->label(false)?>
                    </h1>
                    <h3 class="wow fadeInUp" style="font-weight: 700">
                        <?=$form->field($tour_our_services_block_form, 'title_first')->textInput([
                            'value'=>$tour_our_services_block->title_first,
                            'style'=>'text-align:center;color:black; font-size:25px',
                        ])->label(false)?>
                    </h3>
                    <ul class="wow fadeInUp">
                        <li style="color: #4a4a4a">
                            <?=$form->field($tour_our_services_block_form, 'description_first_first')->textInput([
                                'value'=>$tour_our_services_block->description_first_first,
                                'style'=>'text-align:center;color:black; font-size:20px',
                            ])->label(false)?>
                        </li>
                        <li style="color: #4a4a4a">
                            <?=$form->field($tour_our_services_block_form, 'description_first_second')->textInput([
                                'value'=>$tour_our_services_block->description_first_second,
                                'style'=>'text-align:center;color:black; font-size:20px',
                            ])->label(false)?>
                        </li>
                        <li style="color: #4a4a4a">
                            <?=$form->field($tour_our_services_block_form, 'description_first_third')->textInput([
                                'value'=>$tour_our_services_block->description_first_third,
                                'style'=>'text-align:center;color:black; font-size:20px',
                            ])->label(false)?>
                        </li>
                    </ul>
                    <h3 class="wow fadeInUp" style="font-weight: 700">
                        <?=$form->field($tour_our_services_block_form, 'title_second')->textInput([
                            'value'=>$tour_our_services_block->title_second,
                            'style'=>'text-align:center;color:black; font-size:25px',
                        ])->label(false)?>
                    </h3>
                    <ul class="wow fadeInUp">
                        <li style="color: #4a4a4a">
                            <?=$form->field($tour_our_services_block_form, 'description_second_first')->textInput([
                                'value'=>$tour_our_services_block->description_second_first,
                                'style'=>'text-align:center;color:black; font-size:20px',
                            ])->label(false)?>
                        </li>
                        <li style="color: #4a4a4a">
                            <?=$form->field($tour_our_services_block_form, 'description_second_second')->textInput([
                                'value'=>$tour_our_services_block->description_second_second,
                                'style'=>'text-align:center;color:black; font-size:20px',
                            ])->label(false)?>
                        </li>
                        <li style="color: #4a4a4a">
                            <?=$form->field($tour_our_services_block_form, 'description_second_third')->textInput([
                                'value'=>$tour_our_services_block->description_second_third,
                                'style'=>'text-align:center;color:black; font-size:20px',
                            ])->label(false)?>
                        </li>
                        <li style="color: #4a4a4a">
                            <?=$form->field($tour_our_services_block_form, 'description_second_four')->textInput([
                                'value'=>$tour_our_services_block->description_second_four,
                                'style'=>'text-align:center;color:black; font-size:20px',
                            ])->label(false)?>
                        </li>
                    </ul>
                    <h3 class="wow fadeInUp" style="font-weight: 700">
                        <?=$form->field($tour_our_services_block_form, 'title_third')->textInput([
                            'value'=>$tour_our_services_block->title_third,
                            'style'=>'text-align:center;color:black; font-size:25px',
                        ])->label(false)?>
                    </h3>
                    <ul class="wow fadeInUp">
                        <li style="color: #4a4a4a">
                            <?=$form->field($tour_our_services_block_form, 'description_third_first')->textInput([
                                'value'=>$tour_our_services_block->description_third_first,
                                'style'=>'text-align:center;color:black; font-size:20px',
                            ])->label(false)?>
                        </li>
                        <li style="color: #4a4a4a">
                            <?=$form->field($tour_our_services_block_form, 'description_third_second')->textInput([
                                'value'=>$tour_our_services_block->description_third_second,
                                'style'=>'text-align:center;color:black; font-size:20px',
                            ])->label(false)?>
                        </li>
                    </ul>
                    <h3 class="wow fadeInUp" style="font-weight: 700">
                        <?=$form->field($tour_our_services_block_form, 'title_four')->textInput([
                            'value'=>$tour_our_services_block->title_four,
                            'style'=>'text-align:center;color:black; font-size:25px',
                        ])->label(false)?>
                    </h3>
                </div>

            </div>

            <div style="text-align: center;">
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><a style="color: black" title="Позвонить"
                                                                     href="#">
                            <?=$form->field($tour_our_services_block_form, 'btn_first_text')->textInput([
                                'value'=>$tour_our_services_block->btn_first_text,
                                'style'=>'text-align:center;color:black',
                            ])->label(false)?>
                        </a>
                    </button>
                    <button type="button" class="btn btn-info"><a style="color: black" title="Позвонить"
                                                                  href="#">
                            <?=$form->field($tour_our_services_block_form, 'btn_second_text')->textInput([
                                'value'=>$tour_our_services_block->btn_second_text,
                                'style'=>'text-align:center;color:black',
                            ])->label(false)?>
                        </a>
                    </button>
                </div>
            </div>
            <?=Html::submitButton('Сохранить изменения', ['class'=>'btn btn-success'])?>
        </div>
        <?php ActiveForm::end();?>
        <br>
        <br>
        <div style="width: 100%; height: 10px; background-color: black"></div>
        <!-- конец блока Наши Услуги -->

        <!-- блок О нас -->
        <div class="info">
            <?php $form=ActiveForm::begin(['id'=>'TourAboutUsBlockForm']);?>
            <div class="split-features2 info" id="about_us">

                <div class="col-md-6 nopadding">
                    <div class="split-content second">
                        <br>
                        <h1 class="wow fadeInUp">
                            <?=$form->field($tour_about_us_block_form, 'title_big_head')->textInput([
                                'value'=>$tour_about_us_block->title_big_head,
                                'style'=>'text-align:center;color:black;font-size:25px',
                            ])->label(false)?>
                        </h1>
                        <p class="wow fadeInUp" style="color: #4a4a4a; font-weight: 500">
                            <?=$form->field($tour_about_us_block_form, 'text_head')->textarea([
                                'value'=>$tour_about_us_block->text_head,
                                'style'=>'text-align:center;color:black;font-size:16px',
                                'rows'=>13
                            ])->label(false)?>
                        </p>
                        <!--<ul class="wow fadeInUp">-->
                        <!--<li>Nulla ornare purus non consequat ultricies.</li>-->
                        <!--<li>Etiam est nisl, molestie sed egestas bibendum</li>-->
                        <!--<li>Aliquam vel euismod elit, sed suscipit est.</li>-->
                        <!--<li>Curabitur egestas justo neque viverra vel. </li>-->
                        <!--</ul>-->
                    </div>
                </div>
                <div class="col-md-6 nopadding">
                    <div class="split-image"><img class="img-responsive wow fadeIn" src="/tours/images/Screenshot_1.jpg"
                                                  alt="Image"/></div>
                </div>
            </div>
            <!-- About Us Section 2-->
            <div class="split-features">
                <div class="col-md-6 nopadding">
                    <div class="split-image"><img class="img-responsive wow fadeIn" src="/tours/images/Screenshot_2.jpg"
                                                  alt="Image"/></div>
                </div>
                <div class="col-md-6 nopadding">
                    <div class="split-content">
                        <br>
                        <h1 class="wow fadeInUp">
                            <?=$form->field($tour_about_us_block_form, 'title_big_footer')->textInput([
                                'value'=>$tour_about_us_block->title_big_footer,
                                'style'=>'text-align:center;color:black;font-size:20px',
                            ])->label(false)?>
                        </h1>
                        <h3 class="wow fadeInUp" style="font-weight: 700">
                            <?=$form->field($tour_about_us_block_form, 'title_first')->textInput([
                                'value'=>$tour_about_us_block->title_first,
                                'style'=>'text-align:center;color:black;font-size:20px',
                            ])->label(false)?>
                        </h3>
                        <ul class="wow fadeInUp" style="list-style: none">
                            <li style="color: #4a4a4a">
                                <?=$form->field($tour_about_us_block_form, 'description_first')->textarea([
                                    'value'=>$tour_about_us_block->description_first,
                                    'style'=>'text-align:center;color:black;font-size:16px',
                                    'rows'=>8
                                ])->label(false)?>
                            </li>
                        </ul>
                        <h3 class="wow fadeInUp" style="font-weight: 700">
                            <?=$form->field($tour_about_us_block_form, 'title_second')->textInput([
                                'value'=>$tour_about_us_block->title_second,
                                'style'=>'text-align:center;color:black;font-size:20px',
                            ])->label(false)?>
                        </h3>
                        <ul class="wow fadeInUp" style="list-style: none">
                            <li style="color: #4a4a4a">
                                <?=$form->field($tour_about_us_block_form, 'description_second')->textarea([
                                    'value'=>$tour_about_us_block->description_second,
                                    'style'=>'text-align:center;color:black;font-size:16px',
                                    'rows'=>8
                                ])->label(false)?>
                            </li>
                        </ul>
                        <h3 class="wow fadeInUp" style="font-weight: 700">
                            <?=$form->field($tour_about_us_block_form, 'title_third')->textInput([
                                'value'=>$tour_about_us_block->title_third,
                                'style'=>'text-align:center;color:black;font-size:20px',
                            ])->label(false)?>
                        </h3>
                        <ul class="wow fadeInUp" style="list-style: none">
                            <li style="color: #4a4a4a">
                                <?=$form->field($tour_about_us_block_form, 'description_third')->textarea([
                                    'value'=>$tour_about_us_block->description_third,
                                    'style'=>'text-align:center;color:black;font-size:16px',
                                    'rows'=>7
                                ])->label(false)?>
                            </li>
                        </ul>
                        <h3 class="wow fadeInUp" style="font-weight: 700">
                            <?=$form->field($tour_about_us_block_form, 'title_four')->textInput([
                                'value'=>$tour_about_us_block->title_four,
                                'style'=>'text-align:center;color:black;font-size:20px',
                            ])->label(false)?>
                        </h3>
                        <ul class="wow fadeInUp" style="list-style: none">
                            <li style="color: #4a4a4a">
                                <?=$form->field($tour_about_us_block_form, 'description_four')->textarea([
                                    'value'=>$tour_about_us_block->description_four,
                                    'style'=>'text-align:center;color:black;font-size:16px',
                                    'rows'=>6
                                ])->label(false)?>
                            </li>
                        </ul>
                        <h3 class="wow fadeInUp" style="font-weight: 700">
                            <?=$form->field($tour_about_us_block_form, 'title_five')->textInput([
                                'value'=>$tour_about_us_block->title_five,
                                'style'=>'text-align:center;color:black;font-size:20px',
                            ])->label(false)?>
                        </h3>
                        <ul class="wow fadeInUp" style="list-style: none">
                            <li style="color: #4a4a4a">
                                <?=$form->field($tour_about_us_block_form, 'description_five')->textarea([
                                    'value'=>$tour_about_us_block->description_five,
                                    'style'=>'text-align:center;color:black;font-size:16px',
                                    'rows'=>7
                                ])->label(false)?>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <div style="text-align: center;">

                    <h4 style="color: black; font-weight: bold">
                        <?=$form->field($tour_about_us_block_form, 'text_footer')->textInput([
                            'value'=>$tour_about_us_block->text_footer,
                            'style'=>'text-align:center;color:black;font-size:20px',
                        ])->label(false)?>
                    </h4>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default"><a style="color: black" title="Позвонить"
                                                                         href="#">
                                <?=$form->field($tour_about_us_block_form, 'btn_first_text')->textInput([
                                    'value'=>$tour_about_us_block->btn_first_text,
                                    'style'=>'text-align:center;color:black;font-size:16px',
                                ])->label(false)?>
                            </a>
                        </button>
                        <button type="button" class="btn btn-info"><a style="color: black" title="Позвонить"
                                                                      href="#">
                                <?=$form->field($tour_about_us_block_form, 'btn_second_text')->textInput([
                                    'value'=>$tour_about_us_block->btn_second_text,
                                    'style'=>'text-align:center;color:black;font-size:16px',
                                ])->label(false)?>
                            </a>
                        </button>
                    </div>
                </div>

            </div>
            <?=Html::submitButton('Сохранить изменения', ['class'=>'btn btn-success'])?>
            <br>
            <?php ActiveForm::end();?>
        </div>
        <!-- конец блока О нас -->
        <div style="width: 100%; height: 10px; background-color: black"></div>
        <!-- блок Часто задаваемые вопросы -->
        <br>
        <div class="pitch text-center info" id="classes2">
            <?php $form = ActiveForm::begin(['id'=>'TourQuestionsBlockForm']);?>
            <div class="container">
                <div class="pitch-intro">
                    <h1 class="wow fadeInDown" data-wow-delay="0.2s">
                        <?=$form->field($tour_questions_block_form, 'title_big_head')->textInput([
                            'value'=>$tour_questions_block->title_big_head,
                            'style'=>'text-align:center;color:black;font-size:25px',
                        ])->label(false)?>

                    </h1>
                    <!-- <p class="wow fadeInDown" data-wow-delay="0.2s">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p> -->
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"><i class="ion-ios-checkmark-outline"></i></div>
                            <div class="pitch-content">
                                <h1>
                                    <?=$form->field($tour_questions_block_form, 'title_first')->textarea([
                                        'value'=>$tour_questions_block->title_first,
                                        'style'=>'text-align:center;color:black;font-size:20px',
                                        'rows'=>3
                                    ])->label(false)?>
                                </h1>
                                <p>
                                    <?=$form->field($tour_questions_block_form, 'description_first')->textarea([
                                        'value'=>$tour_questions_block->description_first,
                                        'style'=>'text-align:center;color:black;font-size:16px',
                                        'rows'=>9
                                    ])->label(false)?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"><i class="ion-ios-mic-outline"></i></div>
                            <div class="pitch-content">
                                <h1>
                                    <?=$form->field($tour_questions_block_form, 'title_second')->textarea([
                                        'value'=>$tour_questions_block->title_second,
                                        'style'=>'text-align:center;color:black;font-size:20px',
                                        'rows'=>3
                                    ])->label(false)?>
                                </h1>
                                <p>
                                    <?=$form->field($tour_questions_block_form, 'description_second')->textarea([
                                        'value'=>$tour_questions_block->description_second,
                                        'style'=>'text-align:center;color:black;font-size:16px',
                                        'rows'=>9
                                    ])->label(false)?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"><i class="ion-ios-folder-outline"></i></div>
                            <div class="pitch-content">
                                <h1>
                                    <?=$form->field($tour_questions_block_form, 'title_third')->textarea([
                                        'value'=>$tour_questions_block->title_third,
                                        'style'=>'text-align:center;color:black;font-size:20px',
                                        'rows'=>3
                                    ])->label(false)?>
                                </h1>
                                <p>
                                    <?=$form->field($tour_questions_block_form, 'description_third')->textarea([
                                        'value'=>$tour_questions_block->description_third,
                                        'style'=>'text-align:center;color:black;font-size:16px',
                                        'rows'=>9
                                    ])->label(false)?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"><i class="ion-ios-folder-outline"></i></div>
                            <div class="pitch-content">
                                <h1>
                                    <?=$form->field($tour_questions_block_form, 'title_four')->textarea([
                                        'value'=>$tour_questions_block->title_four,
                                        'style'=>'text-align:center;color:black;font-size:20px',
                                        'rows'=>3
                                    ])->label(false)?>
                                </h1>
                                <p>
                                    <?=$form->field($tour_questions_block_form, 'description_four')->textarea([
                                        'value'=>$tour_questions_block->description_four,
                                        'style'=>'text-align:center;color:black;font-size:16px',
                                        'rows'=>9
                                    ])->label(false)?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"><i class="ion-ios-folder-outline"></i></div>
                            <div class="pitch-content">
                                <h1>
                                    <?=$form->field($tour_questions_block_form, 'title_five')->textarea([
                                        'value'=>$tour_questions_block->title_five,
                                        'style'=>'text-align:center;color:black;font-size:20px',
                                        'rows'=>3
                                    ])->label(false)?>
                                </h1>
                                <p>
                                    <?=$form->field($tour_questions_block_form, 'description_five')->textarea([
                                        'value'=>$tour_questions_block->description_five,
                                        'style'=>'text-align:center;color:black;font-size:16px',
                                        'rows'=>9
                                    ])->label(false)?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
                            <div class="pitch-icon"><i class="ion-ios-folder-outline"></i></div>
                            <div class="pitch-content">
                                <h1>
                                    <?=$form->field($tour_questions_block_form, 'title_six')->textarea([
                                        'value'=>$tour_questions_block->title_six,
                                        'style'=>'text-align:center;color:black;font-size:20px',
                                        'rows'=>3
                                    ])->label(false)?>
                                </h1>
                                <p>
                                    <?=$form->field($tour_questions_block_form, 'description_six')->textarea([
                                        'value'=>$tour_questions_block->description_six,
                                        'style'=>'text-align:center;color:black;font-size:16px',
                                        'rows'=>9
                                    ])->label(false)?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <h6 style="color: white; font-weight: bold">
                    <?=$form->field($tour_questions_block_form, 'text_footer')->textInput([
                        'value'=>$tour_questions_block->text_footer,
                        'style'=>'text-align:center;color:black;font-size:20px',
                    ])->label(false)?>
                </h6>
                <br>
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><a style="color: black" title="Позвонить"
                                                                     href="#">
                            <?=$form->field($tour_questions_block_form, 'btn_first_text')->textInput([
                                'value'=>$tour_questions_block->btn_first_text,
                                'style'=>'text-align:center;color:black;font-size:16px',
                            ])->label(false)?>
                        </a>
                    </button>
                    <button type="button" class="btn btn-info"><a style="color: black" title="Позвонить"
                                                                  href="#">
                            <?=$form->field($tour_questions_block_form, 'btn_second_text')->textInput([
                                'value'=>$tour_questions_block->btn_second_text,
                                'style'=>'text-align:center;color:black;font-size:16px',
                            ])->label(false)?>
                        </a>
                    </button>
                </div>
            </div>

        </div>
        <?=Html::submitButton('Сохранить изменения', ['class'=>'btn btn-success'])?>
        <br>
        <?php ActiveForm::end();?>
        <br>
        <!-- конец блока Часто задаваемые вопросы -->
        <!-- блок Есть вопросы -->
        <?php $form=ActiveForm::begin(['id'=>'TourHaveQuestionsBlockForm']);?>
        <div style="width: 100%; height: 10px; background-color: black"></div>
        <div class="feature-sub cta-sub3 info">
            <div class="container">
                <div class="sub-inner" style="margin-left: 110px">
                    <h1 class="wow fadeInUp">
                    <?=$form->field($tour_have_questions_block_form, 'title_big_head')->textInput([
                        'value'=>$tour_have_questions_block->title_big_head,
                        'style'=>'text-align:center;color:black;font-size:25px',
                    ])->label(false)?>
                    </h1>
                    <a class="btn btn-action wow fadeInUp">
                        <?=$form->field($tour_have_questions_block_form, 'btn_message_text')->textInput([
                            'value'=>$tour_have_questions_block->btn_message_text,
                            'style'=>'text-align:center;color:black;font-size:20px',
                        ])->label(false)?>
                    </a></div>
            </div>
            <?=Html::submitButton('Сохранить изменения', ['class'=>'btn btn-success'])?>
        </div>
        <?php ActiveForm::end();?>
        <!-- конец блока Есть вопросы -->
        <div style="width: 100%; height: 10px; background-color: black"></div>
        <!-- блок Отзывы -->
        <div class="review-section info" id="review">
            <?php $form= ActiveForm::begin(['id'=>'TourReviewBlockForm']);?>
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <div class="reviews owl-carousel owl-theme">
                        <div class="review-single"><img class="img-circle" src="/tours/images/customer1.png"
                                                        alt="Client Testimonoal"/>
                            <div class="review-text wow fadeInUp" data-wow-delay="0.2s">
                                <p><?=$form->field($tour_review_block_form, 'text_review_first')->textarea([
                                        'value'=>$tour_review_block->text_review_first,
                                        'style'=>'color:black;font-size:16px',
                                        'rows'=>7
                                    ])->label(false)?>
                                </p>
                                <h3>
                                    <?=$form->field($tour_review_block_form, 'name_first')->textInput([
                                        'value'=>$tour_review_block->name_first,
                                        'style'=>'color:black;font-size:20px',
                                    ])->label(false)?>
                                </h3>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="/tours/images/customer2.png"
                                                        alt="Client Testimonoal"/>
                            <div class="review-text">
                                <p><?=$form->field($tour_review_block_form, 'text_review_second')->textarea([
                                        'value'=>$tour_review_block->text_review_second,
                                        'style'=>'color:black;font-size:16px',
                                        'rows'=>7
                                    ])->label(false)?>
                                </p>
                                <h3>
                                    <?=$form->field($tour_review_block_form, 'name_second')->textInput([
                                        'value'=>$tour_review_block->name_second,
                                        'style'=>'color:black;font-size:20px',
                                    ])->label(false)?>
                                </h3>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="/tours/images/customer3.png"
                                                        alt="Client Testimonoal"/>
                            <div class="review-text">
                                <p><?=$form->field($tour_review_block_form, 'text_review_third')->textarea([
                                        'value'=>$tour_review_block->text_review_third,
                                        'style'=>'color:black;font-size:16px',
                                        'rows'=>7
                                    ])->label(false)?>
                                </p>
                                <h3>
                                    <?=$form->field($tour_review_block_form, 'name_third')->textInput([
                                        'value'=>$tour_review_block->name_third,
                                        'style'=>'color:black;font-size:20px',
                                    ])->label(false)?>
                                </h3>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="/tours/images/customer4.png"
                                                        alt="Client Testimonoal"/>
                            <div class="review-text">
                                <p><?=$form->field($tour_review_block_form, 'text_review_four')->textarea([
                                        'value'=>$tour_review_block->text_review_four,
                                        'style'=>'color:black;font-size:16px',
                                        'rows'=>7
                                    ])->label(false)?>
                                </p>
                                <h3>
                                    <?=$form->field($tour_review_block_form, 'name_four')->textInput([
                                        'value'=>$tour_review_block->name_four,
                                        'style'=>'color:black;font-size:20px',
                                    ])->label(false)?>
                                </h3>
                            </div>
                        </div>
                        <div class="review-single"><img class="img-circle" src="/tours/images/customer5.png"
                                                        alt="Client Testimonoal"/>
                            <div class="review-text">
                                <p><?=$form->field($tour_review_block_form, 'text_review_five')->textarea([
                                        'value'=>$tour_review_block->text_review_five,
                                        'style'=>'color:black;font-size:16px',
                                        'rows'=>7
                                    ])->label(false)?>
                                </p>
                                <h3>
                                    <?=$form->field($tour_review_block_form, 'name_five')->textInput([
                                        'value'=>$tour_review_block->name_five,
                                        'style'=>'color:black;font-size:20px',
                                    ])->label(false)?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <h6 style="color: white; font-weight: bold">
                    <?=$form->field($tour_review_block_form, 'text_footer')->textInput([
                        'value'=>$tour_review_block->text_footer,
                        'style'=>'text-align:center;color:black;font-size:20px',
                    ])->label(false)?>
                </h6>
                <br>
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><a style="color: black" title="Позвонить"
                                                                     href="#">
                            <?=$form->field($tour_review_block_form, 'btn_first_text')->textInput([
                                'value'=>$tour_review_block->btn_first_text,
                                'style'=>'color:black;font-size:16px',
                            ])->label(false)?>
                        </a>
                    </button>
                    <button type="button" class="btn btn-info"><a style="color: black" title="Позвонить"
                                                                  href="#">
                            <?=$form->field($tour_review_block_form, 'btn_second_text')->textInput([
                                'value'=>$tour_review_block->btn_second_text,
                                'style'=>'color:black;font-size:16px',
                            ])->label(false)?></a>
                    </button>
                </div>
            </div>
            <?=Html::submitButton('Сохранить изменения', ['class'=>'btn btn-success'])?>
            <?php ActiveForm::end();?>
        </div>
        <!-- конец блока Отзывы -->
        <div style="width: 100%; height: 10px; background-color: black"></div>
        <!-- блок Цены -->
        <?php $form = ActiveForm::begin(['id'=>'TourPricesBlockForm']);?>
        <div id="pricing" class="pricing-section text-center info">
            <div class="container">
                <div class="col-md-12 col-sm-12 nopadding">
                    <div class="pricing-intro">
                        <h1 class="wow fadeInUp" data-wow-delay="0s">
                            <?= $form->field($tour_prices_block_form, 'title_big_head')->textInput([
                                'value'=>$tour_prices_block->title_big_head,
                                'style'=>'text-align:center;color:black;font-size:25px',
                            ])->label(false)?>
                        </h1>
                        <!--                        <p class="wow fadeInUp" data-wow-delay="0.2s"> Lorem ipsum dolor sit. Incidunt laborum beatae earum nihil odio consequatur officiis <br class="hidden-xs">-->
                        <!--                            tempore consequuntur officia ducimus unde doloribus quod unt repell </p>-->
                    </div>
                    <div class="col-sm-6">
                        <div class="table-left wow fadeInUp" data-wow-delay="0.4s">
                            <div class="pricing-details">
                                <h2>
                                    <?= $form->field($tour_prices_block_form, 'title_first')->textInput([
                                        'value'=>$tour_prices_block->title_first,
                                        'style'=>'text-align:center;color:black;font-size:20px',
                                    ])->label(false)?>
                                </h2>
                                <span> <?= $form->field($tour_prices_block_form, 'price_first')->textInput([
                                        'value'=>$tour_prices_block->price_first,
                                        'style'=>'text-align:center;color:black;font-size:20px',
                                    ])->label(false)?></span>
                                <!--                                <ul>-->
                                <!--                                    <li>Consectetur adipiscing</li>-->
                                <!--                                    <li>Nunc luctus nulla et tellus</li>-->
                                <!--                                    <li>Suspendisse quis metus</li>-->
                                <!--                                    <li>Vestibul varius fermentum erat</li>-->
                                <!--                                </ul>-->
                                <br>
                                <button class="btn btn-primary btn-action btn-fill">
                                    <?= $form->field($tour_prices_block_form, 'btn_rate_first')->textInput([
                                        'value'=>$tour_prices_block->btn_rate_first,
                                        'style'=>'text-align:center;color:black;font-size:20px',
                                    ])->label(false)?>
                                </button>
                            </div>
                            <div><p style="font-size: x-small; color: white">
                                    <?= $form->field($tour_prices_block_form, 'little_text_first')->textarea([
                                        'value'=>$tour_prices_block->little_text_first,
                                        'style'=>'text-align:center;color:black;font-size:15px',
                                        'rows'=>3,
                                    ])->label(false)?>
                                </p></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="table-right wow fadeInUp" data-wow-delay="0.6s">
                            <div class="pricing-details">
                                <h2>
                                    <?= $form->field($tour_prices_block_form, 'title_second')->textInput([
                                        'value'=>$tour_prices_block->title_second,
                                        'style'=>'text-align:center;color:black;font-size:20px',
                                    ])->label(false)?>
                                </h2>
                                <span>
                                    <?= $form->field($tour_prices_block_form, 'price_second')->textInput([
                                        'value'=>$tour_prices_block->price_second,
                                        'style'=>'text-align:center;color:black;font-size:20px',
                                    ])->label(false)?>
                                </span>
                                <!--                                <ul>-->
                                <!--                                    <li>Consectetur adipiscing</li>-->
                                <!--                                    <li>Nunc luctus nulla et tellus</li>-->
                                <!--                                    <li>Suspendisse quis metus</li>-->
                                <!--                                    <li>Vestibul varius fermentum erat</li>-->
                                <!--                                </ul>-->
                                <br>
                                <button class="btn btn-primary btn-action btn-fill">
                                    <?= $form->field($tour_prices_block_form, 'btn_rate_second')->textInput([
                                        'value'=>$tour_prices_block->btn_rate_second,
                                        'style'=>'text-align:center;color:black;font-size:20px',
                                    ])->label(false)?>
                                </button>
                            </div>
                            <div><p style="font-size: x-small; color: white">
                                    <?= $form->field($tour_prices_block_form, 'little_text_second')->textarea([
                                        'value'=>$tour_prices_block->little_text_second,
                                        'style'=>'text-align:center;color:black;font-size:15px',
                                        'rows'=>3,
                                    ])->label(false)?>
                                </p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <h6 style="color: white; font-weight: bold">
                    <?= $form->field($tour_prices_block_form, 'text_footer')->textInput([
                        'value'=>$tour_prices_block->text_footer,
                        'style'=>'text-align:center;color:black;font-size:20px',
                    ])->label(false)?>
                </h6>
                <br>
                <div class="btn-group">
                    <button type="button" class="btn btn-info"><a style="color: black" title="Позвонить"
                                                                  href="#">
                            <?= $form->field($tour_prices_block_form, 'btn_first_text')->textInput([
                                'value'=>$tour_prices_block->btn_first_text,
                                'style'=>'text-align:center;color:black;font-size:20px',
                            ])->label(false)?>
                        </a>
                    </button>
                    <button type="button" class="btn btn-default"><a style="color: black" title="Позвонить"
                                                                     href="#">
                            <?= $form->field($tour_prices_block_form, 'btn_second_text')->textInput([
                                'value'=>$tour_prices_block->btn_second_text,
                                'style'=>'text-align:center;color:black;font-size:20px',
                            ])->label(false)?>
                    </button>
                </div>
            </div>

        </div>
        <?=Html::submitButton('Сохранить изменения', ['class'=>'btn btn-success'])?>
        <?php ActiveForm::end();?>
        <!-- конец блока Цены -->
        <div style="width: 100%; height: 10px; background-color: black"></div>
        <!-- блок Контакты -->
        <br>
        <?php $form = ActiveForm::begin(['id'=> 'TourContactBlockForm'])?>
        <div class="cta-sub no-color info">
            <div class="container">

                <div class="cta-inner">
                    <h1 id="contacts" class="wow fadeInUp" data-wow-delay="0s">
                        <?= $form->field($tour_contact_block_form, 'title_big_head')->textInput([
                            'value'=>$tour_contact_block->title_big_head,
                            'style'=>'text-align:center;color:black;font-size:20px',
                        ])->label(false)?>
                    </h1>
                    <br>
                    <h3 style="font-size: 20px; color: white" class="wow fadeInUp" data-wow-delay="0s">
                        <?= $form->field($tour_contact_block_form, 'text_head')->textInput([
                            'value'=>$tour_contact_block->text_head,
                            'style'=>'text-align:center;color:black;font-size:16px',
                        ])->label(false)?>
                    </h3>
                    <br>

                    <hr>

                    <div class="row" style="margin-left: 5px">
                        <div class="col-xs-6 col-md-2 contact-button" style="width: 230px">
                            <a href="viber://chat?number=+380676367247" class="thumbnail ">
                                <img src="/tours/images/viber-logo.png" class="img-circle" alt="...">
                            </a>
                            <p>
                                <?= $form->field($tour_contact_block_form, 'description_first')->textInput([
                                    'value'=>$tour_contact_block->description_first,
                                    'style'=>'text-align:center;color:black;font-size:16px',
                                ])->label(false)?>
                            </p>
                        </div>
                        <div class="col-xs-6 col-md-2 contact-button" style="width: 230px">
                            <a href="https://t.me/StudentWay_Ukraina" class="thumbnail">
                                <img src="/tours/images/telegram_PNG27.png" alt="...">
                            </a>
                            <p>
                                <?= $form->field($tour_contact_block_form, 'description_second')->textInput([
                                    'value'=>$tour_contact_block->description_second,
                                    'style'=>'text-align:center;color:black;font-size:16px',
                                ])->label(false)?>
                            </p>
                        </div>
                        <div class="col-xs-6 col-md-2 contact-button" style="width: 230px">
                            <a href="https://m.me/studentway.ukraina?ref=w3726749" class="thumbnail">
                                <img src="/tours/images/facebook-messenger-chat-logo.png" alt="...">
                            </a>
                            <p>
                                <?= $form->field($tour_contact_block_form, 'description_third')->textInput([
                                    'value'=>$tour_contact_block->description_third,
                                    'style'=>'text-align:center;color:black;font-size:16px',
                                ])->label(false)?>
                            </p>
                        </div>
                        <div class="col-xs-6 col-md-2 contact-button" style="width: 230px">
                            <a href="whatsapp://send?phone=+380968141132" class="thumbnail">
                                <img src="/tours/images/whatsapp.png" alt="...">
                            </a>
                            <p>
                                <?= $form->field($tour_contact_block_form, 'description_four')->textInput([
                                    'value'=>$tour_contact_block->description_four,
                                    'style'=>'text-align:center;color:black;font-size:16px',
                                ])->label(false)?>
                            </p>
                        </div>
                        <div class="col-xs-6 col-md-2 contact-button" style="width: 230px">
                            <a href="https://www.instagram.com/studentway_ukraina/" class="thumbnail">
                                <img src="/tours/images/instagram-icon.png" alt="...">
                            </a>
                            <p>
                                <?= $form->field($tour_contact_block_form, 'description_five')->textInput([
                                    'value'=>$tour_contact_block->description_five,
                                    'style'=>'text-align:center;color:black;font-size:16px',
                                ])->label(false)?>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <br>

                    <h3 style="font-size: 20px; color: white" class="wow fadeInUp" data-wow-delay="0s">
                        <?= $form->field($tour_contact_block_form, 'text_footer')->textInput([
                            'value'=>$tour_contact_block->text_footer,
                            'style'=>'text-align:center;color:black;font-size:20px',
                        ])->label(false)?>
                    </h3>
                    <br>
                    <br>
                    <br>
                    <div class="row">

                        <div class="col-md-6"><h1><a style="color: white" title="Позвонить"
                                                     href="#">
                                    <?= $form->field($tour_contact_block_form, 'link_phone_first')->textInput([
                                        'value'=>$tour_contact_block->link_phone_first,
                                        'style'=>'text-align:center;color:black;font-size:20px',
                                    ])->label(false)?>
                                </a></h1></div>
                        <div class="col-md-6"><h1><a style="color: white" title="Позвонить"
                                                     href="#">
                                    <?= $form->field($tour_contact_block_form, 'link_phone_second')->textInput([
                                        'value'=>$tour_contact_block->link_phone_second,
                                        'style'=>'text-align:center;color:black;font-size:20px',
                                    ])->label(false)?>
                                </a></h1></div>

                    </div>
                </div>

            </div>
        </div>
        <?=Html::submitButton('Сохранить изменения', ['class'=>'btn btn-success'])?>
        <?php ActiveForm::end();?>
        <!-- конец блока Контакты -->
        <div style="width: 100%; height: 10px; background-color: black"></div>
        <!--блок Футер-->
<?php $form = ActiveForm::begin(['id'=> 'TourFooterBlockForm'])?>
        <div>
            <br>
            <div class="container info">
                <div>
                    <h1>
                        <?= $form->field($tour_footer_block_form, 'title_first')->textInput([
                            'value'=>$tour_footer_block->title_first,
                            'style'=>'text-align:center;color:black;font-size:25px',
                        ])->label(false)?>
                    </h1>
                    <p>
                        <?= $form->field($tour_footer_block_form, 'description_first')->textarea([
                            'value'=>$tour_footer_block->description_first,
                            'style'=>'color:black;font-size:15px',
                            'rows'=>3,
                        ])->label(false)?>
                    </p>

                </div>
                <div>
                    <h1>
                        <?= $form->field($tour_footer_block_form, 'title_second')->textInput([
                            'value'=>$tour_footer_block->title_second,
                            'style'=>'text-align:center;color:black;font-size:25px',
                        ])->label(false)?>
                    </h1>
                    <ul>
                        <li>

                            <?= $form->field($tour_footer_block_form, 'href_link_first')->textInput([
                                'value'=>$tour_footer_block->href_link_first,
                                'style'=>'text-align:center;color:black;font-size:25px',
                            ])->label()?>
                            <?= $form->field($tour_footer_block_form, 'name_link_first')->textInput([
                                    'value'=>$tour_footer_block->name_link_first,
                                    'style'=>'text-align:center;color:black;font-size:25px',
                                ])->label()?>
                        </li>
                        <li>
                            <?= $form->field($tour_footer_block_form, 'href_link_second')->textInput([
                                'value'=>$tour_footer_block->href_link_second,
                                'style'=>'text-align:center;color:black;font-size:25px',
                            ])->label()?>
                            <?= $form->field($tour_footer_block_form, 'name_link_second')->textInput([
                                'value'=>$tour_footer_block->name_link_second,
                                'style'=>'text-align:center;color:black;font-size:25px',
                            ])->label()?>
                        </li>
                        <li>
                            <?= $form->field($tour_footer_block_form, 'href_link_third')->textInput([
                                'value'=>$tour_footer_block->href_link_third,
                                'style'=>'text-align:center;color:black;font-size:25px',
                            ])->label()?>
                            <?= $form->field($tour_footer_block_form, 'name_link_third')->textInput([
                                'value'=>$tour_footer_block->name_link_third,
                                'style'=>'text-align:center;color:black;font-size:25px',
                            ])->label()?>
                        </li>
                        <li>
                            <?= $form->field($tour_footer_block_form, 'href_link_four')->textInput([
                                'value'=>$tour_footer_block->href_link_four,
                                'style'=>'text-align:center;color:black;font-size:25px',
                            ])->label()?>
                            <?= $form->field($tour_footer_block_form, 'name_link_four')->textInput([
                                'value'=>$tour_footer_block->name_link_four,
                                'style'=>'text-align:center;color:black;font-size:25px',
                            ])->label()?>
                        </li>
                    </ul>
                </div>
                <div>
                    <h1>
                        <?= $form->field($tour_footer_block_form, 'title_third')->textInput([
                            'value'=>$tour_footer_block->title_third,
                            'style'=>'text-align:center;color:black;font-size:25px',
                        ])->label(false)?>
                    </h1>
                    <p>
                        <?= $form->field($tour_footer_block_form, 'description_third')->textarea([
                            'value'=>$tour_footer_block->description_third,
                            'style'=>'color:black;font-size:15px',
                            'rows'=>5,
                        ])->label(false)?>
                    </p>
                    <a href="#">
                        <?= $form->field($tour_footer_block_form, 'link_footer')->textInput([
                            'value'=>$tour_footer_block->link_footer,
                            'style'=>'text-align:center;color:black;font-size:20px',
                        ])->label(false)?>
                    </a> </div>
            </div>
        </div>
<?=Html::submitButton('Сохранить изменения', ['class'=>'btn btn-success'])?>
<?php ActiveForm::end();?>
<!--конец блока Футер-->

        <div class="alert alert-success message-success">
            Изменения сохранены успешно!
        </div>

        <div class="alert alert-danger message-danger">
            Изменения не со хранены, что-то пошло не так!
        </div>