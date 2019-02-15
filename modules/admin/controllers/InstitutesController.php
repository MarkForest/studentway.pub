<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 27.09.17
 * Time: 2:33
 */

namespace app\modules\admin\controllers;


use app\models\IEighth;
use app\models\IFifth;
use app\models\IFifthList;
use app\models\IFirst;
use app\models\IFirstList;
use app\models\IFourth;
use app\models\IFourthList;
use app\models\IHome;
use app\models\IHomeList;
use app\models\IHomePhoto;
use app\models\IMenu;
use app\models\ISecond;
use app\models\ISecondList;
use app\models\ISeventh;
use app\models\ISeventhList;
use app\models\ISixth;
use app\models\ISixthList;
use app\models\IThird;
use app\models\IThirdList;
use app\modules\admin\models\IEighthForm;
use app\modules\admin\models\IFifthForm;
use app\modules\admin\models\IFirstForm;
use app\modules\admin\models\IFourthForm;
use app\modules\admin\models\IHomeForm;
use app\modules\admin\models\ISecondForm;
use app\modules\admin\models\ISeventhForm;
use app\modules\admin\models\ISixthForm;
use app\modules\admin\models\IThirdForm;
use Yii;
use yii\web\Controller;

class InstitutesController extends Controller
{
    //Ajax Home
    public function actionSaveHome(){
        $iHomeForm = new IHomeForm();
        if(Yii::$app->request->isAjax){
            $iHomeForm->itoken = $_POST['IHomeForm']['itoken'];
            $iHomeForm->logo_title_uk = $_POST['IHomeForm']['logo_title_uk'];
            $iHomeForm->logo_title_ru = $_POST['IHomeForm']['logo_title_ru'];
            $iHomeForm->top_description_uk=$_POST['IHomeForm']['top_description_uk'];
            $iHomeForm->top_description_ru=$_POST['IHomeForm']['top_description_ru'];
            $iHomeForm->main_description_uk=$_POST['IHomeForm']['main_description_uk'];
            $iHomeForm->main_description_ru=$_POST['IHomeForm']['main_description_ru'];
            $iHomeForm->header_uk=$_POST['IHomeForm']['header_uk'];
            $iHomeForm->header_ru=$_POST['IHomeForm']['header_ru'];
            $iHomeForm->city_uk=$_POST['IHomeForm']['city_uk'];
            $iHomeForm->city_ru=$_POST['IHomeForm']['city_ru'];

            $iHomeForm->home_uk=$_POST['IHomeForm']['home_uk'];
            $iHomeForm->home_ru=$_POST['IHomeForm']['home_ru'];
            $iHomeForm->wedo_uk=$_POST['IHomeForm']['wedo_uk'];
            $iHomeForm->wedo_ru=$_POST['IHomeForm']['wedo_ru'];
            $iHomeForm->level_uk=$_POST['IHomeForm']['level_uk'];
            $iHomeForm->level_ru=$_POST['IHomeForm']['level_ru'];
            $iHomeForm->portfolio_uk=$_POST['IHomeForm']['portfolio_uk'];
            $iHomeForm->portfolio_ru=$_POST['IHomeForm']['portfolio_ru'];
            $iHomeForm->sent_uk=$_POST['IHomeForm']['sent_uk'];
            $iHomeForm->sent_ru=$_POST['IHomeForm']['sent_ru'];
            $iHomeForm->price_uk=$_POST['IHomeForm']['price_uk'];
            $iHomeForm->price_ru=$_POST['IHomeForm']['price_ru'];
            $iHomeForm->contact_uk=$_POST['IHomeForm']['contact_uk'];
            $iHomeForm->contact_ru=$_POST['IHomeForm']['contact_ru'];
            $iHomeForm->homeList=$_POST['IHomeForm']['homeList'];
            return ($iHomeForm->validate()&&$iHomeForm->saveData());
        }
    }

    public function actionSaveFirst(){
        $iFirstForm = new IFirstForm();
        if(Yii::$app->request->isAjax){
            $iFirstForm->title_ru = $_POST['IFirstForm']['title_ru'];
            $iFirstForm->title_uk = $_POST['IFirstForm']['title_uk'];
            $iFirstForm->iToken = $_POST['IFirstForm']['iToken'];
            $iFirstForm->firstList = $_POST['IFirstForm']['firstList'];
            return ($iFirstForm->validate()&&$iFirstForm->saveData());
        }
    }

    public function actionSaveSecond(){
        $iSecondForm = new ISecondForm();
        if(Yii::$app->request->isAjax){
            $iSecondForm->iToken = $_POST['ISecondForm']['iToken'];
            $iSecondForm->title_uk=$_POST['ISecondForm']['title_uk'];
            $iSecondForm->title_ru=$_POST['ISecondForm']['title_ru'];
            $iSecondForm->top_description_uk=$_POST['ISecondForm']['top_description_uk'];
            $iSecondForm->top_description_ru=$_POST['ISecondForm']['top_description_ru'];
            $iSecondForm->description_uk=$_POST['ISecondForm']['description_uk'];
            $iSecondForm->description_ru=$_POST['ISecondForm']['description_ru'];
            $iSecondForm->secondList = $_POST['ISecondForm']['secondList'];
            return ($iSecondForm->validate()&&$iSecondForm->saveData());
        }
    }

    public function actionSaveThird(){
        $iThirdForm = new IThirdForm();
        if(Yii::$app->request->isAjax){
            $iThirdForm->itoken = $_POST['IThirdForm']['itoken'];
            $iThirdForm->title_ru = $_POST['IThirdForm']['title_ru'];
            $iThirdForm->title_uk = $_POST['IThirdForm']['title_uk'];
            $iThirdForm->thirdList = $_POST['IThirdForm']['thirdList'];
            return ($iThirdForm->validate()&&$iThirdForm->saveData());
        }
    }

    public function actionSaveFourth(){
        $iFourthForm = new IFourthForm();
        if(Yii::$app->request->isAjax){
            $iFourthForm->itoken = $_POST['IFourthForm']['itoken'];
            $iFourthForm->title_ru = $_POST['IFourthForm']['title_ru'];
            $iFourthForm->title_uk = $_POST['IFourthForm']['title_uk'];
            $iFourthForm->fourthList = $_POST['IFourthForm']['fourthList'];
            return ($iFourthForm->validate()&&$iFourthForm->saveData());
        }
    }

    public function actionSaveFifth(){
        $iFifthForm = new IFifthForm();
        if(Yii::$app->request->isAjax){
            $iFifthForm->itoken = $_POST['IFifthForm']['itoken'];
            $iFifthForm->title_ru = $_POST['IFifthForm']['title_ru'];
            $iFifthForm->title_uk = $_POST['IFifthForm']['title_uk'];
            $iFifthForm->fifthList = $_POST['IFifthForm']['fifthList'];
            return ($iFifthForm->validate()&&$iFifthForm->saveData());
        }
    }

    public function actionSaveSixth(){
        $iSixthForm = new ISixthForm();
        if(Yii::$app->request->isAjax){
            $iSixthForm->itoken = $_POST['ISixthForm']['itoken'];
            $iSixthForm->title_ru = $_POST['ISixthForm']['title_ru'];
            $iSixthForm->title_uk = $_POST['ISixthForm']['title_uk'];
            $iSixthForm->sixthList = $_POST['ISixthForm']['sixthList'];
            return ($iSixthForm->validate()&&$iSixthForm->saveData());
        }
    }

    public function actionSaveSeventh(){
        $iSeventhForm = new ISeventhForm();
        if(Yii::$app->request->isAjax){
            $iSeventhForm->itoken = $_POST['ISeventhForm']['itoken'];
            $iSeventhForm->title_ru = $_POST['ISeventhForm']['title_ru'];
            $iSeventhForm->title_uk = $_POST['ISeventhForm']['title_uk'];
            $iSeventhForm->seventhList = $_POST['ISeventhForm']['seventhList'];
            return ($iSeventhForm->validate()&&$iSeventhForm->saveData());
        }
    }

    public function actionSaveEighth(){
        $iEighthForm = new IEighthForm();
        if(Yii::$app->request->isAjax){
            $iEighthForm->load(Yii::$app->request->post());
            return ($iEighthForm->validate()&&$iEighthForm->saveData());
        }
    }




    public function actionIndex($reg = 'modzewskogo'){
        //Шапка сайта iHome
        $iHome = IHome::findOne(['itoken'=>$reg])->toArray();
        $iMenu = IMenu::findOne(['itoken'=>$reg])->toArray();
        $iHomeList = IHomeList::find()->where(['iHome_id'=>$iHome['id']])->all();
        $iHomePhoto = IHomePhoto::find()->where(['iHome_id'=>$iHome['id']])->all();

        //Block iFirst
        $iFirst = IFirst::findOne(['iToken'=>$reg])->toArray();
        $iFirstList = IFirstList::find()->where(['iFirst_id'=>$iFirst['id']])->all();
        $iFirstIcons = [
            'icon-chat',
            'icon-happy',
            'icon-documents',
            'icon-flag',
            'icon-gears',
            'icon-calendar',
        ];

        //Block iSecond
        $iSecond = ISecond::findOne(['iToken'=>$reg])->toArray();
        $iSecondList = ISecondList::find()->where(['iSecond_id'=>$iSecond['id']])->all();

        //Block Third
        $iThird = IThird::findOne(['itoken'=>$reg])->toArray();
        $iThirdList = IThirdList::find()->where(['iThird_id'=>$iThird['id']])->all();

        //Block Fourth
        $iFourth = IFourth::findOne(['itoken'=>$reg])->toArray();
        $iFourthList = IFourthList::find()->where(['iFourth_id'=>$iFourth['id']])->all();

        //Block Fifth
        $iFifth = IFifth::findOne(['itoken'=>$reg]);
        $iFifthList = IFifthList::find()->where(['iFifth_id'=>$iFifth['id']])->all();

        //Block Sixth
        $iSixth = ISixth::findOne(['itoken'=>$reg])->toArray();
        $iSixthList = ISixthList::find()->where(['iSixth_id'=>$iSixth['id']])->all();

        //Block Seventh
        $iSeventh = ISeventh::findOne(['itoken'=>$reg])->toArray();
        $iSeventhList = ISeventhList::find()->where(['iSeventh_id'=>$iSeventh['id']])->all();

        //Block iEighth
        $iEighth = IEighth::findOne(['itoken'=>$reg])->toArray();

        $iHomeForm = new IHomeForm();
        $iFirstForm = new IFirstForm();
        $iSecondForm = new ISecondForm();
        $iThirdForm = new IThirdForm();
        $iFourthForm = new IFourthForm();
        $iFifthForm = new IFifthForm();
        $iSixthForm = new ISixthForm();
        $iSeventhForm = new ISeventhForm();
        $iEighthForm = new IEighthForm();

        return $this->render('index',[
            'reg'=>$reg,
            'iHome'=>$iHome,
            'iMenu'=>$iMenu,
            'iHomeList'=>$iHomeList,
            'iHomePhoto'=>$iHomePhoto,
            'iFirst'=>$iFirst,
            'iFirstList'=>$iFirstList,
            'iFirstIcons'=>$iFirstIcons,
            'iSecond'=>$iSecond,
            'iSecondList'=>$iSecondList,
            'iThird'=>$iThird,
            'iThirdList'=>$iThirdList,
            'iFourth'=>$iFourth,
            'iFourthList'=>$iFourthList,
            'iFifth'=>$iFifth,
            'iFifthList'=>$iFifthList,
            'iSixth'=>$iSixth,
            'iSixthList'=>$iSixthList,
            'iSeventh'=>$iSeventh,
            'iSeventhList'=>$iSeventhList,
            'iEighth'=>$iEighth,
            'iHomeForm'=>$iHomeForm,
            'iFirstForm'=>$iFirstForm,
            'iSecondForm'=>$iSecondForm,
            'iThirdForm'=>$iThirdForm,
            'iFourthForm'=>$iFourthForm,
            'iFifthForm'=>$iFifthForm,
            'iSixthForm'=>$iSixthForm,
            'iSeventhForm'=>$iSeventhForm,
            'iEighthForm'=>$iEighthForm,
        ]);
    }
}