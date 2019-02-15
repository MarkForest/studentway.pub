<?php
use yii\helpers\Html;

$this->title = 'Admin|Main'
?>

<div class="admin-default-index">
    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">Информация с сайтов "Курсы польского языка"</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">Форма в шапке сайта</div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Имя фамилия</th>
                                        <th>Номер телефона</th>
                                        <th>Действия</th>
                                    </tr>
                                    <?php foreach($requestCallMe as $item):?>
                                    <tr>
                                        <td><?=$item['fullname']?></td>
                                        <td><?=$item['tall_number']?></td>
                                        <td>
                                            <?= Html::beginForm(['default/request-call-me-move'], 'post')?>
                                            <?= Html::textInput('status',$item['id'],['class'=>'hidden'])?>
                                            <?= Html::submitButton('Обработано',['class'=>'btn btn-sm btn-success'])?>
                                            <?=Html::endForm()?>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                       <div class="panel panel-success">
                           <div class="panel-heading">Вопросы</div>
                           <div class="panel-body">
                               <table class="table table-striped">
                                <tr>
                                   <th>Имя</th>
                                   <th>email</th>
                                   <th>Сообщение</th>
                                   <th>Действия</th>
                                </tr>
                                   <?php foreach ($questions as $q):?>
                                   <tr>
                                       <td><?=$q->name?></td>
                                       <td><?=$q->email?></td>
                                       <td><?=$q->message?></td>
                                       <td>
                                           <?= Html::beginForm(['default/question-move'], 'post')?>
                                           <?= Html::textInput('status',$q->id,['class'=>'hidden'])?>
                                           <?= Html::submitButton('Обработано',['class'=>'btn btn-sm btn-success'])?>
                                           <?=Html::endForm()?>
                                       </td>
                                   </tr>
                                   <?php endforeach;?>
                               </table>
                           </div>
                       </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">Записи на субботу</div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Имя</th>
                                        <th>email</th>
                                        <th>Телефон</th>
                                        <th>Действия</th>
                                    </tr>
                                    <?php foreach ($records as $q):?>
                                        <tr>
                                            <td><?=$q->name?></td>
                                            <td><?=$q->email?></td>
                                            <td><?=$q->phone_number?></td>
                                            <td>
                                                <?= Html::beginForm(['default/record-move'], 'post')?>
                                                <?= Html::textInput('status',$q->id,['class'=>'hidden'])?>
                                                <?= Html::submitButton('Обработано',['class'=>'btn btn-sm btn-success'])?>
                                                <?=Html::endForm()?>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">Информация с сайтов "Институты"</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">Перечень специальностей и актуальные цены</div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Email</th>
                                        <th>Институт</th>
                                        <th>Уровень</th>
                                        <th>Действия</th>
                                    </tr>
                                    <?php foreach ($level as $q):?>
                                        <tr>
                                            <td><?=$q->email?></td>
                                            <td><?=$q->institute?></td>
                                            <td><?=$q->level?></td>
                                            <td>
                                                <?= Html::beginForm(['default/level-move'], 'post')?>
                                                <?= Html::textInput('status',$q->id,['class'=>'hidden'])?>
                                                <?= Html::submitButton('Обработано',['class'=>'btn btn-sm btn-success'])?>
                                                <?=Html::endForm()?>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">Сообщение с контактной формы</div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Имя</th>
                                        <th>email</th>
                                        <th>Институт</th>
                                        <th>Сообщение</th>
                                        <th>Действия</th>
                                    </tr>
                                    <?php foreach ($message as $q):?>
                                        <tr>
                                            <td><?=$q->name?></td>
                                            <td><?=$q->email?></td>
                                            <td><?=$q->institute?></td>
                                            <td><?=$q->message?></td>
                                            <td>
                                                <?= Html::beginForm(['default/message-move'], 'post')?>
                                                <?= Html::textInput('status',$q->id,['class'=>'hidden'])?>
                                                <?= Html::submitButton('Обработано',['class'=>'btn btn-sm btn-success'])?>
                                                <?=Html::endForm()?>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
