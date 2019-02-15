<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Admin|Images'
?>


<div class="container" style="padding-top: 100px">
    <!--    Первый блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Блок Главная</h2>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <h2 class="page-header">
                        <i class="icon-arrow-down-circle"> Задний фон</i>
                    </h2>
                </div>
                    <div class="col-md-3">
                        <div class="thumbnail text-center">
                            <img class="img-responsive" src="/tours/images/<?= $firstBlock->image ?>" alt="Photo">
                            <br>
                            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-tour','id'=>$firstBlock->id,'t'=>'first']]) ?>
                            <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                            <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                            <?php ActiveForm::end() ?>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    <!--    Про университеты блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Блок про Университеты</h2>
            </div>
            <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                    <h2 class="page-header">
                        <i class="icon-arrow-down-circle"> Список Университетов</i>
                    </h2>
                        </div>
                    <?php foreach($aboutUniversityBlock as $list_photo):?>
                        <div class="col-md-3">
                            <div class="thumbnail text-center">
                                <img class="img-responsive" src="/tours/images/<?= $list_photo->image ?>" alt="photo">
                                <br>
                                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-tour','id'=>$list_photo->id,'t'=>'about_university']]) ?>
                                <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                                <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                                <?php ActiveForm::end() ?>
                            </div>
                        </div>
                    <?php endforeach?>
                    </div>
            </div>
        </div>
    </div>

    <!--    Другие Университеты карусель-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Блок Другие Университеты</h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <i class="icon-arrow-down-circle"> Список Университетов</i>
                        </h2>
                    </div>
                    <?php foreach($aboutOtherUniversityBlock as $list_photo):?>
                        <div class="col-md-3">
                            <div class="thumbnail text-center">
                                <img class="img-responsive" src="/tours/images/<?= $list_photo->image ?>" alt="photo">
                                <br>
                                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-tour','id'=>$list_photo->id,'t'=>'aboutOtherUniversityBlock']]) ?>
                                <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                                <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                                <?php ActiveForm::end() ?>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </div>

    <!-- Наши услуги-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Блок Наши услуги</h2>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <h2 class="page-header">
                        <i class="icon-arrow-down-circle"> Задний фон</i>
                    </h2>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail text-center">
                        <img class="img-responsive" src="/tours/images/<?= $ourServicesBlock->image ?>" alt="Photo">
                        <br>
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-tour','id'=>$ourServicesBlock->id,'t'=>'ourServicesBlock']]) ?>
                        <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                        <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                        <?php ActiveForm::end() ?>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--О нас-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Блок О нас</h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <i class="icon-arrow-down-circle"> О нас</i>
                        </h2>
                    </div>
                    <?php foreach($aboutUsBlock as $list_photo):?>
                        <div class="col-md-3">
                            <div class="thumbnail text-center">
                                <img class="img-responsive" src="/tours/images/<?= $list_photo->image ?>" alt="photo">
                                <br>
                                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-tour','id'=>$list_photo->id,'t'=>'aboutUsBlock']]) ?>
                                <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                                <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                                <?php ActiveForm::end() ?>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </div>

    <!--Есть вопросы-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Блок Есть вопросы</h2>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <h2 class="page-header">
                        <i class="icon-arrow-down-circle"> Задний фон</i>
                    </h2>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail text-center">
                        <img class="img-responsive" src="/tours/images/<?= $haveQuestionsBlock->image ?>" alt="Photo">
                        <br>
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-tour','id'=>$haveQuestionsBlock->id,'t'=>'haveQuestionsBlock']]) ?>
                        <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                        <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                        <?php ActiveForm::end() ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Отзывы-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Блок Отзывы</h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <i class="icon-arrow-down-circle"> Карусель фото</i>
                        </h2>
                    </div>
                    <?php foreach($reviewBlock as $list_photo):?>
                        <div class="col-md-3">
                            <div class="thumbnail text-center">
                                <img class="img-responsive" src="/tours/images/<?= $list_photo->image ?>" alt="photo">
                                <br>
                                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-tour','id'=>$list_photo->id,'t'=>'reviewBlock']]) ?>
                                <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                                <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                                <?php ActiveForm::end() ?>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </div>

    <!--Контакты-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Блок Контакты</h2>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <h2 class="page-header">
                        <i class="icon-arrow-down-circle"> Задний фон</i>
                    </h2>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail text-center">
                        <img class="img-responsive" src="/tours/images/<?= $contactsBlock->image ?>" alt="Photo">
                        <br>
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-tour','id'=>$contactsBlock->id,'t'=>'contactsBlock']]) ?>
                        <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
                        <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>
                        <?php ActiveForm::end() ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
