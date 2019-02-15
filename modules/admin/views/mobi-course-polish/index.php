<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Mobi|Edit'
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
            <li><?= Html::a('Днепр', ['mobi-course-polish/index?reg=dp']) ?></li>
            <li><?= Html::a('Киев', ['mobi-course-polish/index?reg=ky']) ?></li>
            <li><?= Html::a('Харьков', ['mobi-course-polish/index?reg=kh']) ?></li>
            <li><?= Html::a('Винница', ['mobi-course-polish/index?reg=vn']) ?></li>
            <li><?= Html::a('Кропивницкий', ['mobi-course-polish/index?reg=kv']) ?></li>
            <li><?= Html::a('Кременчук', ['mobi-course-polish/index?reg=km']) ?></li>
            <li><?= Html::a('Измаил', ['mobi-course-polish/index?reg=iz']) ?></li>
            <li><?= Html::a('Одесса', ['mobi-course-polish/index?reg=od']) ?></li>
            <li><?= Html::a('Белая Церковь', ['mobi-course-polish/index?reg=bc']) ?></li>
            <li><?= Html::a('Славянск', ['mobi-course-polish/index?reg=sl']) ?></li>
        </ul>
    </div>
</header>
<!-- Mobi Home -->
<div class="mobi__home--admin">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <img src="/images/mobiHome.png" class="img-responsive img-rounded " alt="mobiHome.png">
        <div class="row">
          <?php $form = ActiveForm::begin(['id'=>'MobiHomeForm'])?>
          <?= $form->field($mobiHomeForm, 'reg')->textInput(['value'=>$reg, 'class'=>'hidden'])->label(false)?>
          <div class="col-xs-6">
            <?=$form->field($mobiHomeForm, 'desc_ru')->textarea(['value'=>$mobiHome['desc_ru']])?>
            <?=$form->field($mobiHomeForm, 'header_ru')->textarea(['value'=>$mobiHome['header_ru']])?>
            <?=$form->field($mobiHomeForm, 'address_ru')->textarea(['value'=>$mobiHome['address_ru']])?>
            <?=$form->field($mobiHomeForm, 'contact_one')->textarea(['value'=>$mobiHome['contact_one']])?>
          </div>
          <div class="col-xs-6">
            <?=$form->field($mobiHomeForm, 'desc_uk')->textarea(['value'=>$mobiHome['desc_uk']])?>
            <?=$form->field($mobiHomeForm, 'header_uk')->textarea(['value'=>$mobiHome['header_uk']])?>
            <?=$form->field($mobiHomeForm, 'address_uk')->textarea(['value'=>$mobiHome['address_uk']])?>
            <?=$form->field($mobiHomeForm, 'contact_two')->textarea(['value'=>$mobiHome['contact_two']])?>
          </div>
        </div>
        <input type="submit" class="btn btn-lg btn-success" value="Сохранить">
        <?php ActiveForm::end() ?>
      </div>
    </div>
  </div>
</div>
<!-- Mobi Explore -->
<div class="mobi__explore--admin">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <img src="/images/mobiExplore.jpg" alt="mobiExplore.jpg" class="img-responsive img-rounded">
        <div class="row">
          <?php $form = ActiveForm::begin(['id'=>'MobiExploreForm']) ?>
          <?= $form->field($mobiExploreForm, 'reg')->textInput(['value'=>$reg, 'class'=>'hidden'])->label(false)?>
          <div class="col-xs-6">
            <?=$form->field($mobiExploreForm, 'header_ru')->textarea(['value'=>$mobiExplore['header_ru']])?>
            <div class="page-header">
              Список услуг (RU)
            </div>
            <?php foreach ($mobiExploreLists as $list): ?>
              <?=$form->field($mobiExploreForm,'mobiExploreList['.$list->id.'][content_ru]')->textarea(['value'=>$list->content_ru,])->label(false)?>
            <?php endforeach; ?>
            <div class="page-header">
              Плитки (RU)
            </div>
            <?php foreach ($mobiExploreLevels as $list): ?>
              <?=$form->field($mobiExploreForm,'mobiExploreLevels['.$list->id.'][level]')->textarea(['value'=>$list->level,])->label(false)?>
              <?=$form->field($mobiExploreForm,'mobiExploreLevels['.$list->id.'][period_ru]')->textarea(['value'=>$list->period_ru,])->label(false)?>
              <?=$form->field($mobiExploreForm,'mobiExploreLevels['.$list->id.'][desc_ru]')->textarea(['value'=>$list->desc_ru,])->label(false)?>
              <?=$form->field($mobiExploreForm,'mobiExploreLevels['.$list->id.'][info_ru]')->textarea(['value'=>$list->info_ru,])->label(false)?>
              <?=$form->field($mobiExploreForm,'mobiExploreLevels['.$list->id.'][price]')->textarea(['value'=>$list->price,])->label(false)?>
              <?=$form->field($mobiExploreForm,'mobiExploreLevels['.$list->id.'][price_period_ru]')->textarea(['value'=>$list->price_period_ru,])->label(false)?>
            <?php endforeach; ?>
            <?=$form->field($mobiExploreForm, 'button_ru')->textarea(['value'=>$mobiExplore['button_ru']])?>
          </div>
          <div class="col-xs-6">
            <?=$form->field($mobiExploreForm, 'header_uk')->textarea(['value'=>$mobiExplore['header_uk']])?>
            <div class="page-header">
              Плитки (UK)
            </div>
            <?php foreach ($mobiExploreLists as $list): ?>
              <?=$form->field($mobiExploreForm,'mobiExploreList['.$list->id.'][content_uk]')->textarea(['value'=>$list->content_uk,])->label(false)?>
            <?php endforeach; ?>
            <div class="page-header">
              Плитки (UK)
            </div>
            <?php foreach ($mobiExploreLevels as $list): ?>
              <?=$form->field($mobiExploreForm,'mobiExploreLevels['.$list->id.'][level]')->textarea(['value'=>$list->level,])->label(false)?>
              <?=$form->field($mobiExploreForm,'mobiExploreLevels['.$list->id.'][period_uk]')->textarea(['value'=>$list->period_uk,])->label(false)?>
              <?=$form->field($mobiExploreForm,'mobiExploreLevels['.$list->id.'][desc_uk]')->textarea(['value'=>$list->desc_uk,])->label(false)?>
              <?=$form->field($mobiExploreForm,'mobiExploreLevels['.$list->id.'][info_uk]')->textarea(['value'=>$list->info_uk,])->label(false)?>
              <?=$form->field($mobiExploreForm,'mobiExploreLevels['.$list->id.'][price]')->textarea(['value'=>$list->price,])->label(false)?>
              <?=$form->field($mobiExploreForm,'mobiExploreLevels['.$list->id.'][price_period_uk]')->textarea(['value'=>$list->price_period_uk,])->label(false)?>
            <?php endforeach; ?>
            <?=$form->field($mobiExploreForm, 'button_uk')->textarea(['value'=>$mobiExplore['button_uk']])?>
          </div>
        </div>
        <input type="submit" class="btn btn-lg btn-success" value="Сохранить">
        <?php ActiveForm::end() ?>
      </div>
    </div>
  </div>
</div>
<!-- Mobi Additionally -->
<div class="mobi__additionally--admin">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <img src="/images/mobiAdditionally.jpg" alt="mobiAdditionally.jpg" class="img-responsive img-rounded">
        <div class="row">
          <?php $form = ActiveForm::begin(['id'=>'MobiAdditionallyForm']) ?>
          <?= $form->field($mobiAdditionallyForm, 'reg')->textInput(['value'=>$reg, 'class'=>'hidden'])->label(false)?>
          <div class="col-xs-6">
            <?=$form->field($mobiAdditionallyForm, 'header_ru')->textarea(['value'=>$mobiAdditionally['header_ru']])?>
            <?=$form->field($mobiAdditionallyForm, 'desc_ru')->textarea(['value'=>$mobiAdditionally['desc_ru']])?>
            <div class="page-header">
              Список услуг (RU)
            </div>
            <?php foreach ($mobiAdditionallyList as $list): ?>
              <?=$form->field($mobiAdditionallyForm,'mobiAdditionallyLists['.$list->id.'][content_ru]')->textarea(['value'=>$list->content_ru,])->label(false)?>
            <?php endforeach; ?>
          </div>
          <div class="col-xs-6">
            <?=$form->field($mobiAdditionallyForm, 'header_uk')->textarea(['value'=>$mobiAdditionally['header_uk']])?>
            <?=$form->field($mobiAdditionallyForm, 'desc_uk')->textarea(['value'=>$mobiAdditionally['desc_uk']])?>
            <div class="page-header">
              Список услуг (UK)
            </div>
            <?php foreach ($mobiAdditionallyList as $list): ?>
              <?=$form->field($mobiAdditionallyForm,'mobiAdditionallyLists['.$list->id.'][content_uk]')->textarea(['value'=>$list->content_uk,])->label(false)?>
            <?php endforeach; ?>
          </div>


        </div>
        <input type="submit" class="btn btn-lg btn-success" value="Сохранить">
        <?php ActiveForm::end() ?>
      </div>
    </div>
  </div>
</div>
<!-- Mobi As Well As -->
<div class="mobi__asWellAs--admin">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <img src="/images/mobiAsWellAs.jpg" alt="mobiAdditionally.jpg" class="img-responsive img-rounded">
        <div class="row">
          <?php $form = ActiveForm::begin(['id'=>'MobiAsWellAsForm']) ?>
          <?= $form->field($mobiAsWellAsForm, 'reg')->textInput(['value'=>$reg, 'class'=>'hidden'])->label(false)?>
          <div class="col-xs-6">
            <?=$form->field($mobiAsWellAsForm, 'header_ru')->textarea(['value'=>$mobiAsWellAs['header_ru']])?>
            <?=$form->field($mobiAsWellAsForm, 'desc_ru')->textarea(['value'=>$mobiAsWellAs['desc_ru']])?>
            <?=$form->field($mobiAsWellAsForm, 'button_one_ru')->textarea(['value'=>$mobiAsWellAs['button_one_ru']])?>
            <?=$form->field($mobiAsWellAsForm, 'content_ru')->textarea(['value'=>$mobiAsWellAs['content_ru']])?>
            <?=$form->field($mobiAsWellAsForm, 'button_two_ru')->textarea(['value'=>$mobiAsWellAs['button_two_ru']])?>
          </div>
          <div class="col-xs-6">
            <?=$form->field($mobiAsWellAsForm, 'header_uk')->textarea(['value'=>$mobiAsWellAs['header_uk']])?>
            <?=$form->field($mobiAsWellAsForm, 'desc_uk')->textarea(['value'=>$mobiAsWellAs['desc_uk']])?>
            <?=$form->field($mobiAsWellAsForm, 'button_one_uk')->textarea(['value'=>$mobiAsWellAs['button_one_uk']])?>
            <?=$form->field($mobiAsWellAsForm, 'content_uk')->textarea(['value'=>$mobiAsWellAs['content_uk']])?>
            <?=$form->field($mobiAsWellAsForm, 'button_two_uk')->textarea(['value'=>$mobiAsWellAs['button_two_uk']])?>
          </div>
        </div>
        <input type="submit" class="btn btn-lg btn-success" value="Сохранить">
        <?php ActiveForm::end() ?>
      </div>
    </div>
  </div>
</div>
<!-- Mobi Conditons -->
<div class="mobi__conditons--admin">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <img src="/images/mobiConditons.jpg" alt="mobiAdditionally.jpg" class="img-responsive img-rounded">
        <div class="row">
          <?php $form = ActiveForm::begin(['id'=>'MobiConditonsForm']) ?>
          <?= $form->field($mobiConditonsForm, 'reg')->textInput(['value'=>$reg, 'class'=>'hidden'])->label(false)?>
          <div class="col-xs-6">
            <?=$form->field($mobiConditonsForm, 'header_ru')->textarea(['value'=>$mobiConditions['header_ru']])?>
            <div class="page-header">
              Список услуг (Ru)
            </div>
            <?php foreach ($mobiConditionsLists as $list): ?>
              <?=$form->field($mobiConditonsForm,'mobiConditionsList['.$list->id.'][content_ru]')->textarea(['value'=>$list->content_ru,])->label(false)?>
            <?php endforeach; ?>
            <?=$form->field($mobiConditonsForm, 'desc_ru')->textarea(['value'=>$mobiConditions['desc_ru']])?>
            <?=$form->field($mobiConditonsForm, 'button_ru')->textarea(['value'=>$mobiConditions['button_ru']])?>

          </div>
          <div class="col-xs-6">
            <?=$form->field($mobiConditonsForm, 'header_uk')->textarea(['value'=>$mobiConditions['header_uk']])?>
            <div class="page-header">
              Список услуг (Uk)
            </div>
            <?php foreach ($mobiConditionsLists as $list): ?>
              <?=$form->field($mobiConditonsForm,'mobiConditionsList['.$list->id.'][content_uk]')->textarea(['value'=>$list->content_uk,])->label(false)?>
            <?php endforeach; ?>
            <?=$form->field($mobiConditonsForm, 'desc_uk')->textarea(['value'=>$mobiConditions['desc_uk']])?>
            <?=$form->field($mobiConditonsForm, 'button_uk')->textarea(['value'=>$mobiConditions['button_uk']])?>

          </div>
        </div>
        <input type="submit" class="btn btn-lg btn-success" value="Сохранить">
        <?php ActiveForm::end() ?>
      </div>
    </div>
  </div>
</div>
<!-- Mobi Price -->
<div class="mobi__price--admin">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <img src="/images/mobiPrice.jpg" alt="mobiAdditionally.jpg" class="img-responsive img-rounded">
        <div class="row">
          <?php $form = ActiveForm::begin(['id'=>'MobiPriceForm']) ?>
          <?= $form->field($mobiPriceForm, 'reg')->textInput(['value'=>$reg, 'class'=>'hidden'])->label(false)?>
          <div class="col-xs-6">
            <?=$form->field($mobiPriceForm, 'header_ru')->textarea(['value'=>$mobiPrice['header_ru']])?>
            <?=$form->field($mobiPriceForm, 'desc_one_ru')->textarea(['value'=>$mobiPrice['desc_one_ru']])?>
            <?=$form->field($mobiPriceForm, 'desc_two_ru')->textarea(['value'=>$mobiPrice['desc_two_ru']])?>
            <?=$form->field($mobiPriceForm, 'button_ru')->textarea(['value'=>$mobiPrice['button_ru']])?>
          </div>
          <div class="col-xs-6">
            <?=$form->field($mobiPriceForm, 'header_uk')->textarea(['value'=>$mobiPrice['header_uk']])?>
            <?=$form->field($mobiPriceForm, 'desc_one_uk')->textarea(['value'=>$mobiPrice['desc_one_uk']])?>
            <?=$form->field($mobiPriceForm, 'desc_two_uk')->textarea(['value'=>$mobiPrice['desc_two_uk']])?>
            <?=$form->field($mobiPriceForm, 'button_uk')->textarea(['value'=>$mobiPrice['button_uk']])?>
          </div>
        </div>
        <input type="submit" class="btn btn-lg btn-success" value="Сохранить">
        <?php ActiveForm::end() ?>
      </div>
    </div>
  </div>
</div>

<div class="alert alert-success message-success">
    Изменения сохранены успешно!
</div>

<div class="alert alert-danger message-danger">
    Изменения не со хранены, что-то пошло не так!
</div>
