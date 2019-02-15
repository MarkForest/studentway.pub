<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title='Polish|StudentWay';
\yii\helpers\Url::remember();
?>
<header role="banner" id="fh5co-header" class="navbar-fixed-top">
    <div class="fluid-container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                <a class="navbar-brand" href="<?=\yii\helpers\Url::toRoute('/site/index')?>"><img src="/images/logo_bell2.png"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#" data-nav-section="home"><span><?=$loc=='uk'?'Головна':'Главная'?></span></a></li>
                    <li><a href="#" data-nav-section="pricing"><span><?=$loc=='uk'?'Ціни':'Цены'?></span></a></li>
                    <li><a href="#" data-nav-section="team"><span><?=$loc=='uk'?'Команда':'Команда'?></span></a></li>
                    <li><a href="#" data-nav-section="faq"><span><?=$loc=='uk'?'Питання':'Вопросы'?></span></a></li>
                    <li><a href="#" data-nav-section="contact"><span><?=$loc=='uk'?'Контакти':'Контакты'?></span></a></li>
                    <li class="dropdown drop">
                        <button class="dropdown-toggle " data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true"  href="#"><?=$drop?>
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><?= Html::a('Дніпро (uk)', ['course-polish/index?reg=dp&loc=uk']).' <i class="icon-circle"></i> '.Html::a('Днепр (ru)', ['course-polish/index?reg=dp&loc=ru']) ?></li>
                            <li><?= Html::a('Київ (uk)', ['course-polish/index?reg=ky&loc=uk']).' <i class="icon-circle"></i> '.Html::a('Киев (ru)', ['course-polish/index?reg=ky&loc=ru']) ?></li>
                            <li><?= Html::a('Харьків (uk)', ['course-polish/index?reg=kh&loc=uk']).' <i class="icon-circle"></i> '.Html::a('Харьков (ru)', ['course-polish/index?reg=kh&loc=ru']) ?></li>

                            <li><?= Html::a('Вінниця (uk)', ['course-polish/index?reg=vn&loc=uk']).' <i class="icon-circle"></i> '.Html::a('Винница (ru)', ['course-polish/index?reg=vn&loc=ru']) ?></li>

                            <li><?= Html::a('Кропивницький (uk)', ['course-polish/index?reg=kv&loc=uk']) ?> <i class="icon-circle"></i> <?= Html::a('Кропивницкий (ru)', ['course-polish/index?reg=kv&loc=ru']) ?></li>

                            <li><?= Html::a('Кременчук (uk)', ['course-polish/index?reg=km&loc=uk']) ?> <i class="icon-circle"></i> <?= Html::a('Кременчуг (ru)', ['course-polish/index?reg=km&loc=ru']) ?></li>

                            <li><?= Html::a('Ізмаїл (uk)', ['course-polish/index?reg=iz&loc=uk']) ?> <i class="icon-circle"></i> <?= Html::a('Измаил (ru)', ['course-polish/index?reg=iz&loc=ru']) ?></li>

                            <li><?= Html::a('Одеса (uk)', ['course-polish/index?reg=od&loc=uk']) ?> <i class="icon-circle"></i> <?= Html::a('Одесса (ru)', ['course-polish/index?reg=od&loc=ru']) ?></li>

                            <li><?= Html::a('Біла Церква (uk)', ['course-polish/index?reg=bc&loc=uk']) ?> <i class="icon-circle"></i> <?= Html::a('Белая Церковь (ru)', ['course-polish/index?reg=bc&loc=ru']) ?></li>

                            <li><?= Html::a('Cлов\'янськ (uk)', ['course-polish/index?reg=sl&loc=uk']) ?> <i class="icon-circle"></i> <?= Html::a('Славянск (ru)', ['course-polish/index?reg=sl&loc=ru']) ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<section id="fh5co-home" data-section="home">
    <div class="gradient"></div>
    <div class="container">
      <div class="row hidden-xs hidden-sm">
            <div class="col-md-5 home-first-text-block pull-left">
                <p class="text-block">
                    <?=$loc=='uk'?$home->header_title_1_uk:$home->header_title_1_ru?>
                </p>
            </div>

            <div class="col-md-5 col-md-offset-2 home-first-text-block pull-right">
                <p class="text-block">
                    <?=$loc=='uk'?$home->header_title_2_uk:$home->header_title_2_ru?>
                </p>
            </div>
        </div>
        <div class="row">
			<div class="col-md-12 text-right soc-block hidden-sm hidden-xs">
        <a target="_blank" href="<?=\yii\helpers\Url::to('https://www.facebook.com/studentway.ukraina/')?>"><img src="/images/facebook_color.png" alt="" class="soc-icons"></a>
        <a target="_blank" href="<?=\yii\helpers\Url::to('https://www.instagram.com/studentway_ukraina/')?>"><img src="/images/instagram_color.png" alt="" class="soc-icons"></a>
        <a target="_blank" href="<?=\yii\helpers\Url::to('https://www.youtube.com/channel/UCTZ6RKr62Fc3GgXOdnvWXuQ')?>"><img src="/images/youtube_color.png" alt="" class="soc-icons"></a>
        <a target="_blank" href="<?=\yii\helpers\Url::to('https://web.telegram.org/#/im?p=@studentwaypl')?>"><img src="/images/telegram.png" alt="" class="soc-icons"></a>
        <a target="_blank" href="<?=\yii\helpers\Url::to('https://twitter.com/StudentwayU')?>"><img src="/images/twiter_color.png" alt="" class="soc-icons"></a>
      </div>
      <div class="col-md-7 home-content-text-block hidden-xs hidden-sm">
          <h1><?=$loc=='uk'?$home->title_uk:$home->title_ru?></h1>
          <?php if (isset($listHome)):?>
          <ul>
              <?php foreach ($listHome as $list):?>
              <li><i class="icon-check2"></i><?=$loc=='uk'?$list->text_uk:$list->text_ru?></li>
              <?php endforeach;?>
          </ul>
          <?php endif;?>
      </div>
      <!-- Mobile devices home-->
      <div class="col-sm-12 col-xs-12 hidden-md hidden-lg">
          <div class="mobi__contact text-right">
          <p class="mobi__contact_tel"><a href="tel: <?=nl2br($mobiHome['contact_one'])?>"><?=nl2br($mobiHome['contact_one'])?></a></p>
              <p class="mobi__contact_tel"><a href="tel: <?=nl2br($mobiHome['contact_two'])?>"><?=nl2br($mobiHome['contact_two'])?></a></p>
              <p class="mobi__contact_address"><?=nl2br($loc=='ru'?$mobiHome['address_ru']:$mobiHome['address_uk'])?></p>
          </div>
      </div>
      <div class="col-sm-12 col-xs-12 hidden-md hidden-lg">
          <div class="mobi__header text-center">
              <h1 class="mobi__header_text"><?=nl2br($loc=='ru'?$mobiHome['header_ru']:$mobiHome['header_uk'])?></h1>
          </div>
      </div>
      <div class="col-sm-12 col-xs-12 hidden-md hidden-lg">
          <div class="mobi__desc text-center">
              <h3 class="mobi__desc_text"><?=nl2br($loc=='ru'?$mobiHome['desc_ru']:$mobiHome['desc_uk'])?></h3>
          </div>
      </div>
            <!-- end Mobile devices home-->
      <div class="col-md-4 col-md-offset-1 col-sm-12 col-xs-12 home-content-text-block">
          <?php $form = ActiveForm::begin(['id'=>'RequestCallMeForm', 'options'=>['class'=>'form']]);?>
              <p><?=nl2br($loc=='ru'?$formHome['desc_ru']:$formHome['desc_uk'])?></p>
              <h3><?=nl2br($loc=='ru'?$formHome['header_ru']:$formHome['header_uk'])?></h3>
              <div class="form-group">
                  <?= $form->field($modelRequestCallMe, 'region_key')
                      ->textInput(['class'=>'hidden', 'value'=>$reg])->label(false);?>
                  <?= $form->field($modelRequestCallMe, 'fullname')
                      ->textInput(['class'=>'form-control','placeholder'=>nl2br($loc=='ru'?$formHome['name_placeholder_ru']:$formHome['name_placeholder_uk']), 'id'=>'fullname'])
                      ->label(false);?>
                  <?= $form->field($modelRequestCallMe, 'tall_number')
                      ->textInput(['class'=>'form-control','placeholder'=>nl2br($loc=='ru'?$formHome['tell_placeholder_ru']:$formHome['tell_placeholder_uk']), 'id'=>'phoneNumber'])
                      ->label(false);?>
              </div>
              <div class="form-group">
                  <input type="submit" class="btnHomeForm" value="<?=nl2br($loc=='ru'?$formHome['button_text_ru']:$formHome['button_text_uk'])?>">
              </div>
            <?php ActiveForm::end()?>
        </div>
    </div>
    </div>
    </div>
</section>
<section id="fh5co-explore" data-section="explore">
    <div class="container hidden-sm hidden-xs">
        <div class="row">
            <div class="col-md-12 section-heading text-center">
                <h2 class="to-animate"><?=$loc=='uk'?$privilege->main_title_uk:$privilege->main_title_ru?></h2>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 subtext to-animate">
                        <h3><?=$loc=='uk'?$privilege->disc_uk:$privilege->disc_ru?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-explore hidden-sm hidden-xs">
        <div class="gradient"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 to-animate-2">
                    <div class="mt">
                        <h3><?=$loc=='uk'?$privilege->title_list_uk:$privilege->title_list_ru?></h3>
                        <ul class="list-nav">
                            <?php foreach ($listPrivilege as $list):?>
                            <li><i class="icon-check2"></i><?=$loc=='uk'?$list->text_uk:$list->text_ru?></li>
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
    <div class="fh5co-explore fh5co-explore-bg-color hidden-sm hidden-xs">
        <div class="bg-text">
        <div class="container">
            <div class="col-md-12 section-heading text-center">
                <h2 class="to-animate text-center"><?=$loc=='uk'?$assurance->main_title_uk:$assurance->main_title_ru?></h2>
            </div>
            <div class="row">
                <div class="header-block-explore to-animate-3">
                    <div class="col-md-2 col-md-offset-3">
                        <h3 class=""><?=$loc=='uk'?$assurance->disc_title_uk:$assurance->disc_title_ru?></h3>
                        <img src="/images/icon_3373.png" alt="students" class="">
                    </div>
                    <div class="col-md-5">
                        <h3><?=$loc=='uk'?$assurance->disc_text_uk:$assurance->disc_text_ru?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="">
                    <div class="mt">
                        <?php foreach ($listAssurance as $list):?>
                        <div class="col-md-4 to-animate-3 text-center">
                            <div class="block-garant center-block">
                                <div class="text-garant">
                                    <p><?=$loc=='uk'?$list->text_uk:$list->text_ru?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Mobile devices explore-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
                <div class="mobi__explore ">
                    <div class="mobi__explore_header text-center">
                        <h2><?=nl2br($loc=='ru'?$mobiExplore['header_ru']:$mobiExplore['header_uk'])?></h2>
                    </div>
                </div>
                <ul class="mobi__explore_list">
                  <?php foreach ($mobiExploreLists as $key => $value):?>
                    <li class="mobi__explore_list_item"><i class="icon-check2"></i>
                      <?=nl2br($loc=='ru'?$value['content_ru']:$value['content_uk'])?>
                    </li>
                  <?php endforeach;?>
                </ul>
                <div class="mobi__explore ">
                    <div class="mobi__explore_header text-center">
                        <h2><?=$loc=='ru'?'Расписание групп':'Розклад груп'?></h2>
                    </div>
                </div>
                <ul class="mobi__explore_levels">
                  <?php foreach ($mobiExploreLevels as $key => $value): ?>
                    <li class="mobi__explore_levels_item">
                        <div class="mobi__explore_levels_item_level">
                            <p><?=nl2br($value['level'])?></p>
                            <p><?=nl2br($loc=='ru'?$value['period_ru']:$value['period_uk'])?></p>
                        </div>
                        <div class="mobi__explore_levels_item_desc">
                            <p><?=nl2br($loc=='ru'?$value['desc_ru']:$value['desc_uk'])?></p>
                        </div>
                        <div class="mobi__explore_levels_item_info">
                             <p><?=nl2br($loc=='ru'?$value['info_ru']:$value['info_uk'])?></p>
                        </div>
                        <div class="mobi__explore_levels_item_price">
                            <p><?=nl2br($value['price'])?></p>
                            <p><?=nl2br($loc=='ru'?$value['price_period_ru']:$value['price_period_uk'])?></p>
                        </div>
                    </li>
                  <?php endforeach; ?>
                </ul>
                <div class="mobi__explore_button" data-toggle="modal" data-target="#RequestCallMeFormModal">
                    <?=nl2br($loc=='ru'?$mobiExplore['button_ru']:$mobiExplore['button_uk'])?>
                </div>
            </div>
        </div>
    </div>
    <!-- end Mobile devices explore-->
    <!-- Mobile devices Additionally-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 hidden-md hidden-lg">
                <div class="mobi__additionally_header text-center">
                    <h2><?=nl2br($loc=='ru'?$mobiAdditionally['header_ru']:$mobiAdditionally['header_uk'])?></h2>
                </div>
                <div class="mobi__additionally_desc">
                    <p><?=nl2br($loc=='ru'?$mobiAdditionally['desc_ru']:$mobiAdditionally['desc_uk'])?></p>
                    <ul class="mobi__additionally_desc_list">
                      <?php foreach ($mobiAdditonallyList as $key => $value): ?>
                        <li><i class="icon-check2"></i><?=nl2br($loc=='ru'?$value['content_ru']:$value['content_uk'])?></li>
                      <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- end Mobile devices Additionally-->
</section>
<div class="getting-started getting-started-1 hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-8 to-animate">
                <h3><?=isset($gettingFirst->disc_uk)?$gettingFirst->disc_uk:$gettingFirst->disc_ru?></h3>
            </div>
            <div class="col-md-4 to-animate-2">
                <div class="call-to-action text-right" data-toggle="modal" data-target="#RequestCallMeFormModal">
                    <a class="sign-up"><?=isset($gettingFirst->button_text_uk)?$gettingFirst->button_text_uk:$gettingFirst->button_text_ru?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="fh5co-testimony" data-section="testimony" class="hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 to-animate">
                <div class="wrap-testimony">
                    <div class="owl-carousel-fullwidth">
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="/images/person.jpg" alt="user">
                                </figure>
                                <blockquote>
                                    <p>"Велике спасибі за надану можливість познайомитися з командою польської мови. Кваліфіковані викладачі, які протягом тривалого часу навчання допомогли мені поліпшити іноземну мову. Практичні завдання, уроки, лекції, кіно кожен день збільшувала свій словниковий запас. Раджу всім працювати з вами!"</p>
                                </blockquote>
                                <span>Юліанна Мицик</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="/images/person2.jpg" alt="user">
                                </figure>
                                <blockquote>
                                    <p>"Мені дуже подобаються заняття, спасибі за таку велику перспективу навчання в Польщі. Я дуже задоволена навчанням."</p>
                                </blockquote>
                                <span>Катя Ярошенко</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="/images/person3.jpg" alt="user">
                                </figure>
                                <blockquote>
                                    <p>"Очень доступные и хорошо структурированные занятия по польскому языку. Нравится уроки "Начинаем говорить по польски" - повторять текст достаточно просто и незаметно запоминаешь необходимые слова и выражения. Бонус - появляются интересные фильмы на польском)."</p>
                                </blockquote>
                                <span>Тетяна Полонська</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section class->
<div class="getting-started getting-started-1 block-with-clock hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-7 to-animate">
                <h3 id="header-clock"><?=$getSecond['timerTitle']?></h3>
                <div id="CDT"></div>
                <h3><?=$getSecond['title']?></h3>
                <p><?=$getSecond['disc']?></p>
            </div>
            <div class="col-md-3 col-md-offset-2 to-animate-2">
<!--                <div class="call-to-action text-center">-->
<!--                    <button onClick="LIRAX.showWidget()" class="sign-up">--><?//=$getSecond['buttonText']?><!--</button>-->
<!--                </div>-->
                <div class="call-to-action text-right" data-toggle="modal" data-target="#RequestCallMeFormModal">
                    <a class="sign-up"><?=$getSecond['buttonText']?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="fh5co-pricing" data-section="pricing" class="hidden-sm hidden-xs">
    <div class="fh5co-pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate"><?=$loc == 'uk'?$tariffs->title_uk:$tariffs->title_ru?></h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">
                            <h3 class="to-animate"><?=$loc == 'uk'?$tariffs->disc_uk:$tariffs->disc_ru?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="pricing">
                    <?php foreach ($listTariffs as $list):?>
                    <div class="col-md-4">
                        <div class="price-box to-animate-2 popular">
                            <h2 class="pricing-plan pricing-plan-offer"><?=$loc=='uk'?$list->title_uk:$list->title_ru?></h2>
                            <div class="price"><sup class="currency">грн</sup><?=$list->cost?><small>/<?=$loc=='uk'?$list->period_uk:$list->period_ru?></small></div>
                            <ul>
                                <?php foreach ($lisListTariffs[$list->id] as $listList):?>
                                <li><p><i class="icon-check2"></i><?=$loc == 'uk'?$listList->text_uk:$listList->text_ru?></p></li>

                                <?php endforeach;?>
                                <div class="call-to-action text-right" data-toggle="modal" data-target="#RequestCallMeFormModal">
                                    <a class="sign-up btn btn-select-plan btn-sm"><?=$loc == 'uk'?'Записатися':'Записаться'?></a>
                                </div>
<!--                                <button onClick="LIRAX.showWidget()" class="btn btn-select-plan btn-sm">--><?//=$loc == 'uk'?'Записатися':'Записаться'?><!--</button>-->
                            </ul>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="getting-started getting-started-2 hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="to-animate">
                <h3 class="text-center"><?=($loc =='uk')?$gettingThird->title_uk:$gettingThird->title_ru?></h3>
                <?php foreach ($listGettingThird as $list):?>
                <div class="col-md-2 text-center">
                    <div class="col-md-9">
                        <img src="/images/<?=$list->image?>" class="img-responsive" alt="images">
                        <p><?=$loc == 'uk'?$list->text_uk:$list->text_ru?></p>
                    </div>
                    <div class="col-md-3">
                        <img src="/images/<?=$list->isLast==1?'micr.png':'red-plus-md.png'?>" alt="plus">
                    </div>
                </div>
                <?php endforeach;?>

                <div class="col-md-2 text-center">
                    <h3><?=$gettingThird->cost?><br>грн</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="fh5co-services" data-section="services" class="hidden-sm hidden-xs">
    <div class="fh5co-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate"><?= $loc == 'uk'?$services->header_title_ua:$services->header_title_ru?></h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">
                            <h3 class="to-animate"><?= $loc == 'uk'?$services->disc_uk:$services->disc_ru?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($listServices as $list):?>
                <div class="col-md-4">
                    <div class="box-services">
                        <i class="<?=$list->image?> to-animate-2"></i>
                        <div class="fh5co-post to-animate">
                            <h3><?=$loc=='uk'?$list->block_title_uk:$list->block_title_ru?></h3>
                            <p><?=$loc=='uk'?$list->text_uk:$list->text_ru?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<div class="getting-started getting-started-1 hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-8 to-animate">
                <h3><?=$loc=='uk'?$gettingFourth->title_uk:$gettingFourth->title_ru?></h3>
                <p><?=$loc=='uk'?$gettingFourth->disc_uk:$gettingFourth->disc_ru?></p>
            </div>
            <div class="col-md-4 to-animate-2">
                <div class="call-to-action text-right">
                    <a href="<?=\yii\helpers\Url::to('https://m.me/studentWay20172018')?>" target="_blank" class="sign-up"><?=$loc=='uk'?$gettingFourth->button_text_uk:$gettingFourth->button_text_ru?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="fh5co-team" data-section="team" class="hidden-sm hidden-xs">
    <div class="fh5co-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate"><?=$loc == 'uk'?$team->header_title_uk:$team->header_title_ru?></h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">
                            <h3 class="to-animate"><?=$loc == 'uk'?$team->disc_uk:$team->disc_ru?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($listTeam as $list):?>
                <div class="col-md-3">
                    <div class="team-box text-center to-animate-2">
                        <div class="user"><img class="img-reponsive" src="/images/<?=$list->image?>" alt="Коваленко Олег"></div>
                        <h3><?=$loc == 'uk'?$list->full_name_uk:$list->full_name_ru?></h3>
                        <span class="position"><?=$loc == 'uk'?$list->post_uk:$list->post_ru?></span>
                        <p><?=$loc == 'uk'?$list->text_uk:$list->text_ru?></p>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<section id="galery" class="hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading text-center">
                <h2 class="to-animate"><?=$loc == 'uk'?'Галерея фотографій':'Галерея фотографий'?></h2>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 subtext">
                        <h3 class="to-animate"><?=$loc == 'uk'?'Для перегляду фото клацніть по ньому':'Для просмотра фотографии кликайте по нему'?></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($gallery as $photo):?>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="img-block" style="background-image: url(<?='/images/'.$photo->image?>);">
                    <a href="/images/<?=$photo->image?>" data-lightbox="image1" class="image-wrap">
                        <div class="descr">
                            <p><i class="icon-zoom-in"></i></p>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach;?>
        </div>

    </div>
</section>
<section id="fh5co-faq" data-section="faq" class="hidden-sm hidden-xs">
    <div class="fh5co-faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate"><?=$loc=='uk'?$question->header_title_uk:$question->header_title_ru?></h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext">
                            <h3 class="to-animate"><?=$loc=='uk'?$question->disc_uk:$question->disc_ru?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($listQuestion as $list):?>
                <div class="col-md-6">
                    <div class="box-faq to-animate-2">
                        <h3><?=$loc=='uk'?$list->title_uk:$list->title_ru?></h3>
                        <ul>
                            <?php foreach ($lisListQuestion[$list->id] as $listList):?>
                            <li><i class="icon-question"></i><?=$loc=='uk'?$listList->text_uk:$listList->text_ru?></li>
                            <?php endforeach;?>
                            <li class="call-to-action"><a data-toggle="modal" data-target="#<?=$list->id?>"><?=$loc == 'uk'?$list->button_text_uk:$list->button_text_ru?></a></li>
                        </ul>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<div class="getting-started getting-started-1 hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-8 to-animate">
                <h3><?=$loc=='uk'?$gettingFifth->title_uk:$gettingFifth->title_ru?></h3>
            </div>

            <div class="col-md-4 to-animate-2" data-toggle="modal" data-target="#RequestCallMeFormModal">
                <div class="call-to-action text-right">
                    <a class="sign-up"><?=$loc=='uk'?$gettingFifth->button_text_uk:$gettingFifth->button_text_ru?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="fh5co-trusted" data-section="trusted" class="hidden-xs hidden-sm hidden-lg hidden-md">
    <div class="fh5co-trusted">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h3 class="to-animate"><?=$loc=='uk'?$partners->header_title_uk:$partners->header_title_ru?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/swps_logo.jpg" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/Pwr_poziom_pl.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/politechnika1.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/Politech.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/pjalogo.jpg" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/PGdansk.gif" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/ok_uw.jpg" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/lublin11.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/LogoUO-light-1.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logoumfc.jpg" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logo20.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logo16.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logo17.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logo13.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logo10.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logo8.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logo5.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logo4.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logo3.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logo2(3).png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logo2(2).png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logo2.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logo1(2).png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/logo1.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/images.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/ahe.png" alt="Partners" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="partner-logo to-animate-2">
                        <img src="/images/logos/1337025811.jpg" alt="Partners" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <h3 class="to-animate"><?=$loc=='uk'?$partners->bottom_title_uk:$partners->bottom_title_ru?></h3>
            </div>
        </div>
    </div>
</section>
<!-- Layout for mobile device-->
<!-- Layout for mibile device block asWellAs -->
<section class="mobi__asWellAs hidden-lg hidden-md">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="mobi__asWellAs_header text-center">
                    <?=nl2br($loc == 'ru'?$mobiAsWellAs['header_ru']:$mobiAsWellAs['header_uk'])?>
                </h2>
                <p class="mobi__asWellAs_desc text-center">
                    <?=nl2br($loc == 'ru'?$mobiAsWellAs['desc_ru']:$mobiAsWellAs['desc_uk']);?>
                </p>
                <div class="mobi__asWellAs_button_one text-center">
                    <?=nl2br($loc == 'ru'?$mobiAsWellAs['button_one_ru']:$mobiAsWellAs['button_one_uk'])?>
                </div>
                <p class="mobi__asWellAss_content">
                  <?=nl2br($loc == 'ru'?$mobiAsWellAs['content_ru']:$mobiAsWellAs['content_uk'])?>
                </p>
                <div class="mobi__asWellAs_button_two text-center" data-toggle="modal" data-target="#RequestCallMeFormModal">
                  <?=nl2br($loc == 'ru'?$mobiAsWellAs['button_two_ru']:$mobiAsWellAs['button_two_uk'])?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end Layout for mibile device block asWellAs -->
<!-- Layout for mobile device block conditions-->
<section class="mobi__connditions hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="mobi__conditions_header text-center">
                    <?=nl2br($loc=='ru'?$mobiConditions['header_ru']:$mobiConditions['header_uk']);?>
                </h2>
                <ul class="mobi__conditions_list">
                  <?php foreach ($mobiConditionsLists as $key => $value): ?>
                    <li><i class="icon-check2"></i>
                      <?=nl2br($loc=='ru'?$value['content_ru']:$value['content_uk']);?>
                    </li>
                  <?php endforeach; ?>
                </ul>
                <div class="mobi__conditions_desc text-center">
                  <?=nl2br($loc=='ru'?$mobiConditions['desc_ru']:$mobiConditions['desc_uk']);?>
                </div>
                <div class="mobi__conditions_button text-center" data-toggle="modal" data-target="#RequestCallMeFormModal">
                  <?=nl2br($loc=='ru'?$mobiConditions['button_ru']:$mobiConditions['button_uk']);?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end Layout for mobile device block conditions-->
<!-- Layout for mobile device block price-->
<div class="mobi__price_header text-center hidden-md hidden-lg">
  <h2><?=$loc=='ru'?'Стоимость курса':'Вартість курсу'?></h2>
</div>
<section class="mobi__price hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <div class="mobi__price_main mobi__price--item-style text-center">
                    <?=nl2br($loc=='ru'?$mobiPrice['header_ru']:$mobiPrice['header_uk']);?>
                </div>
                <div class="text-center"><i class="glyphicon-plus"></i></div>
                <div class="mobi__price_additionally_one mobi__price--item-style text-center">
                  <?=nl2br($loc=='ru'?$mobiPrice['desc_one_ru']:$mobiPrice['desc_one_uk']);?>
                </div>
                <div class="text-center"><i class="glyphicon-plus"></i></div>
                <div class="mobi__price_additionally_two mobi__price--item-style text-center">
                  <?=nl2br($loc=='ru'?$mobiPrice['desc_two_ru']:$mobiPrice['desc_two_uk']);?>
                </div>
                <div class="mobi__price_button text-center" data-toggle="modal" data-target="#RequestCallMeFormModal">
                  <?=nl2br($loc=='ru'?$mobiPrice['button_ru']:$mobiPrice['button_uk']);?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end Layout for mobile device block price-->
<!-- end Layout for mobile device-->
<div id="fh5co-footer" data-section="contact" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-3 to-animate hidden-xs hidden-sm">
                <h3 class="section-title"><?=$loc=='uk'?$footer->aboutus_title_uk:$footer->aboutus_title_ru?></h3>
                <p><?=$loc=='uk'?$footer->about_text_uk:$footer->about_text_ru?></p>
                <p class="copy-right"><?=$loc=='uk'?$footer->copyright_uk:$footer->copyright_ru?><br>
                </p>
            </div>

            <div class="col-md-3 to-animate">
                <h3 class="section-title"><?=$loc=='uk'?$footer->address_title_uk:$footer->address_title_ru?></h3>
                <ul class="contact-info">
                    <li><i class="icon-map-marker"></i><?=$loc=='uk'?$footer->address_text_uk:$footer->address_text_ru?></li>
                    <li><i class="icon-phone"></i><a href="tel:<?=$footer->phone_number?>"><?=$footer->phone_number?></a></li>
                    <li><i class="icon-envelope"></i><a href="mailto:<?=$footer->email?>"><?=$footer->email?></a></li>
                    <li><i class="icon-globe2"></i><a href="<?=$footer->site?>"><?=$footer->site?></a></li>
                </ul>
            </div>

            <div class="col-md-6 to-animate hidden-xs hidden-sm">
                <h3 class="section-title"><?=$loc == 'uk'?'Як добратися?':'Как к нам добраться?'?></h3>
                    <div id="map">
                        <?php

                        $src = '';
                            if($reg == 'dp')
                                $src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4452.486714478088!2d35.035281110927045!3d48.428425342677514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbfcb347737ead%3A0x125dda796521111c!2zU3R1ZGVudFdheSDQkNCz0LXQvdGC0YHRgtCy0L4g0L7QsdGA0LDQt9C-0LLQsNGC0LXQu9GM0L3Ri9GFINC_0YDQvtCz0YDQsNC80Lwg0JTQvdC10L_RgA!5e0!3m2!1sru!2sus!4v1506984335359";
                            if($reg == 'vn')
                                $src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.291438254018!2d28.442994950577194!3d49.23296347922456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5c86c28d3eed%3A0x160a50fc5d43f9bc!2z0KXQvNC10LvRjNC90LjRhtGM0LrQtSDRiNC-0YHQtSwgMTMsINCS0ZbQvdC90LjRhtGPLCDQktGW0L3QvdC40YbRjNC60LAg0L7QsdC70LDRgdGC0YwsINCj0LrRgNCw0LjQvdCwLCAyMTAwMA!5e0!3m2!1sru!2sru!4v1507193219554";
                            if($reg == 'ky')
                                $src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325515.68164517457!2d30.25250504896722!3d50.40213675146026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1510436657838";
                            if($reg == 'kh')
                                $src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d164153.52371572715!2d36.14539728369241!3d49.99450661015919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a09f63ab0f8b%3A0x2d4c18681aa4be0a!2z0KXQsNGA0YzQutC-0LIsINCl0LDRgNGM0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1507220270372";
                            if($reg == 'kv')
                                $src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2643.308762734057!2d32.26774685088356!3d48.508145479152894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d042a8ca156fd9%3A0xab8642bd01e8e072!2z0LLRg9C70LjRhtGPINCS0ZbQutGC0L7RgNCwINCn0LzRltC70LXQvdC60LAsIDk4LCDQmtGA0L7Qv9C40LLQvdC40YbRjNC60LjQuSwg0JrRltGA0L7QstC-0LPRgNCw0LTRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1507219690327";
                            if($reg == 'km')
                                $src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2613.9611061841074!2d33.41311345090747!3d49.06837397920706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d75323f6347f47%3A0x7d67accf81c18ccb!2z0KHQvtCx0L7RgNC90LAg0LLRg9C70LjRhtGPLCAxNS80Miwg0JrRgNC10LzQtdC90YfRg9C6LCDQn9C-0LvRgtCw0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1507219954129";
                            if($reg == 'iz')
                                $src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2804.224499370225!2d28.83432185075299!3d45.34428027899721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b765fde57f9127%3A0x6639c62f44c59c7e!2z0LLRg9C70LjRhtGPINCe0YHQuNC_0LXQvdC60LAsINCG0LfQvNCw0ZfQuywg0J7QtNC10YHRjNC60LAg0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1507219536579";
                            if($reg == 'od')
                                $src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d175899.856000126!2d30.571359448334256!3d46.4598860667241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6318a0b864c43%3A0x129f8fe28cf2176c!2z0J7QtNC10YHRgdCwLCDQntC00LXRgdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2NTAwMA!5e0!3m2!1sru!2sua!4v1507219892129";
                            if($reg == 'bc')
                                $src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d164798.05109208325!2d29.981558098876558!3d49.80544016346137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d3423e37227b9d%3A0x84e311f8582cc6e8!2z0JHQtdC70LDRjyDQptC10YDQutC-0LLRjCwg0JrQuNC10LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgMDkxMDA!5e0!3m2!1sru!2sua!4v1507219809319";
                            if($reg == 'sl')
                                $src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d168014.47755305227!2d37.47401327505198!3d48.85389663297198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40df9acd5520fccd%3A0xdf8f2b8784d27762!2z0KHQu9Cw0LLRj9C90YHQuiwg0JTQvtC90LXRhtC60LDRjyDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1507219763704";

                        ?>

                       <iframe src="<?=$src?>" id="map" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
            </div>
        </div>
    </div>
</div>


<?php foreach ($listQuestion as $list):?>
<div class="modal fade" id="<?=$list->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel"><?=$loc=='uk'?$list->title_uk:$list->title_ru?></h3>
            </div>
            <div class="modal-body">
                <?php foreach ($listModalQuestion[$list->id] as $listList):?>
                <h4 class="page-header"><?=$loc =='uk'?$listList->title_uk:$listList->title_ru?></h4>
                <p><?=$loc =='uk'?$listList->text_uk:$listList->text_ru?></p>
                <?php endforeach;?>
            </div>
            <div class="modal-footer">
                <a type="button" class="call-to-action" data-dismiss="modal"><?=$loc=='uk'?'Закрити':'Закрыть'?></a>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>

<!-- Modal -->
<div class="modal fade" id="recordForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title" id="myModalLabel"><?=$loc=='ru'?'Записать на субботу.':'Записати на суботу.'?></h3>
            </div>
            <?php $form = ActiveForm::begin(['id'=>'RecordForm']);?>
            <div class="modal-body">
                <?=$form->field($model,'name')->textInput()->label($loc=='uk'?'Ім\'я':'Имя');?>
                <?=$form->field($model,'phoneNumber')->textInput()->label();?>
                <?=$form->field($model,'email')->textInput()->label();?>
            </div>
            <div class="modal-footer">
                <button type="button" class="call-to-action" data-dismiss="modal"><?=$loc=='uk'?'Відміна':'Отмена'?></button>
                <?= Html::submitButton($loc=='ru'?'Записаться':'Записатися',['class'=>'call-to-action'])?>
            </div>
            <?php ActiveForm::end();?>
        </div>
    </div>
</div>
<div class="modal fade" id="recordForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title" id="myModalLabel"><?=$loc=='ru'?'Записать на субботу.':'Записати на суботу.'?></h3>
            </div>
            <?php $form = ActiveForm::begin(['id'=>'RecordForm']);?>
            <div class="modal-body">
                <?=$form->field($model,'name')->textInput()->label($loc=='uk'?'Ім\'я':'Имя');?>
                <?=$form->field($model,'phoneNumber')->textInput()->label();?>
                <?=$form->field($model,'email')->textInput()->label();?>
            </div>
            <div class="modal-footer">
                <button type="button" class="call-to-action" data-dismiss="modal"><?=$loc=='uk'?'Відміна':'Отмена'?></button>
                <?= Html::submitButton($loc=='ru'?'Записаться':'Записатися',['class'=>'call-to-action'])?>
            </div>
            <?php ActiveForm::end();?>
        </div>
    </div>
</div>
<div class="modal fade" id="RequestCallMeFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabeMain" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <p><?=nl2br($loc=='ru'?$formHome['desc_ru']:$formHome['desc_uk'])?></p>
                <h3><?=nl2br($loc=='ru'?$formHome['header_ru']:$formHome['header_uk'])?></h3>
            </div>
            <?php $form = ActiveForm::begin(['id'=>'RequestCallMeForm2', 'options'=>['class'=>'form']]);?>
            <div class="modal-body">
                <?= $form->field($modelRequestCallMe, 'region_key')
                    ->textInput(['class'=>'hidden', 'value'=>$reg])->label(false);?>
                <?= $form->field($modelRequestCallMe, 'fullname')
                    ->textInput(['class'=>'form-control','placeholder'=>nl2br($loc=='ru'?$formHome['name_placeholder_ru']:$formHome['name_placeholder_uk']), 'id'=>'fullname'])
                    ->label(false);?>
                <?= $form->field($modelRequestCallMe, 'tall_number')
                    ->textInput(['class'=>'form-control','placeholder'=>nl2br($loc=='ru'?$formHome['tell_placeholder_ru']:$formHome['tell_placeholder_uk']), 'id'=>'phoneNumber2'])
                    ->label(false);?>
            </div>
            <div class="modal-footer">
                <button type="button" class="call-to-action" data-dismiss="modal"><?=$loc=='uk'?'Відміна':'Отмена'?></button>
                <?= Html::submitButton(nl2br($loc=='ru'?$formHome['button_text_ru']:$formHome['button_text_uk']),['class'=>'call-to-action'])?>
            </div>
            <?php ActiveForm::end();?>
        </div>
    </div>
</div>
<!-- Alerts -->
<div class="alert alert-success record-success">
    <?=$loc=='uk'?'Ви успішно записалися':'Запись прошла успешно'?>
</div>
<div class="alert alert-danger record-danger">
    <?=$loc=='uk'?'Ви вже записан.і':'Не вышло! Вы уже записались.'?>
</div>
<div class="alert alert-success ask-success">
    <?=$loc=='uk'?'Питання відправлено.':'Вопрос отпрален.'?>
</div>
<div class="alert alert-danger ask-danger">
    <?=$loc=='uk'?'Питання не відправлено!':'Вопрос не отправлен.'?>
</div>
