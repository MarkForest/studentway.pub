<?php
namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\models\MobiHome;
use app\modules\admin\models\MobiHomeForm;
use app\modules\admin\models\MobiExploreForm;
use app\modules\admin\models\MobiAdditionallyForm;
use app\modules\admin\models\MobiAsWellAsForm;
use app\modules\admin\models\MobiConditonsForm;
use app\modules\admin\models\MobiPriceForm;
use app\models\MobiExplore;
use app\models\MobiExploreList;
use app\models\MobiExploreLevels;
use app\models\MobiAdditionally;
use app\models\MobiAdditionallyList;
use app\models\MobiAsWellAs;
use app\models\MobiConditons;
use app\models\MobiConditonsList;
use app\models\MobiPrice;



class MobiCoursePolishController extends controller
{
  // Ajax Home
  public function actionSaveMobiHome(){
    $mobiHomeForm = new MobiHomeForm();
    if(Yii::$app->request->isAjax){
      $mobiHomeForm->desc_ru = $_POST['MobiHomeForm']['desc_ru'];
      $mobiHomeForm->desc_uk = $_POST['MobiHomeForm']['desc_uk'];
      $mobiHomeForm->header_ru = $_POST['MobiHomeForm']['header_ru'];
      $mobiHomeForm->header_uk = $_POST['MobiHomeForm']['header_uk'];
      $mobiHomeForm->contact_one = $_POST['MobiHomeForm']['contact_one'];
      $mobiHomeForm->contact_two = $_POST['MobiHomeForm']['contact_two'];
      $mobiHomeForm->address_ru = $_POST['MobiHomeForm']['address_ru'];
      $mobiHomeForm->address_uk = $_POST['MobiHomeForm']['address_uk'];
      $mobiHomeForm->reg = $_POST['MobiHomeForm']['reg'];
      return ($mobiHomeForm->validate() && $mobiHomeForm->saveData());
    }
  }
  // Ajax Explore
  public function actionSaveMobiExplore(){
    $mobiExploreForm = new MobiExploreForm();
    if(Yii::$app->request->isAjax){
      $mobiExploreForm->button_ru = $_POST['MobiExploreForm']['button_ru'];
      $mobiExploreForm->button_uk = $_POST['MobiExploreForm']['button_uk'];
      $mobiExploreForm->header_ru = $_POST['MobiExploreForm']['header_ru'];
      $mobiExploreForm->header_uk = $_POST['MobiExploreForm']['header_uk'];
      $mobiExploreForm->mobiExploreList = $_POST['MobiExploreForm']['mobiExploreList'];
      $mobiExploreForm->mobiExploreLevels = $_POST['MobiExploreForm']['mobiExploreLevels'];
      $mobiExploreForm->reg = $_POST['MobiExploreForm']['reg'];
      return ($mobiExploreForm->validate() && $mobiExploreForm->saveData());
    }
  }
  // Ajax Additionally
  public function actionSaveMobiAdditionally(){
    $mobiAdditionallyForm = new MobiAdditionallyForm();
    if(Yii::$app->request->isAjax){
      $mobiAdditionallyForm->desc_ru = $_POST['MobiAdditionallyForm']['desc_ru'];
      $mobiAdditionallyForm->desc_uk = $_POST['MobiAdditionallyForm']['desc_uk'];
      $mobiAdditionallyForm->header_ru = $_POST['MobiAdditionallyForm']['header_ru'];
      $mobiAdditionallyForm->header_uk = $_POST['MobiAdditionallyForm']['header_uk'];
      $mobiAdditionallyForm->mobiAdditionallyLists = $_POST['MobiAdditionallyForm']['mobiAdditionallyLists'];
      $mobiAdditionallyForm->reg = $_POST['MobiAdditionallyForm']['reg'];
      return ($mobiAdditionallyForm->validate() && $mobiAdditionallyForm->saveData());
    }
  }
  // Ajax As Well As
  public function actionSaveMobiAsWellAs(){
    $mobiAsWellAsForm = new MobiAsWellAsForm();
    if(Yii::$app->request->isAjax){
      $mobiAsWellAsForm->desc_ru = $_POST['MobiAsWellAsForm']['desc_ru'];
      $mobiAsWellAsForm->desc_uk = $_POST['MobiAsWellAsForm']['desc_uk'];
      $mobiAsWellAsForm->header_ru = $_POST['MobiAsWellAsForm']['header_ru'];
      $mobiAsWellAsForm->header_uk = $_POST['MobiAsWellAsForm']['header_uk'];
      $mobiAsWellAsForm->button_one_ru = $_POST['MobiAsWellAsForm']['button_one_ru'];
      $mobiAsWellAsForm->button_one_uk = $_POST['MobiAsWellAsForm']['button_one_uk'];
      $mobiAsWellAsForm->button_two_ru = $_POST['MobiAsWellAsForm']['button_two_ru'];
      $mobiAsWellAsForm->button_two_uk = $_POST['MobiAsWellAsForm']['button_two_uk'];
      $mobiAsWellAsForm->content_ru = $_POST['MobiAsWellAsForm']['content_ru'];
      $mobiAsWellAsForm->content_uk = $_POST['MobiAsWellAsForm']['content_uk'];
      $mobiAsWellAsForm->reg = $_POST['MobiAsWellAsForm']['reg'];
      return ($mobiAsWellAsForm->validate() && $mobiAsWellAsForm->saveData());
    }
  }

  // Ajax Conditons
  public function actionSaveMobiConditons(){
    $mobiConditionsForm = new MobiConditonsForm();
    if(Yii::$app->request->isAjax){
      $mobiConditionsForm->desc_ru = $_POST['MobiConditonsForm']['desc_ru'];
      $mobiConditionsForm->desc_uk = $_POST['MobiConditonsForm']['desc_uk'];
      $mobiConditionsForm->header_ru = $_POST['MobiConditonsForm']['header_ru'];
      $mobiConditionsForm->header_uk = $_POST['MobiConditonsForm']['header_uk'];
      $mobiConditionsForm->button_ru = $_POST['MobiConditonsForm']['button_ru'];
      $mobiConditionsForm->button_uk = $_POST['MobiConditonsForm']['button_uk'];
      $mobiConditionsForm->mobiConditionsList = $_POST['MobiConditonsForm']['mobiConditionsList'];
      $mobiConditionsForm->reg = $_POST['MobiConditonsForm']['reg'];
      return ($mobiConditionsForm->validate() && $mobiConditionsForm->saveData());
    }
  }
  // Ajax Price
  public function actionSaveMobiPrice(){
    $mobiPriceForm = new MobiPriceForm();
    if(Yii::$app->request->isAjax){
      $mobiPriceForm->desc_one_ru = $_POST['MobiPriceForm']['desc_one_ru'];
      $mobiPriceForm->desc_one_uk = $_POST['MobiPriceForm']['desc_one_uk'];
      $mobiPriceForm->desc_two_ru = $_POST['MobiPriceForm']['desc_two_ru'];
      $mobiPriceForm->desc_two_uk = $_POST['MobiPriceForm']['desc_two_uk'];
      $mobiPriceForm->header_ru = $_POST['MobiPriceForm']['header_ru'];
      $mobiPriceForm->header_uk = $_POST['MobiPriceForm']['header_uk'];
      $mobiPriceForm->button_ru = $_POST['MobiPriceForm']['button_ru'];
      $mobiPriceForm->button_uk = $_POST['MobiPriceForm']['button_uk'];
      $mobiPriceForm->reg = $_POST['MobiPriceForm']['reg'];
      return ($mobiPriceForm->validate() && $mobiPriceForm->saveData());
    }
  }

  public function actionIndex($reg='dp'){
    if($reg=='dp')$drop = 'Днепр';
    if($reg=='ky')$drop = 'Киев';
    if($reg=='kh')$drop = 'Харьков';
    if($reg=='vn')$drop = 'Винница';
    if($reg=='kv')$drop = 'Кропивницькый';
    if($reg=='km')$drop = 'Кременчук';
    if($reg=='iz')$drop = 'Измаил';
    if($reg=='od')$drop = 'Одесса';
    if($reg=='bc')$drop = 'Белая Церковь';
    if($reg=='sl')$drop = 'Cловянск';
    //MobiHome
    $mobiHome = MobiHome::findOne(['region_key'=>$reg]);
    $mobiHomeForm = new MobiHomeForm;
    //MobiExplore
    $mobiExplore = MobiExplore::findOne(['region_key'=>$reg]);
    $mobiExploreLists = MobiExploreList::find()->where(['MobiExplore_id'=>$mobiExplore['id']])->all();
    $mobiExploreLevels = MobiExploreLevels::find()->where(['MobiExplore_id'=>$mobiExplore['id']])->all();
    $mobiExploreForm = new MobiExploreForm();
    //MobiAdditionally
    $mobiAdditionally = MobiAdditionally::findOne(['region_key'=>$reg]);
    $mobiAdditionallyList = MobiAdditionallyList::find()->where(['MobiAdditionally_id'=>$mobiAdditionally['id']])->all();
    $mobiAdditionallyForm = new MobiAdditionallyForm();
    //mobiAsWellAs
    $mobiAsWellAs = MobiAsWellAs::findOne(['region_key'=>$reg]);
    $mobiAsWellAsForm = new MobiAsWellAsForm();

    //mobiConditions
    $mobiConditions = MobiConditons::findOne(['region_key'=>$reg]);
    $mobiConditionsLists = MobiConditonsList::find()->where(['MobiConditions_id'=>$mobiConditions['id']])->all();
    $mobiConditonsForm = new MobiConditonsForm();

    //MobiPrice
    $mobiPrice = MobiPrice::findOne(['region_key'=>$reg]);
    $mobiPriceForm = new MobiPriceForm();

    return $this->render('index',[
      'drop'=>$drop,
      'reg'=>$reg,
      'mobiHome'=>$mobiHome,
      'mobiHomeForm'=>$mobiHomeForm,
      'mobiExplore'=>$mobiExplore,
      'mobiExploreLists' =>$mobiExploreLists,
      'mobiExploreLevels'=>$mobiExploreLevels,
      'mobiExploreForm'=>$mobiExploreForm,
      'mobiAsWellAs'=>$mobiAsWellAs,
      'mobiAsWellAsForm'=>$mobiAsWellAsForm,
      'mobiConditions'=>$mobiConditions,
      'mobiConditonsForm'=>$mobiConditonsForm,
      'mobiConditionsLists'=>$mobiConditionsLists,
      'mobiPrice' => $mobiPrice,
      'mobiPriceForm'=>$mobiPriceForm,
      'mobiAdditionally'=>$mobiAdditionally,
      'mobiAdditionallyList'=>$mobiAdditionallyList,
      'mobiAdditionallyForm'=>$mobiAdditionallyForm,
    ]);
  }
}
 ?>
