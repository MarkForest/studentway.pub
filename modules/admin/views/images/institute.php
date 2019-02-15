<?php
use app\models\IFourthListPhoto;
use app\models\ISeventhListPhoto;
use app\models\ISixthListPhoto;
use app\models\IThirdListPhoto;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Admin|Images'
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
                            <td><?= Html::a('АКАДЕМИЯ ИМ. А.Ф. МОДЖЕВСКОГО В КРАКОВЕ', ['images/image-institutes?reg=modzewskogo'])?></td>
                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('COLLEGIUM CIVITAS (ВАРШАВА)', ['images/image-institutes?reg=civitas'])?></td>
                        </tr>
                        <tr class="info">
                            <td><?= Html::a('COLLEGIUM DA VINCI (ВЫСШАЯ ШКОЛА ГУМАНИТАРНЫХ НАУК В ПОЗНАНИ)', ['images/image-institutes?reg=cdv'])?></td>
                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('АКАДЕМИЯ ИМ. ЛЕОНА КОЗМИНСКОГО В ВАРШАВЕ', ['images/image-institutes?reg=kozmonskego'])?></td>
                        </tr>
                        <tr class="active">
                            <td><?= Html::a('АКАДЕМИЯ МОРСКАЯ В ЩЕЦИНЕ', ['images/image-institutes?reg=mas'])?></td>
                        </tr>
                        <tr class="success">
                            <td><?= Html::a('АКАДЕМИЯ ОБЩЕСТВЕННЫХ НАУК В ВАРШАВЕ', ['images/image-institutes?reg=san'])?></td>
                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА БИЗНЕСА В ДОМБРОВЕ ГУРНИЧЕЙ', ['images/image-institutes?reg=wsbdg'])?></td>
                        </tr>
                        <tr class="info">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА ГОСТИНИЧНОГО БИЗНЕСА И ОБЩЕСТВЕННОГО ПИТАНИЯ В ПОЗНАНИ', ['images/image-institutes?reg=gotelpoz'])?></td>
                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА ЛОГИСТИКИ В ПОЗНАНИ', ['images/image-institutes?reg=logistpoz'])?></td>
                        </tr>
                        <tr class="active">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА ТУРИЗМА И ЭКОЛОГИИ В СУХОЙ БЕСКИДСКОЙ', ['images/image-institutes?reg=sb'])?></td>
                        </tr>
                        <tr class="success">
                            <td><?= Html::a('ВЫСШАЯ ШКОЛА ЭКОНОМИКИ В РАДОМЕ', ['images/image-institutes?reg=radom'])?></td>
                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('ГОРНО-МЕТАЛЛУРГИЧЕСКАЯ АКАДЕМИЯ В КРАКОВЕ', ['images/image-institutes?reg=agh'])?></td>
                        </tr>
                        <tr class="info">
                            <td><?= Html::a('ПЕДАГОГИЧЕСКИЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['images/image-institutes?reg=pedkr'])?></td>
                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('ПОЛИТЕХНИЧЕСКИЙ УНИВЕРСИТЕТ В ВАРШАВЕ', ['images/image-institutes?reg=politehw'])?></td>
                        </tr>
                        <tr class="active">
                            <td><?= Html::a('ПОЛИТЕХНИЧЕСКИЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['images/image-institutes?reg=politehkr'])?></td>
                        </tr>
                        <tr class="success">
                            <td><?= Html::a('ПОЛИТЕХНИЧЕСКИЙ УНИВЕРСИТЕТ ВО ВРОЦЛАВЕ', ['images/image-institutes?reg=politehwr'])?></td>
                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('ПОЛЬСКО-ЯПОНСКАЯ АКАДЕМИЯ КОМПЬЮТЕРНЫХ ТЕХНОЛОГИЙ', ['images/image-institutes?reg=pj'])?></td>
                        </tr>
                        <tr class="info">
                            <td><?= Html::a('СЕЛЬСКОХОЗЯЙСТВЕННЫЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['images/image-institutes?reg=rolkr'])?></td>
                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('СИЛЕЗСКИЙ УНИВЕРСИТЕТ В КАТОВИЦАХ', ['images/image-institutes?reg=sukatov'])?></td>
                        </tr>
                        <tr class="active">
                            <td><?= Html::a('УНИВЕРСИТЕТ SWPS', ['images/image-institutes?reg=swps'])?></td>
                        </tr>
                        <tr class="success">
                            <td><?= Html::a('УНИВЕРСИТЕТ ВАРШАВСКИЙ', ['images/image-institutes?reg=uw'])?></td>
                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('УНИВЕРСИТЕТ ВРОЦЛАВСКИЙ', ['images/image-institutes?reg=uwr'])?></td>
                        </tr>
                        <tr class="info">
                            <td><?= Html::a('УНИВЕРСИТЕТ ИМ. АДАМА МИЦКЕВИЧА В ПОЗНАНИ', ['images/image-institutes?reg=uam'])?></td>
                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('УНИВЕРСИТЕТ ИМ. МАРИИ КЮРИ-СКЛОДОВСКОЙ В ЛЮБЛИНЕ', ['images/image-institutes?reg=usk'])?></td>
                        </tr>
                        <tr class="active">
                            <td><?= Html::a('УНИВЕРСИТЕТ ОПОЛЬСКИЙ', ['images/image-institutes?reg=uo'])?></td>
                        </tr>
                        <tr class="success">
                            <td><?= Html::a('УНИВЕРСИТЕТ ПРИРОДНИЧИЙ В ПОЗНАНИ', ['images/image-institutes?reg=prurodpoz'])?></td>
                        </tr>
                        <tr class="danger">
                            <td><?= Html::a('УНИВЕРСИТЕТ ЩЕЦИНСКИЙ', ['images/image-institutes?reg=uz'])?></td>
                        </tr>
                        <tr class="info">
                            <td><?= Html::a('ЭКОНОМИЧЕСКИЙ УНИВЕРСИТЕТ В КАТОВИЦАХ', ['images/image-institutes?reg=uekat'])?></td>
                        </tr>
                        <tr class="warning">
                            <td><?= Html::a('ЭКОНОМИЧЕСКИЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['images/image-institutes?reg=uek'])?></td>
                        </tr>
                        <tr class="active">
                            <td><?= Html::a('ЯГЕЛЛОНСКИЙ УНИВЕРСИТЕТ В КРАКОВЕ', ['images/image-institutes?reg=uj'])?></td>
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


<div class="container" style="padding-top: 100px">
    <!--    Первый блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Главная</h2>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <h2 class="page-header">
                        <i class="icon-arrow-down-circle"> Задний фон</i>
                    </h2>
                </div>
                <?php foreach($home_list as $list):?>
                    <div class="col-md-3">
                        <div class="thumbnail text-center">
                            <img class="img-responsive" src="/institute/images/<?= $list->photo ?>" alt="Photo">
                            <br>
                            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-institutes','id'=>$list->id,'t'=>'home','reg'=>$reg]]) ?>
                            <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                            <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                            <?php ActiveForm::end() ?>
                        </div>
                    </div>
                <?php endforeach?>
            </div>
        </div>
    </div>
    <!--    Второй блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Второй блок</h2>
            </div>
            <div class="panel-body">
                <div class="col-md-3">
                    <div class="thumbnail text-center">
                        <img class="img-responsive" src="/institute/images/<?= $second->photo ?>" alt="photo">
                        <br>
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-institutes','id'=>$second->id,'t'=>'second','reg'=>$reg]]) ?>
                        <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                        <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                        <?php ActiveForm::end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    Третий блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Третий блок</h2>
            </div>
            <div class="panel-body">
                <?php foreach($third_list as $list):?>
                    <div class="row">
                        <div class="col-md-12">
                    <h2 class="page-header">
                        <i class="icon-arrow-down-circle"> <?=$list->header_ru?></i>
                    </h2>
                        </div>
                    <?php foreach(IThirdListPhoto::find()->where(['iThird_list_id'=>$list->id])->all() as $list_photo):?>
                        <div class="col-md-3">
                            <div class="thumbnail text-center">
                                <img class="img-responsive" src="/institute/images/<?= $list_photo->photo ?>" alt="photo">
                                <br>
                                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-institutes','id'=>$list_photo->id,'t'=>'third','reg'=>$reg]]) ?>
                                <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                                <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                                <?php ActiveForm::end() ?>
                            </div>
                        </div>
                    <?php endforeach?>
                    </div>
                <?php endforeach?>
            </div>
        </div>
    </div>

    <!--    Четвертый блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Четвертый блок</h2>
            </div>
            <div class="panel-body">
                <?php foreach($fourth_list as $list):?>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-header">
                                <i class="icon-arrow-down-circle"> <?=$list->title_ru?></i>
                            </h2>
                        </div>
                        <?php foreach(IFourthListPhoto::find()->where(['iFourth_list_id'=>$list->id])->all() as $list_photo):?>
                            <div class="col-md-3">
                                <div class="thumbnail text-center">
                                    <img class="img-responsive" src="/institute/images/<?= $list_photo->photo ?>" alt="photo">
                                    <br>
                                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-institutes','id'=>$list_photo->id,'t'=>'fourth','reg'=>$reg]]) ?>
                                    <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                                    <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                                    <?php ActiveForm::end() ?>
                                </div>
                            </div>
                        <?php endforeach?>
                    </div>
                <?php endforeach?>
            </div>
        </div>
    </div>

    <!--    Шестой блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Шестой блок</h2>
            </div>
            <div class="panel-body">
                <?php foreach($sixth_list as $list):?>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-header">
                                <i class="icon-arrow-down-circle"> <?=$list->header_ru?></i>
                            </h2>
                        </div>
                        <?php foreach(ISixthListPhoto::find()->where(['iSixth_list_id'=>$list->id])->all() as $list_photo):?>
                            <div class="col-md-3">
                                <div class="thumbnail text-center">
                                    <img class="img-responsive" src="/institute/images/<?= $list_photo->photo ?>" alt="photo">
                                    <br>
                                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-institutes','id'=>$list_photo->id,'t'=>'sixth','reg'=>$reg]]) ?>
                                    <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                                    <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                                    <?php ActiveForm::end() ?>
                                </div>
                            </div>
                        <?php endforeach?>
                    </div>
                <?php endforeach?>
            </div>
        </div>
    </div>


    <!--    Седьмой блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Седьмой блок</h2>
            </div>
            <div class="panel-body">
                <?php foreach($seventh_list as $list):?>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-header">
                                <i class="icon-arrow-down-circle"> <?=$list->name_ru?></i>
                            </h2>
                        </div>
                        <?php foreach(ISeventhListPhoto::find()->where(['iSeventh_list_id'=>$list->id])->all() as $list_photo):?>
                            <div class="col-md-3">
                                <div class="thumbnail text-center">
                                    <img class="img-responsive" src="/institute/images/<?= $list_photo->photo ?>" alt="photo">
                                    <br>
                                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-institutes','id'=>$list_photo->id,'t'=>'seventh','reg'=>$reg]]) ?>
                                    <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                                    <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                                    <?php ActiveForm::end() ?>
                                </div>
                            </div>
                        <?php endforeach?>
                    </div>
                <?php endforeach?>
            </div>
        </div>
    </div>

    <!--    Восьмой блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Восьмой блок</h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <i class="icon-arrow-down-circle"> Задний фон</i>
                        </h2>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail text-center">
                            <img class="img-responsive" src="/institute/images/<?= $eighth->photo_back ?>" alt="photo">
                            <br>
                            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-institutes','id'=>$eighth->id,'t'=>'eighth','reg'=>$reg]]) ?>
                            <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                            <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                            <?php ActiveForm::end() ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
