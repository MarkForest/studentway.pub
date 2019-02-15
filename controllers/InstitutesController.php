<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 22.10.17
 * Time: 12:42
 */

namespace app\controllers;


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
use app\models\iLevelMessageForm;
use app\models\IMenu;
use app\models\iMessageContactForm;
use app\models\ISecond;
use app\models\ISecondList;
use app\models\ISeventh;
use app\models\ISeventhList;
use app\models\ISixth;
use app\models\ISixthList;
use app\models\IThird;
use app\models\IThirdList;
use app\models\IThirdListPhoto;
use Yii;
use yii\web\Controller;

class InstitutesController extends Controller
{
    public $layout = 'institute';

    public function actionMessageContact(){
        $iMessageContactForm = new iMessageContactForm();
        if(Yii::$app->request->isAjax){

            $iMessageContactForm->load(Yii::$app->request->post());
            $iMessageContactForm->status = 0;
            return ($iMessageContactForm->validate() && $iMessageContactForm->addMessage());
        }
    }

    public function actionMessageLevel(){
        $iLevelMessageForm = new iLevelMessageForm();
        if(Yii::$app->request->isAjax){

            $iLevelMessageForm->load(Yii::$app->request->post());
            $iLevelMessageForm->status = 0;
            return ($iLevelMessageForm->validate() && $iLevelMessageForm->addLevelMessage());
        }
    }

    public function actionIndex($reg = 'modzewskogo', $loc='uk'){

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

        //MessageContactForm
        $iMessageContactForm = new iMessageContactForm;

        //iLevelMessageForm
        $iLevelMessageForm = new iLevelMessageForm;

        return $this->render('index',[
            'loc'=>$loc,
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
            'MessageContactForm'=>$iMessageContactForm,
            'LevelMessageForm'=>$iLevelMessageForm,
        ]);
    }
}