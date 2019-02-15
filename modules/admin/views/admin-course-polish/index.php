<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Admin|Edit'

?>
<header role="banner" id="fh5co-header">
    <div class="fluid-container hidden">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                <a class="navbar-brand" href="index.html"><img src="/images/logo_bell.png"></a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#" data-nav-section="home"><span>Головна | Главная</span></a></li>
                    <li><a href="#" data-nav-section="explore"><span>Переваги | Преймущества</span></a></li>
                    <li><a href="#" data-nav-section="testimony"><span>Відгуки | Отзывы</span></a></li>
                    <li><a href="#" data-nav-section="pricing"><span>Ціни | Цены</span></a></li>
                    <li><a href="#" data-nav-section="team"><span>Наші спеціолісти | Наши специолисты</span></a></li>
                </ul>

            </div>

        </nav>

    </div>
    <div class="drop hidden-xs">
        <button class="dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?=$drop?>
            <span class="caret"></span></button>
        <ul class="dropdown-menu" style="margin-left: -50px;">

            <li><?= Html::a('Днепр', ['admin-course-polish/index?reg=dp']) ?></li>
            <li><?= Html::a('Киев', ['admin-course-polish/index?reg=ky']) ?></li>
            <li><?= Html::a('Харьков', ['admin-course-polish/index?reg=kh']) ?></li>
            <li><?= Html::a('Винница', ['admin-course-polish/index?reg=vn']) ?></li>
            <li><?= Html::a('Кропивницкий', ['admin-course-polish/index?reg=kv']) ?></li>
            <li><?= Html::a('Кременчук', ['admin-course-polish/index?reg=km']) ?></li>
            <li><?= Html::a('Измаил', ['admin-course-polish/index?reg=iz']) ?></li>
            <li><?= Html::a('Одесса', ['admin-course-polish/index?reg=od']) ?></li>
            <li><?= Html::a('Белая Церковь', ['admin-course-polish/index?reg=bc']) ?></li>
            <li><?= Html::a('Славянск', ['admin-course-polish/index?reg=sl']) ?></li>
        </ul>
    </div>
</header>


<!--###############################################-->
<!--#################### HOME #####################-->
<?php $form = ActiveForm::begin(['id'=>'HomeForm'])?>
<?=$form->field($homeForm,'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<section id="fh5co-home" data-section="home">
    <div class="gradient"></div>
    <div class="container">
        <div class="row">
            <div class="row hidden">
                <div class="col-md-6 home-first-text-block pull-left">
                    <p>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#header-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#header-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="header-title-uk" class="tab-pane fade in active">
                            <?=$form->field($homeForm,'header_title_1_uk')->textarea([
                                'value'=>$home->header_title_1_uk,
                                'class'=>'textarea',
                                'rows'=>5,
                                'cols'=>10
                            ])->label(false)?>
                        </div>
                        <div id="header-title-ru" class="tab-pane fade">
                            <?=$form->field($homeForm,'header_title_1_ru')->textarea([
                                'value'=>$home->header_title_1_ru,
                                'class'=>'textarea',
                                'rows'=>5,
                                'cols'=>10
                            ])->label(false)?>
                        </div>
                    </div>
                    </p>
                </div>

                <div class="col-md-6 home-first-text-block pull-right">
                    <p>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#header-title2-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#header-title2-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="header-title2-uk" class="tab-pane fade in active">
                            <?=$form->field($homeForm,'header_title_2_uk')->textarea([
                                'value'=>$home->header_title_2_uk,
                                'class'=>'textarea',
                                'rows'=>5,
                                'cols'=>10
                            ])->label(false)?>

                        </div>
                        <div id="header-title2-ru" class="tab-pane fade">
                            <?=$form->field($homeForm,'header_title_2_ru')->textarea([
                                'value'=>$home->header_title_2_ru,
                                'class'=>'textarea',
                                'rows'=>5,
                                'cols'=>10
                            ])->label(false)?>

                        </div>
                    </div>
                    </p>
                </div>
            </div>
            <div class="col-md-7 home-content-text-block">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#home-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>

                <div class="tab-content">
                    <div id="home-title-uk" class="tab-pane fade in active">
                        <h1>
                            <?=$form->field($homeForm,'title_uk')->textarea([
                                'value'=>$home->title_uk,
                                'class'=>'textarea',
                                'rows'=>3,
                                'cols'=>10
                            ])->label(false)?>
                        </h1>

                    </div>
                    <div id="home-title-ru" class="tab-pane fade">
                        <h1>
                            <?=$form->field($homeForm,'title_ru')->textarea([
                                'value'=>$home->title_ru,
                                'class'=>'textarea',
                                'rows'=>3,
                                'cols'=>10
                            ])->label(false)?>
                        </h1>

                    </div>
                </div>


                <?php if (isset($listHome)):?>
                    <ul>
                        <?php $count=1;?>
                        <?php foreach ($listHome as $list):?>

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#list-text-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#list-text-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>

                            <div class="tab-content">

                                <div id="list-text-uk<?=$count?>" class="tab-pane fade in active">
                                    <li><i class="icon-check2"></i>
                                        <?=$form->field($homeForm,'listHome['.$list->id.'][text_uk]')->textarea([
                                            'value'=>$list->text_uk,
                                            'class'=>'textarea',
                                            'rows'=>2,
                                            'cols'=>10
                                        ])->label(false)?>
                                    </li>
                                </div>

                                <div id="list-text-ru<?=$count?>" class="tab-pane fade">
                                    <li><i class="icon-check2"></i>
                                        <?=$form->field($homeForm,'listHome['.$list->id.'][text_ru]')->textarea([
                                            'value'=>$list->text_ru,
                                            'class'=>'textarea',
                                            'rows'=>2,
                                            'cols'=>10
                                        ])->label(false)?>
                                    </li>
                                </div>

                            </div>
                        <?php $count++;?>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
            </div>

            <div class="col-md-4 col-md-offset-1 home-content-text-block">
                <div class="form">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#formHome-desc-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#formHome-desc-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="formHome-desc-uk" class="tab-pane fade in active">
                            <p>
                                <?=$form->field($homeForm,'desc_uk')->textarea([
                                    'value'=>$formHome['desc_uk'],
                                    'class'=>'textarea',
                                    'rows'=>3,
                                    'cols'=>10
                                ])->label(false)?>
                            </p>
                        </div>
                        <div id="formHome-desc-ru" class="tab-pane fade">
                            <p>
                                <?=$form->field($homeForm,'desc_ru')->textarea([
                                    'value'=>$formHome['desc_ru'],
                                    'class'=>'textarea',
                                    'rows'=>3,
                                    'cols'=>10
                                ])->label(false)?>
                            </p>
                        </div>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#formHome-header-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#formHome-header-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="formHome-header-uk" class="tab-pane fade in active">
                            <h3>
                                <?=$form->field($homeForm,'header_uk')->textarea([
                                    'value'=>$formHome['header_uk'],
                                    'class'=>'textarea',
                                    'rows'=>3,
                                    'cols'=>10
                                ])->label(false)?>
                            </h3>
                        </div>
                        <div id="formHome-header-ru" class="tab-pane fade">
                            <h3>
                                <?=$form->field($homeForm,'header_ru')->textarea([
                                    'value'=>$formHome['header_ru'],
                                    'class'=>'textarea',
                                    'rows'=>3,
                                    'cols'=>10
                                ])->label(false)?>
                            </h3>
                        </div>
                    </div>
                    <div class="form-group">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#formHome-name_placeholder-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#formHome-name_placeholder-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="formHome-name_placeholder-uk" class="tab-pane fade in active">
                                <p>
                                    <?=$form->field($homeForm,'name_placeholder_uk')->textInput([
                                        'value'=>$formHome['name_placeholder_uk'],
                                    ])->label(false)?>
                                </p>
                            </div>
                            <div id="formHome-name_placeholder-ru" class="tab-pane fade">
                                <p>
                                    <?=$form->field($homeForm,'name_placeholder_ru')->textInput([
                                        'value'=>$formHome['name_placeholder_ru'],
                                    ])->label(false)?>
                               </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#formHome-tell_placeholder-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#formHome-tell_placeholder-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="formHome-tell_placeholder-uk" class="tab-pane fade in active">
                                <p>
                                    <?=$form->field($homeForm,'tell_placeholder_uk')->textInput([
                                        'value'=>$formHome['tell_placeholder_uk'],
                                    ])->label(false)?>
                                </p>
                            </div>
                            <div id="formHome-tell_placeholder-ru" class="tab-pane fade">
                                <p>
                                    <?=$form->field($homeForm,'tell_placeholder_ru')->textInput([
                                        'value'=>$formHome['tell_placeholder_ru'],
                                    ])->label(false)?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#formHome-button_text-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#formHome-button_text-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="formHome-button_text-uk" class="tab-pane fade in active">
                                <p>
                                    <?=$form->field($homeForm,'form_button_text_uk')->textInput([
                                        'value'=>$formHome['button_text_uk'],
                                    ])->label(false)?>
                                </p>
                            </div>
                            <div id="formHome-button_text-ru" class="tab-pane fade">
                                <p>
                                    <?=$form->field($homeForm,'form_button_text_ru')->textInput([
                                        'value'=>$formHome['button_text_ru'],
                                    ])->label(false)?>
                                </p>
                            </div>
                        </div>
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
<!--################# End HOME ###############-->
<!--###################################################-->



<section id="fh5co-explore" data-section="explore">
    <!--###############################################-->
    <!--################# PRIVILEGE ###################-->
    <?php $form = ActiveForm::begin(['id'=>'PrivilegeForm'])?>
    <?=$form->field($privilegeForm,'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
    <div class=" explore-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading text-center">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#privilege-main-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#privilege-main-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>

                <div class="tab-content">
                    <div id="privilege-main-title-uk" class="tab-pane fade in active">

                        <h2 style="text-align: center">
                            <?=$form->field($privilegeForm,'main_title_uk')->textarea([
                                'value'=>$privilege->main_title_uk,
                                'class'=>'textarea text-center',
                                'rows'=>1,
                            ])->label(false)?>
                        </h2>

                    </div>
                    <div id="privilege-main-title-ru" class="tab-pane fade">

                        <h2 class="text-center">
                            <?=$form->field($privilegeForm,'main_title_ru')->textarea([
                                'value'=>$privilege->main_title_ru,
                                'class'=>'textarea text-center',
                                'rows'=>1,
                            ])->label(false)?>
                        </h2>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8 col-md-offset-2 subtext to-animate">

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#privilege-disc-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#privilege-disc-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="privilege-disc-uk" class="tab-pane fade in active">

                                <h3>
                                    <?=$form->field($privilegeForm,'disc_uk')->textarea([
                                        'value'=>$privilege->disc_uk,
                                        'class'=>'textarea text-center',
                                        'rows'=>2,
                                    ])->label(false)?>
                                </h3>


                            </div>
                            <div id="privilege-disc-ru" class="tab-pane fade">

                                <h3>
                                    <?=$form->field($privilegeForm,'disc_ru')->textarea([
                                        'value'=>$privilege->disc_ru,
                                        'class'=>'textarea text-center',
                                        'rows'=>2,
                                    ])->label(false)?>
                                </h3>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-explore">
        <div class="gradient"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 to-animate-2">
                    <div class="mt">

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#privilege-title-list-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#privilege-title-list-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="privilege-title-list-uk" class="tab-pane fade in active">

                                <h3>
                                    <?=$form->field($privilegeForm,'title_list_uk')->textarea([
                                        'value'=>$privilege->title_list_uk,
                                        'class'=>'textarea',
                                        'rows'=>2,
                                    ])->label(false)?>
                                </h3>

                            </div>
                            <div id="privilege-title-list-ru" class="tab-pane fade">

                                <h3>
                                    <?=$form->field($privilegeForm,'title_list_ru')->textarea([
                                        'value'=>$privilege->title_list_ru,
                                        'class'=>'textarea',
                                        'rows'=>2,
                                    ])->label(false)?>
                                </h3>

                            </div>
                        </div>

                        <ul class="list-nav">
                            <?php $count=1?>
                            <?php foreach ($listPrivilege as $list):?>

                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#privilege-list-text-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                    <li><a data-toggle="tab" href="#privilege-list-text-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                </ul>

                                <div class="tab-content">

                                    <div id="privilege-list-text-uk<?=$count?>" class="tab-pane fade in active">
                                        <li><i class="icon-check2"></i>

                                            <?=$form->field($privilegeForm,'listPrivilege['.$list->id.'][text_uk]')->textarea([
                                                'value'=>$list->text_uk,
                                                'class'=>'textarea',
                                                'rows'=>2,
                                            ])->label(false)?>

                                        </li>
                                    </div>

                                    <div id="privilege-list-text-ru<?=$count?>" class="tab-pane fade">
                                        <li><i class="icon-check2"></i>

                                            <?=$form->field($privilegeForm,'listPrivilege['.$list->id.'][text_ru]')->textarea([
                                                'value'=>$list->text_ru,
                                                'class'=>'textarea',
                                                'rows'=>2,
                                            ])->label(false)?>

                                        </li>
                                    </div>

                                </div>

                                <?php $count++?>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 to-animate-2">
                    <img class="img-responsive" src="/images/<?=$privilege->image?>" alt="work">
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container save-container">
        <div class="vertical-line center-block"></div>
        <input type="submit" class="button-save center-block" value="Сохранить">
    </div>
    <?php ActiveForm::end()?>
    <!--################# End PRIVILEGE ###############-->
    <!--###############################################-->

    <!--###############################################-->
    <!--################# ASSURANCE ###################-->
    <?php $form = ActiveForm::begin(['id'=>'AssuranceForm'])?>
    <?=$form->field($assuranceForm,'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
    <div class="fh5co-explore fh5co-explore-bg-color">
        <div class="bg-text">
            <div class="container">
                <div class="col-md-12 section-heading text-center">

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#assurance-main-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#assurance-main-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>

                    <div class="tab-content">

                        <div id="assurance-main-title-uk" class="tab-pane fade in active">

                                <h2 class="to-animate text-center">

                                    <?=$form->field($assuranceForm,'main_title_uk')->textarea([
                                        'value'=>$assurance->main_title_uk,
                                        'class'=>'textarea text-center',
                                        'rows'=>1,
                                    ])->label(false)?>

                                </h2>

                        </div>

                        <div id="assurance-main-title-ru" class="tab-pane fade">

                                <h2 class="to-animate text-center">

                                    <?=$form->field($assuranceForm,'main_title_ru')->textarea([
                                        'value'=>$assurance->main_title_ru,
                                        'class'=>'textarea text-center',
                                        'rows'=>1,
                                    ])->label(false)?>

                                </h2>

                        </div>

                    </div>


                </div>
                <div class="row">
                    <div class="header-block-explore to-animate-3">
                        <div class="col-md-2 col-md-offset-3">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#assurance-disc-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#assurance-disc-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>

                            <div class="tab-content">

                                <div id="assurance-disc-title-uk" class="tab-pane fade in active">

                                    <h3 class="to-animate text-center">

                                        <?=$form->field($assuranceForm,'disc_title_uk')->textarea([
                                            'value'=>$assurance->disc_title_uk,
                                            'class'=>'textarea',
                                            'rows'=>1,
                                        ])->label(false)?>

                                    </h3>

                                </div>

                                <div id="assurance-disc-title-ru" class="tab-pane fade">

                                    <h3 class="to-animate text-center">

                                        <?=$form->field($assuranceForm,'disc_title_ru')->textarea([
                                            'value'=>$assurance->disc_title_ru,
                                            'class'=>'textarea',
                                            'rows'=>1,
                                        ])->label(false)?>

                                    </h3>

                                </div>

                            </div>

                            <img src="/images/icon_3373.png" alt="students" class="">
                        </div>
                        <div class="col-md-5">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#assurance-disc-text-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#assurance-disc-text-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>

                            <div class="tab-content">

                                <div id="assurance-disc-text-uk" class="tab-pane fade in active">

                                    <h3 class="to-animate text-center">

                                        <?=$form->field($assuranceForm,'disc_text_uk')->textarea([
                                            'value'=>$assurance->disc_text_uk,
                                            'class'=>'textarea',
                                            'rows'=>3,
                                        ])->label(false)?>

                                    </h3>

                                </div>

                                <div id="assurance-disc-text-ru" class="tab-pane fade">

                                    <h3 class="to-animate text-center">

                                        <?=$form->field($assuranceForm,'disc_text_ru')->textarea([
                                            'value'=>$assurance->disc_text_ru,
                                            'class'=>'textarea',
                                            'rows'=>3,
                                        ])->label(false)?>

                                    </h3>

                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div class="mt">
                            <?php $count=1?>
                            <?php foreach ($listAssurance as $list):?>
                                <div class="col-md-4 to-animate-3 text-center">
                                    <div class="block-garant center-block">
                                        <div class="text-garant">

                                            <ul class="nav nav-tabs">
                                                <li class="active"><a data-toggle="tab" href="#assurance-list-text-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                                <li><a data-toggle="tab" href="#assurance-list-text-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                            </ul>

                                            <div class="tab-content">

                                                <div id="assurance-list-text-uk<?=$count?>" class="tab-pane fade in active">

                                                        <?=$form->field($assuranceForm,'listAssurance['.$list->id.'][text_uk]')->textarea([
                                                            'value'=>$list->text_uk,
                                                            'class'=>'textarea text-center',
                                                            'rows'=>6
                                                        ])->label(false)?>

                                                </div>

                                                <div id="assurance-list-text-ru<?=$count?>" class="tab-pane fade">

                                                        <?=$form->field($assuranceForm,'listAssurance['.$list->id.'][text_ru]')->textarea([
                                                            'value'=>$list->text_ru,
                                                            'class'=>'textarea text-center',
                                                            'rows'=>5
                                                        ])->label(false)?>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php $count++?>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container save-container">
        <div class="vertical-line center-block"></div>
        <input type="submit" class="button-save center-block" value="Сохранить">
    </div>
    <?php ActiveForm::end()?>
    <!--################# End ASSURANCE ###############-->
    <!--###############################################-->
</section>

<!--###############################################-->
<!--################# GETTING FIRST ###################-->
<?php $form = ActiveForm::begin(['id'=>'GettingFirstForm'])?>
<?=$form->field($gettingFirstForm,'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<div class="getting-started getting-started-1">
    <div class="container">
        <div class="row">
            <div class="col-md-8 to-animate">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#getting-first-disc-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#getting-first-disc-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>

                <div class="tab-content">

                    <div id="getting-first-disc-uk" class="tab-pane fade in active">

                        <h3 class="to-animate text-center">

                            <?=$form->field($gettingFirstForm,'disc_uk')->textarea([
                                'value'=>$gettingFirst->disc_uk,
                                'class'=>'textarea',
                                'rows'=>2,
                            ])->label(false)?>

                        </h3>

                    </div>

                    <div id="getting-first-disc-ru" class="tab-pane fade">

                        <h3 class="to-animate text-center">

                            <?=$form->field($gettingFirstForm,'disc_ru')->textarea([
                                'value'=>$gettingFirst->disc_ru,
                                'class'=>'textarea',
                                'rows'=>2,
                            ])->label(false)?>

                        </h3>

                    </div>

                </div>

            </div>
            <div class="col-md-4 to-animate-2">
                <div class="call-to-action text-right" data-toggle="modal" data-target="#recordForm">

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#getting-first-button-text-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#getting-first-button-text-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>

                    <div class="tab-content">

                        <div id="getting-first-button-text-uk" class="tab-pane fade in active">

                                <a class="sign-up">
                                    <?=$form->field($gettingFirstForm,'button_text_uk')->textarea([
                                        'value'=>$gettingFirst->button_text_uk,
                                        'class'=>'textarea',
                                        'rows'=>1,
                                    ])->label(false)?>
                                </a>

                        </div>

                        <div id="getting-first-button-text-ru" class="tab-pane fade">

                                <a class="sign-up">
                                    <?=$form->field($gettingFirstForm,'button_text_ru')->textarea([
                                        'value'=>$gettingFirst->button_text_ru,
                                        'class'=>'textarea',
                                        'rows'=>1,
                                    ])->label(false)?>
                                </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!--################# End GETTING FIRST ###############-->
<!--###################################################-->


<!--###################################################-->
<!--################# GETTING SECOND ##################-->
<?php $form = ActiveForm::begin(['id'=>'GettingSecondForm'])?>
<?= $form->field($gettingSecondForm,'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<div class="getting-started getting-started-1 block-with-clock">
    <div class="container">
        <div class="row">
            <div class="col-md-6 to-animate text-center">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#getting-second-timer-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#getting-second-timer-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>

                <div class="tab-content">

                    <div id="getting-second-timer-title-uk" class="tab-pane fade in active">

                        <h3>

                            <?=$form->field($gettingSecondForm,'timer_title_uk')->textarea([
                                'value'=>$gettingSecond->timer_title_uk,
                                'class'=>'textarea',
                                'rows'=>1,
                            ])->label(false)?>

                        </h3>

                    </div>

                    <div id="getting-second-timer-title-ru" class="tab-pane fade">

                        <h3>

                            <?=$form->field($gettingSecondForm,'timer_title_ru')->textarea([
                                'value'=>$gettingSecond->timer_title_ru,
                                'class'=>'textarea',
                                'rows'=>1,
                            ])->label(false)?>

                        </h3>

                    </div>

                </div>

                <div id="CDT"></div>

            </div>
            <div class="col-md-6 to-animate-2">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#getting-second-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#getting-second-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>

                <div class="tab-content">

                    <div id="getting-second-title-uk" class="tab-pane fade in active">

                        <h3>

                            <?=$form->field($gettingSecondForm,'title_uk')->textarea([
                                'value'=>$gettingSecond->title_uk,
                                'class'=>'textarea',
                                'rows'=>3,
                            ])->label(false)?>

                        </h3>

                    </div>

                    <div id="getting-second-title-ru" class="tab-pane fade">

                        <h3>

                            <?=$form->field($gettingSecondForm,'title_ru')->textarea([
                                'value'=>$gettingSecond->title_ru,
                                'class'=>'textarea',
                                'rows'=>3,
                            ])->label(false)?>

                        </h3>

                    </div>

                </div>



                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#getting-second-disc-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#getting-second-disc-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>

                <div class="tab-content">

                    <div id="getting-second-disc-uk" class="tab-pane fade in active">

                        <div class="disc">

                            <?=$form->field($gettingSecondForm,'disc_uk')->textarea([
                                'value'=>$gettingSecond->disc_uk,
                                'class'=>'textarea',
                                'rows'=>2,
                            ])->label(false)?>

                        </div>

                    </div>

                    <div id="getting-second-disc-ru" class="tab-pane fade">

                        <div class="disc">

                            <?=$form->field($gettingSecondForm,'disc_ru')->textarea([
                                'value'=>$gettingSecond->disc_ru,
                                'class'=>'textarea',
                                'rows'=>2,
                            ])->label(false)?>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!--################# End GETTING SECOND ##############-->
<!--###################################################-->


<!--###################################################-->
<!--##################### TARIFFS #####################-->
<?php $form = ActiveForm::begin(['id'=>'TariffsForm'])?>
<?= $form->field($tariffsForm,'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<section id="fh5co-pricing" data-section="pricing">
    <div class="fh5co-pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tariffs-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#tariffs-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tariffs-title-uk" class="tab-pane fade in active">
                            <h2 class="to-animate">
                                <?=$form->field($tariffsForm,'title_uk')->textarea([
                                    'value'=>$tariffs->title_uk,
                                    'class'=>'textarea text-center',
                                    'rows'=>1,
                                ])->label(false)?>
                            </h2>
                        </div>
                        <div id="tariffs-title-ru" class="tab-pane fade">
                            <h2 class="to-animate">
                                <?=$form->field($tariffsForm,'title_ru')->textarea([
                                    'value'=>$tariffs->title_ru,
                                    'class'=>'textarea text-center',
                                    'rows'=>1,
                                ])->label(false)?>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tariffs-disc-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#tariffs-disc-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tariffs-disc-uk" class="tab-pane fade in active">
                                    <h3 class="to-animate">
                                        <?=$form->field($tariffsForm,'disc_uk')->textarea([
                                            'value'=>$tariffs->disc_uk,
                                            'class'=>'textarea text-center',
                                            'rows'=>2,
                                        ])->label(false)?>
                                    </h3>
                                </div>
                                <div id="tariffs-disc-ru" class="tab-pane fade">
                                    <h3 class="to-animate">
                                        <?=$form->field($tariffsForm,'disc_ru')->textarea([
                                            'value'=>$tariffs->disc_ru,
                                            'class'=>'textarea text-center',
                                            'rows'=>2,
                                        ])->label(false)?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="pricing">
                    <?php $count =1?>
                    <?php $countListList = 100?>
                    <?php foreach ($listTariffs as $list):?>
                        <div class="col-md-4">
                            <div class="price-box to-animate-2 popular">

                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#list-title-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                    <li><a data-toggle="tab" href="#list-title-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                </ul>

                                <div class="tab-content">

                                    <div id="list-title-uk<?=$count?>" class="tab-pane fade in active">

                                        <h2 class="pricing-plan pricing-plan-offer">

                                            <?=$form->field($tariffsForm,'listTariffs['.$list->id.'][title_uk]')->textarea([
                                                'value'=>$list->title_uk,
                                                'class'=>'textarea',
                                                'rows'=>1,
                                            ])->label(false)?>

                                        </h2>

                                    </div>

                                    <div id="list-title-ru<?=$count?>" class="tab-pane fade">
                                        <h2 class="pricing-plan pricing-plan-offer">
                                            <?=$form->field($tariffsForm,'listTariffs['.$list->id.'][title_ru]')->textarea([
                                                'value'=>$list->title_ru,
                                                'class'=>'textarea',
                                                'rows'=>1,
                                            ])->label(false)?>
                                        </h2>

                                    </div>

                                </div>
                                <div class="price">

                                    <?=$form->field($tariffsForm,'listTariffs['.$list->id.'][cost]')->textarea([
                                        'value'=>$list->cost,
                                        'class'=>'textarea form-inline',
                                        'rows'=>2,
                                    ])->label(false)?>

                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#list-period-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                        <li><a data-toggle="tab" href="#list-period-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                    </ul>

                                    <div class="tab-content">

                                        <div id="list-period-uk<?=$count?>" class="tab-pane fade in active">

                                            <small>

                                                <?=$form->field($tariffsForm,'listTariffs['.$list->id.'][period_uk]')->textarea([
                                                    'value'=>$list->period_uk,
                                                    'class'=>'textarea',
                                                    'rows'=>1,
                                                ])->label(false)?>
                                            </small>

                                        </div>

                                        <div id="list-period-ru<?=$count?>" class="tab-pane fade">

                                            <small>
                                                <?=$form->field($tariffsForm,'listTariffs['.$list->id.'][period_ru]')->textarea([
                                                    'value'=>$list->period_ru,
                                                    'class'=>'textarea',
                                                    'rows'=>1,
                                                ])->label(false)?>
                                            </small>
                                        </div>

                                    </div>
                                </div>
                                <ul>

                                    <?php foreach ($lisListTariffs[$list->id] as $listList):?>

                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#listList-text-uk<?=$countListList?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                            <li><a data-toggle="tab" href="#listList-text-ru<?=$countListList?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                        </ul>

                                        <div class="tab-content">

                                            <div id="listList-text-uk<?=$countListList?>" class="tab-pane fade in active">

                                             <li>
                                                 <div class="list-list-price">
                                                     <?=$form->field($tariffsForm,'listListTariffs['.$listList->id.'][text_uk]')->textarea([
                                                         'value'=>$listList->text_uk,
                                                         'class'=>'textarea',
                                                         'rows'=>2,
                                                     ])->label(false)?>
                                                 </div>
                                             </li>

                                            </div>

                                            <div id="listList-text-ru<?=$countListList?>" class="tab-pane fade">

                                                <li>
                                                    <div class="list-list-price">
                                                        <?=$form->field($tariffsForm,'listListTariffs['.$listList->id.'][text_ru]')->textarea([
                                                            'value'=>$listList->text_ru,
                                                            'class'=>'textarea',
                                                            'rows'=>2,
                                                        ])->label(false)?>
                                                    </div>
                                                </li>

                                            </div>

                                        </div>

                                    <?php $countListList++?>
                                    <?php endforeach;?>

                                </ul>
                            </div>
                        </div>
                    <?php $count++?>
                    <?php endforeach;?>
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
<!--##################### End TARIFFS #################-->
<!--###################################################-->

<!--###################################################-->
<!--################# GETTING THIRD ###################-->
<?php $form = ActiveForm::begin(['id'=>'GettingThirdForm'])?>
<?= $form->field($gettingThirdForm,'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<div class="getting-started getting-started-2">
    <div class="container">
        <div class="row">
            <div class="to-animate">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#getting-third-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#getting-third-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>

                <div class="tab-content">

                    <div id="getting-third-title-uk" class="tab-pane fade in active">



                            <h3 class="text-center">
                                <?=$form->field($gettingThirdForm,'title_uk')->textarea([
                                    'value'=>$gettingThird->title_uk,
                                    'class'=>'textarea text-center',
                                    'rows'=>1,
                                ])->label(false)?>
                            </h3>



                    </div>

                    <div id="getting-third-title-ru" class="tab-pane fade">



                            <h3 class="text-center">
                                <?=$form->field($gettingThirdForm,'title_ru')->textarea([
                                    'value'=>$gettingThird->title_ru,
                                    'class'=>'textarea text-center',
                                    'rows'=>1,
                                ])->label(false)?>
                            </h3>


                    </div>

                </div>

                <?php $count=1?>
                <?php foreach ($listGettingThird as $list):?>
                    <div class="col-md-2 text-center">
                        <div class="col-md-9">
                            <img src="/images/<?=$list->image?>" class="img-responsive" alt="images">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#getting-third-list-text-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#getting-third-list-text-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>

                            <div class="tab-content">

                                <div id="getting-third-list-text-uk<?=$count?>" class="tab-pane fade in active">



                                      <div class="disc">
                                          <?=$form->field($gettingThirdForm,'listGettingThird['.$list->id.'][text_uk]')->textarea([
                                              'value'=>$list->text_uk,
                                              'class'=>'textarea text-center',
                                              'rows'=>6,
                                          ])->label(false)?>
                                      </div>



                                </div>

                                <div id="getting-third-list-text-ru<?=$count?>" class="tab-pane fade">



                                        <div class="disc">
                                            <?=$form->field($gettingThirdForm,'listGettingThird['.$list->id.'][text_ru]')->textarea([
                                                'value'=>$list->text_ru,
                                                'class'=>'textarea text-center',
                                                'rows'=>6,
                                            ])->label(false)?>
                                        </div>


                                </div>

                            </div>

                        </div>
                        <div class="col-md-3">
                            <img src="/images/<?=$list->isLast==1?'micr.png':'red-plus-md.png'?>" alt="plus">
                        </div>
                    </div>
                <?php $count++?>
                <?php endforeach;?>

                <div class="col-md-2 text-center">

                    <h3>
                        <?=$form->field($gettingThirdForm,'cost')->textarea([
                            'class'=>'textarea text-center',
                            'value'=>$gettingThird->cost,
                            'rows'=>1,
                        ])->label(false)?>грн


                    </h3>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!--################# End GETTING THIRD ##############-->
<!--###################################################-->

<!--###################################################-->
<!--#################### SERVICES #####################-->
<?$form = ActiveForm::begin(['id'=>'ServicesForm'])?>
<?=$form->field($servicesForm,'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<section id="fh5co-services" data-section="services" class="hidden-xs">
    <div class="fh5co-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#services-header-title-ua"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#services-header-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>

                    <div class="tab-content">

                        <div id="services-header-title-ua" class="tab-pane fade in active">



                            <h2 class="to-animate">
                                    <?=$form->field($servicesForm,'header_title_ua')->textarea([
                                        'value'=>$services->header_title_ua,
                                        'class'=>'textarea text-center',
                                        'rows'=>1,
                                    ])->label(false)?>
                            </h2>



                        </div>

                        <div id="services-header-title-ru" class="tab-pane fade">


                            <h2 class="to-animate">
                                    <?=$form->field($servicesForm,'header_title_ru')->textarea([
                                        'value'=>$services->header_title_ru,
                                        'class'=>'textarea text-center',
                                        'rows'=>1,
                                    ])->label(false)?>
                            </h2>



                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#services-disc-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#services-disc-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>

                            <div class="tab-content">

                                <div id="services-disc-uk" class="tab-pane fade in active">



                                    <h3 class="to-animate">
                                        <?=$form->field($servicesForm,'disc_uk')->textarea([
                                            'value'=>$services->disc_uk,
                                            'class'=>'textarea text-center',
                                            'rows'=>2,
                                        ])->label(false)?>
                                    </h3>



                                </div>

                                <div id="services-disc-ru" class="tab-pane fade">


                                    <h3 class="to-animate">
                                        <?=$form->field($servicesForm,'disc_ru')->textarea([
                                            'value'=>$services->disc_ru,
                                            'class'=>'textarea text-center',
                                            'rows'=>2,
                                        ])->label(false)?>
                                    </h3>



                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $count=1?>
                <?php foreach ($listServices as $list):?>
                    <div class="col-md-4">
                        <div class="box-services">
                            <i class="<?=$list->image?> to-animate-2"></i>
                            <div class="fh5co-post to-animate">

                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#list-block-title-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                    <li><a data-toggle="tab" href="#list-block-title-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                </ul>

                                <div class="tab-content">

                                    <div id="list-block-title-uk<?=$count?>" class="tab-pane fade in active">



                                        <h3>
                                            <?=$form->field($servicesForm,'listServices['.$list->id.'][block_title_uk]')->textarea([
                                                'value'=>$list->block_title_uk,
                                                'class'=>'textarea',
                                                'rows'=>1,
                                            ])->label(false)?>
                                        </h3>



                                    </div>

                                    <div id="list-block-title-ru<?=$count?>" class="tab-pane fade">


                                        <h3>
                                            <?=$form->field($servicesForm,'listServices['.$list->id.'][block_title_ru]')->textarea([
                                                'value'=>$list->block_title_ru,
                                                'class'=>'textarea',
                                                'rows'=>1,
                                            ])->label(false)?>
                                        </h3>



                                    </div>

                                </div>

                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#services-list-text-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                    <li><a data-toggle="tab" href="#services-list-text-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                </ul>

                                <div class="tab-content">

                                    <div id="services-list-text-uk<?=$count?>" class="tab-pane fade in active">



                                        <div class="disc-services">
                                            <?=$form->field($servicesForm,'listServices['.$list->id.'][text_uk]')->textarea([
                                                'value'=>$list->text_uk,
                                                'class'=>'textarea',
                                                'rows'=>5,
                                            ])->label(false)?>
                                        </div>



                                    </div>

                                    <div id="services-list-text-ru<?=$count?>" class="tab-pane fade">


                                        <div class="disc-services">
                                            <?=$form->field($servicesForm,'listServices['.$list->id.'][text_ru]')->textarea([
                                                'value'=>$list->text_ru,
                                                'class'=>'textarea',
                                                'rows'=>5,
                                            ])->label(false)?>
                                        </div>



                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                <?php $count++?>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!--################### End SERVICES ##################-->
<!--###################################################-->

<!--###################################################-->
<!--################# GETTING FOURTH ###################-->
<?php $form = ActiveForm::begin(['id'=>'GettingFourthForm'])?>
<?= $form->field($gettingFourthForm, 'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<div class="getting-started getting-started-1">
    <div class="container">
        <div class="row">
            <div class="col-md-8 to-animate">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#getting-fourth-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#getting-fourth-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>
                <div class="tab-content">
                    <div id="getting-fourth-title-uk" class="tab-pane fade in active">
                        <h3 class="to-animate">
                            <?=$form->field($gettingFourthForm,'title_uk')->textarea([
                                'value'=>$gettingFourth->title_uk,
                                'class'=>'textarea',
                                'rows'=>1,
                            ])->label(false)?>
                        </h3>
                    </div>
                    <div id="getting-fourth-title-ru" class="tab-pane fade">
                        <h3 class="to-animate">
                            <?=$form->field($gettingFourthForm,'title_ru')->textarea([
                                'value'=>$gettingFourth->title_ru,
                                'class'=>'textarea',
                                'rows'=>1,
                            ])->label(false)?>
                        </h3>
                    </div>
                </div>

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#getting-fourth-disc-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#getting-fourth-disc-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>

                <div class="tab-content">

                    <div id="getting-fourth-disc-uk" class="tab-pane fade in active">



                        <div class="to-animate disc">
                            <?=$form->field($gettingFourthForm,'disc_uk')->textarea([
                                'value'=>$gettingFourth->disc_uk,
                                'class'=>'textarea',
                                'rows'=>1,
                            ])->label(false)?>
                        </div>



                    </div>

                    <div id="getting-fourth-disc-ru" class="tab-pane fade">


                        <div class="to-animate disc">
                            <?=$form->field($gettingFourthForm,'disc_ru')->textarea([
                                'value'=>$gettingFourth->disc_ru,
                                'class'=>'textarea',
                                'rows'=>1,
                            ])->label(false)?>
                        </div>



                    </div>

                </div>

            </div>
            <div class="col-md-4 to-animate-2">
                <div class="call-to-action text-right">



                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#getting-fourth-button-text-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                            <li><a data-toggle="tab" href="#getting-fourth-button-text-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                        </ul>

                        <div class="tab-content">

                            <div id="getting-fourth-button-text-uk" class="tab-pane fade in active">


                                <a  class="sign-up">

                                    <?=$form->field($gettingFourthForm,'button_text_uk')->textarea([
                                        'value'=>$gettingFourth->button_text_uk,
                                        'class'=>'textarea',
                                        'rows'=>2,
                                    ])->label(false)?>

                                </a>


                            </div>

                            <div id="getting-fourth-button-text-ru" class="tab-pane fade">

                                <a class="sign-up">

                                    <?=$form->field($gettingFourthForm,'button_text_ru')->textarea([
                                        'value'=>$gettingFourth->button_text_ru,
                                        'class'=>'textarea',
                                        'rows'=>2,
                                    ])->label(false)?>

                                </a>

                            </div>

                        </div>




                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<!--############### End GETTING FOURTH ################-->
<!--###################################################-->
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>

<!--###################################################-->
<!--###################### TEAM #######################-->
<?php $form = ActiveForm::begin(['id'=>'TeamForm'])?>
<?=$form->field($teamForm,'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<section id="fh5co-team" data-section="team">
    <div class="fh5co-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#team-header-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#team-header-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="team-header-title-uk" class="tab-pane fade in active">
                            <h2 >
                                <?=$form->field($teamForm,'header_title_uk')->textarea([
                                    'value'=>$team->header_title_uk,
                                    'class'=>'textarea text-center',
                                    'rows'=>1,
                                ])->label(false)?>
                            </h2>
                        </div>
                        <div id="team-header-title-ru" class="tab-pane fade">
                            <h2>
                                <?=$form->field($teamForm,'header_title_ru')->textarea([
                                    'value'=>$team->header_title_ru,
                                    'class'=>'textarea text-center',
                                    'rows'=>1,
                                ])->label(false)?>
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#team-disc-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#team-disc-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="team-disc-uk" class="tab-pane fade in active">
                                    <h3>
                                        <?=$form->field($teamForm,'disc_uk')->textarea([
                                            'value'=>$team->disc_uk,
                                            'class'=>'textarea text-center',
                                            'rows'=>2,
                                        ])->label(false)?>
                                    </h3>
                                </div>
                                <div id="team-disc-ru" class="tab-pane fade">
                                    <h3>
                                        <?=$form->field($teamForm,'disc_ru')->textarea([
                                            'value'=>$team->disc_ru,
                                            'class'=>'textarea text-center',
                                            'rows'=>2,
                                        ])->label(false)?>
                                    </h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $count=1?>
                <?php foreach ($listTeam as $list):?>
                    <div class="col-md-3">
                        <div class="team-box text-center to-animate-2">
                            <div class="user"><img class="img-reponsive" src="/images/<?=$list->image?>" alt="image<?=$count?>"></div>

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#team-list-full-name-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#team-list-full-name-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="team-list-full-name-uk<?=$count?>" class="tab-pane fade in active">
                                    <h3 >
                                        <?=$form->field($teamForm,'listTeam['.$list->id.'][full_name_uk]')->textarea([
                                            'value'=>$list->full_name_uk,
                                            'class'=>'textarea text-center',
                                            'rows'=>2,
                                        ])->label(false)?>
                                    </h3>
                                </div>
                                <div id="team-list-full-name-ru<?=$count?>" class="tab-pane fade">
                                    <h3>
                                        <?=$form->field($teamForm,'listTeam['.$list->id.'][full_name_ru]')->textarea([
                                            'value'=>$list->full_name_ru,
                                            'class'=>'textarea text-center',
                                            'rows'=>2,
                                        ])->label(false)?>
                                    </h3>
                                </div>
                            </div>

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#team-list-post-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#team-list-post-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="team-list-post-uk<?=$count?>" class="tab-pane fade in active">
                                    <span class="position">
                                        <?=$form->field($teamForm,'listTeam['.$list->id.'][post_uk]')->textarea([
                                            'value'=>$list->post_uk,
                                            'class'=>'textarea text-center',
                                            'rows'=>2,
                                        ])->label(false)?>
                                    </span>
                                </div>
                                <div id="team-list-post-ru<?=$count?>" class="tab-pane fade">
                                    <span class="position">
                                        <?=$form->field($teamForm,'listTeam['.$list->id.'][post_ru]')->textarea([
                                            'value'=>$list->post_ru,
                                            'class'=>'textarea text-center',
                                            'rows'=>2,
                                        ])->label(false)?>
                                    </span>
                                </div>
                            </div>

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#team-list-text-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#team-list-text-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="team-list-text-uk<?=$count?>" class="tab-pane fade in active">
                                    <div class="disc-team">
                                        <?=$form->field($teamForm,'listTeam['.$list->id.'][text_uk]')->textarea([
                                            'value'=>$list->text_uk,
                                            'class'=>'textarea text-center',
                                            'rows'=>10,
                                        ])->label(false)?>
                                    </div>
                                </div>
                                <div id="team-list-text-ru<?=$count?>" class="tab-pane fade">
                                    <div class="disc-team">
                                        <?=$form->field($teamForm,'listTeam['.$list->id.'][text_ru]')->textarea([
                                            'value'=>$list->text_ru,
                                            'class'=>'textarea text-center',
                                            'rows'=>10,
                                        ])->label(false)?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $count++?>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!--#################### End TEAM #####################-->
<!--###################################################-->

<!--###################################################-->
<!--#################### QUESTIONS ####################-->
<?php $form = ActiveForm::begin(['id'=>'QuestionForm'])?>
<?=$form->field($questionForm,'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<section id="fh5co-faq" data-section="faq" class="hidden-xs">
    <div class="fh5co-faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#question-header-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#question-header-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="question-header-title-uk" class="tab-pane fade in active">
                            <h2>
                                <?=$form->field($questionForm,'header_title_uk')->textarea([
                                    'value'=>$question->header_title_uk,
                                    'class'=>'textarea text-center',
                                    'rows'=>1,
                                ])->label(false)?>
                            </h2>
                        </div>
                        <div id="question-header-title-ru" class="tab-pane fade">
                            <h2>
                                <?=$form->field($questionForm,'header_title_ru')->textarea([
                                    'value'=>$question->header_title_ru,
                                    'class'=>'textarea text-center',
                                    'rows'=>1,
                                ])->label(false)?>
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#question-disc-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#question-disc-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="question-disc-uk" class="tab-pane fade in active">
                                    <h3>
                                        <?=$form->field($questionForm,'disc_uk')->textarea([
                                            'value'=>$question->disc_uk,
                                            'class'=>'textarea text-center',
                                            'rows'=>1,
                                        ])->label(false)?>
                                    </h3>
                                </div>
                                <div id="question-disc-ru" class="tab-pane fade">
                                    <h3>
                                        <?=$form->field($questionForm,'disc_ru')->textarea([
                                            'value'=>$question->disc_ru,
                                            'class'=>'textarea text-center',
                                            'rows'=>1,
                                        ])->label(false)?>
                                    </h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $count = 1?>
                <?php $countListList = 1?>
                <?php foreach ($listQuestion as $list):?>
                    <div class="col-md-6">
                        <div class="box-faq to-animate-2">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#question-list-title-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                <li><a data-toggle="tab" href="#question-list-title-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="question-list-title-uk<?=$count?>" class="tab-pane fade in active">
                                    <h3>
                                        <?=$form->field($questionForm,'listQuestion['.$list->id.'][title_uk]')->textarea([
                                            'value'=>$list->title_uk,
                                            'class'=>'textarea text-center',
                                            'rows'=>1,
                                        ])->label(false)?>
                                    </h3>
                                </div>
                                <div id="question-list-title-ru<?=$count?>" class="tab-pane fade">
                                    <h3>
                                        <?=$form->field($questionForm,'listQuestion['.$list->id.'][title_ru]')->textarea([
                                            'value'=>$list->title_ru,
                                            'class'=>'textarea text-center',
                                            'rows'=>1,
                                        ])->label(false)?>
                                    </h3>
                                </div>
                            </div>

                            <ul>
                                <?php foreach ($lisListQuestion[$list->id] as $listList):?>

                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#question-list-list-text-uk<?=$countListList?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                        <li><a data-toggle="tab" href="#question-list-list-text-ru<?=$countListList?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="question-list-list-text-uk<?=$countListList?>" class="tab-pane fade in active">
                                            <li>
                                                <?=$form->field($questionForm,'listListQuestion['.$listList->id.'][text_uk]')->textarea([
                                                    'value'=>$listList->text_uk,
                                                    'class'=>'textarea',
                                                    'rows'=>1,
                                                ])->label(false)?>
                                            </li>
                                        </div>
                                        <div id="question-list-list-text-ru<?=$countListList?>" class="tab-pane fade">
                                            <li>
                                                <?=$form->field($questionForm,'listListQuestion['.$listList->id.'][text_ru]')->textarea([
                                                    'value'=>$listList->text_ru,
                                                    'class'=>'textarea',
                                                    'rows'=>1,
                                                ])->label(false)?>
                                            </li>
                                        </div>
                                    </div>

                                <?php $countListList++?>
                                <?php endforeach;?>

                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#question-list-button-text-uk<?=$count?>"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                                    <li><a data-toggle="tab" href="#question-list-button-text-ru<?=$count?>"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="question-list-button-text-uk<?=$count?>" class="tab-pane fade in active">
                                        <li class="call-to-action">
                                            <a>
                                            <?=$form->field($questionForm,'listQuestion['.$list->id.'][button_text_uk]')->textarea([
                                                'value'=>$list->button_text_uk,
                                                'class'=>'textarea text-center',
                                                'rows'=>1,
                                            ])->label(false)?>
                                            </a>
                                        </li>
                                    </div>
                                    <div id="question-list-button-text-ru<?=$count?>" class="tab-pane fade">
                                        <li class="call-to-action">
                                            <a>
                                            <?=$form->field($questionForm,'listQuestion['.$list->id.'][button_text_ru]')->textarea([
                                                'value'=>$list->button_text_ru,
                                                'class'=>'textarea text-center',
                                                'rows'=>1,
                                            ])->label(false)?>
                                            </a>
                                        </li>
                                    </div>
                                </div>

                            </ul>
                        </div>
                    </div>
                <?php $count++?>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!--###################################################-->
<!--################## END QUESTIONS ##################-->

<!--###################################################-->
<!--################# GETTING FIFTH ###################-->
<?php $form = ActiveForm::begin(['id'=>'GettingFifthForm'])?>
<?=$form->field($gettingFifthForm,'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<div class="getting-started getting-started-1">
    <div class="container">
        <div class="row">
            <div class="col-md-8 to-animate">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#getting-fifth-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#getting-fifth-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>
                <div class="tab-content">
                    <div id="getting-fifth-title-uk" class="tab-pane fade in active">
                        <h3>
                            <?=$form->field($gettingFifthForm,'title_uk')->textarea([
                                'value'=>$gettingFifth->title_uk,
                                'class'=>'textarea',
                                'rows'=>1,
                            ])->label(false)?>
                        </h3>
                    </div>
                    <div id="getting-fifth-title-ru" class="tab-pane fade">
                        <h3>
                            <?=$form->field($gettingFifthForm,'title_ru')->textarea([
                                'value'=>$gettingFifth->title_ru,
                                'class'=>'textarea',
                                'rows'=>1,
                            ])->label(false)?>
                        </h3>
                    </div>
                </div>

            </div>

            <div class="col-md-4 to-animate-2" data-toggle="modal" data-target="#askQuestionForm">
                <div class="call-to-action text-right cell-to-get">

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#getting-fifth-button-text-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#getting-fifth-button-text-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="getting-fifth-button-text-uk" class="tab-pane fade in active">
                            <a class="sign-up">
                                <?=$form->field($gettingFifthForm,'button_text_uk')->textarea([
                                    'value'=>$gettingFifth->button_text_uk,
                                    'class'=>'textarea',
                                    'rows'=>1,
                                ])->label(false)?>
                            </a>
                        </div>
                        <div id="getting-fifth-button-text-ru" class="tab-pane fade">
                            <a class="sign-up">
                                <?=$form->field($gettingFifthForm,'button_text_ru')->textarea([
                                    'value'=>$gettingFifth->button_text_ru,
                                    'class'=>'textarea',
                                    'rows'=>1,
                                ])->label(false)?>
                            </a>
                        </div>
                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!--############### End GETTING FIFTH ################-->
<!--###################################################-->

<!--###################################################-->
<!--#################### FOOTER #######################-->
<?php $form = ActiveForm::begin(['id'=>'FooterForm'])?>
<?=$form->field($footerForm,'reg')->textInput(['value'=>$reg,'class'=>'hidden'])->label(false)?>
<div id="fh5co-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-6 to-animate">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#footer-aboutus-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#footer-aboutus-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>
                <div class="tab-content">
                    <div id="footer-aboutus-title-uk" class="tab-pane fade in active">
                        <h3 class="section-title">
                            <?=$form->field($footerForm,'aboutus_title_uk')->textarea([
                                'value'=>$footer->aboutus_title_uk,
                                'class'=>'textarea',
                                'rows'=>1,
                            ])->label(false)?>
                        </h3>
                    </div>
                    <div id="footer-aboutus-title-ru" class="tab-pane fade">
                        <h3 class="section-title">
                            <?=$form->field($footerForm,'aboutus_title_ru')->textarea([
                                'value'=>$footer->aboutus_title_ru,
                                'class'=>'textarea',
                                'rows'=>1,
                            ])->label(false)?>
                        </h3>
                    </div>
                </div>

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#footer-about-text-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#footer-about-text-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>
                <div class="tab-content">
                    <div id="footer-about-text-uk" class="tab-pane fade in active">
                        <div class="footer-text">
                            <?=$form->field($footerForm,'about_text_uk')->textarea([
                                'value'=>$footer->about_text_uk,
                                'class'=>'textarea',
                                'rows'=>2,
                            ])->label(false)?>
                        </div>
                    </div>
                    <div id="footer-about-text-ru" class="tab-pane fade">
                        <div class="footer-text">
                            <?=$form->field($footerForm,'about_text_ru')->textarea([
                                'value'=>$footer->about_text_ru,
                                'class'=>'textarea',
                                'rows'=>2,
                            ])->label(false)?>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#footer-copyright-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#footer-copyright-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>
                <div class="tab-content">
                    <div id="footer-copyright-uk" class="tab-pane fade in active">
                        <div class="footer-text copy-right">
                            <?=$form->field($footerForm,'copyright_uk')->textarea([
                                'value'=>$footer->copyright_uk,
                                'class'=>'textarea',
                                'rows'=>2,
                            ])->label(false)?>
                        </div>
                    </div>
                    <div id="footer-copyright-ru" class="tab-pane fade">
                        <div class="footer-text copy-right">
                            <?=$form->field($footerForm,'copyright_ru')->textarea([
                                'value'=>$footer->copyright_ru,
                                'class'=>'textarea',
                                'rows'=>2,
                            ])->label(false)?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-6 to-animate">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#footer-address-title-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                    <li><a data-toggle="tab" href="#footer-address-title-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                </ul>
                <div class="tab-content">
                    <div id="footer-address-title-uk" class="tab-pane fade in active">
                        <h3 class="section-title">
                            <?=$form->field($footerForm,'address_title_uk')->textarea([
                                'value'=>$footer->address_title_uk,
                                'class'=>'textarea',
                                'rows'=>2,
                            ])->label(false)?>
                        </h3>
                    </div>
                    <div id="footer-address-title-ru" class="tab-pane fade">
                        <h3 class="section-title">
                            <?=$form->field($footerForm,'address_title_ru')->textarea([
                                'value'=>$footer->address_title_ru,
                                'class'=>'textarea',
                                'rows'=>2,
                            ])->label(false)?>
                        </h3>
                    </div>
                </div>

                <ul class="contact-info">

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#footer-address-text-uk"><img src="/images/uk.png" alt="uk" class="img-responsive"></a></li>
                        <li><a data-toggle="tab" href="#footer-address-text-ru"><img src="/images/ru.png" alt="ru" class="img-responsive"></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="footer-address-text-uk" class="tab-pane fade in active">
                            <li>
                                <?=$form->field($footerForm,'address_text_uk')->textarea([
                                    'value'=>$footer->address_text_uk,
                                    'class'=>'textarea',
                                    'rows'=>2,
                                ])->label(false)?>
                            </li>
                        </div>
                        <div id="footer-address-text-ru" class="tab-pane fade">
                            <li>
                                <?=$form->field($footerForm,'address_text_ru')->textarea([
                                    'value'=>$footer->address_text_ru,
                                    'class'=>'textarea',
                                    'rows'=>2,
                                ])->label(false)?>
                            </li>
                        </div>
                    </div>

                    <li>
                        <?=$form->field($footerForm,'phone_number')->textarea([
                            'value'=>$footer->phone_number,
                            'class'=>'textarea',
                            'rows'=>1,
                        ])->label(false)?>
                    </li>
                    <li>
                        <?=$form->field($footerForm,'email')->textarea([
                            'value'=>$footer->email,
                            'class'=>'textarea',
                            'rows'=>1,
                        ])->label(false)?>
                    </li>
                    <li>
                        <?=$form->field($footerForm,'site')->textarea([
                            'value'=>$footer->site,
                            'class'=>'textarea',
                            'rows'=>1,
                        ])->label(false)?>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
<div class="container save-container">
    <div class="vertical-line center-block"></div>
    <input type="submit" class="button-save center-block" value="Сохранить">
</div>
<?php ActiveForm::end()?>
<!--################## END FOOTER #####################-->
<!--###################################################-->

<!--###################################################-->
<!--#################### ALERTS #######################-->
<div class="alert alert-success record-success">
    Изменения сохранены успешно!
</div>
<div class="alert alert-danger record-danger">
    Изменения не сохранены, что-то пошло не так!
</div>
<!--################## END ALERTS #####################-->
<!--###################################################-->







