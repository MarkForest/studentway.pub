<?php

namespace app\controllers;


use app\models\AskQuestionForm;
use app\models\Assurance;
use app\models\Footer;
use app\models\FormHome;
use app\models\Gallery;
use app\models\GettingFifth;
use app\models\GettingFirst;
use app\models\GettingFourth;
use app\models\GettingSecond;
use app\models\GettingThird;
use app\models\Home;
use app\models\ListAssurance;
use app\models\ListGettingThird;
use app\models\ListHome;
use app\models\ListListQuestion;
use app\models\ListListTariffs;
use app\models\ListModalQuestion;
use app\models\ListPrivilege;
use app\models\ListQuestion;
use app\models\ListServices;
use app\models\ListTariffs;
use app\models\ListTeam;
use app\models\ModalQuestion;
use app\models\Partners;
use app\models\Privilege;
use app\models\Question;
use app\models\RecordsForm;
use app\models\Services;
use app\models\Tariffs;
use app\models\Team;
use app\models\MobiHome;
use app\models\MobiExplore;
use app\models\MobiExploreList;
use app\models\MobiExploreLevels;
use app\models\MobiAsWellAs;
use app\models\MobiConditons;
use app\models\MobiConditonsList;
use app\models\MobiAdditionally;
use app\models\MobiAdditionallyList;
use app\models\MobiPrice;
use app\models\RequestCallMeForm;
use Yii;
use yii\web\AssetBundle;
use yii\web\Controller;

class CoursePolishController extends Controller
{
    public $layout = "courses";

    public function actionAskQuestion(){
        $model = new AskQuestionForm();
        if (Yii::$app->request->isAjax){
            $model->load(Yii::$app->request->post());
            $model->status=0;
            return ($model->validate() && $model->addQuestion());
        }
    }

    public function actionSaveRequestCallMe(){
        $requestCallMeForm = new RequestCallMeForm();
        if(Yii::$app->request->isAjax){
            $requestCallMeForm->load(Yii::$app->request->post());
            $requestCallMeForm->status = 0;
            return ($requestCallMeForm->validate() && $requestCallMeForm->addRequestCallMe());
        }
    }

    public function actionIndex($reg='dp',$loc='uk')
    {

        $model = new RecordsForm;
        $modelAsk = new AskQuestionForm;
        $modelRequestCallMe = new RequestCallMeForm();

        if($reg=='dp'&& $loc=='uk')$drop = 'Дніпро (UK)';
        if($reg=='dp'&& $loc=='ru')$drop = 'Днепр (RU)';
        if($reg=='ky'&& $loc=='uk')$drop = 'Київ (UK)';
        if($reg=='ky'&& $loc=='ru')$drop = 'Киев  (RU)';
        if($reg=='kh'&& $loc=='uk')$drop = 'Харьків (UK)';
        if($reg=='kh'&& $loc=='ru')$drop = 'Харьков (RU)';
        if($reg=='vn'&& $loc=='uk')$drop = 'Вінниця (UK)';
        if($reg=='vn'&& $loc=='ru')$drop = 'Винница (RU)';
        if($reg=='kv'&& $loc=='uk')$drop = 'Кропівницький (UK)';
        if($reg=='kv'&& $loc=='ru')$drop = 'Кропивницкий (RU)';
        if($reg=='km'&& $loc=='uk')$drop = 'Кременчуг (UK)';
        if($reg=='km'&& $loc=='ru')$drop = 'Кременчук (RU)';
        if($reg=='iz'&& $loc=='uk')$drop = 'Ізмаил (UK)';
        if($reg=='iz'&& $loc=='ru')$drop = 'Измаил (RU)';
        if($reg=='od'&& $loc=='uk')$drop = 'Одесса (UK)';
        if($reg=='od'&& $loc=='ru')$drop = 'Одесса (RU)';
        if($reg=='bc'&& $loc=='uk')$drop = 'Біла Церква (UK)';
        if($reg=='bc'&& $loc=='ru')$drop = 'Белая Церковь (RU)';
        if($reg=='sl'&& $loc=='uk')$drop = 'Cлов\'янськ (UK)';
        if($reg=='sl'&& $loc=='ru')$drop = 'Славянск (RU)';


        //шапка сайта Home
        $home = Home::findOne(['region_key'=>$reg]);
        $listHome = ListHome::find()->where(['home_id'=>$home->id])->all();
        $formHome = FormHome::findOne(['region_key'=>$reg]);

        //Привелегии
        $privilege = Privilege::findOne(['region_key'=>$reg]);
        $listPrivilege = ListPrivilege::find()->where(['privilege_id'=>$privilege->id])->all();

        //Гарантии
        $assurance = Assurance::findOne(['region_key'=>$reg]);
        $listAssurance = ListAssurance::find()->where(['assurance_id'=>$assurance->id])->all();
        //Первый Синий блок
        if($loc=='uk')
            $gettingFirst = GettingFirst::find()->select(['disc_uk','button_text_uk'])->where(['region_key'=>$reg])->one();
        else
            $gettingFirst = GettingFirst::find()->select(['disc_ru','button_text_ru'])->where(['region_key'=>$reg])->one();

        //Второй Синий блок
        $gettingSecond = GettingSecond::findOne(['region_key'=>$reg]);
        if($loc=='uk')
            $getSecond = [
                'timerTitle'=>$gettingSecond->timer_title_uk,
                'title'=>$gettingSecond->title_uk,
                'disc'=>$gettingSecond->disc_uk,
                'buttonText'=>$gettingSecond->button_text_uk,
            ];
        else
            $getSecond = [
                'timerTitle'=>$gettingSecond->timer_title_ru,
                'title'=>$gettingSecond->title_ru,
                'disc'=>$gettingSecond->disc_ru,
                'buttonText'=>$gettingSecond->button_text_ru,
            ];

        //Тарифы

        $tariffs = Tariffs::findOne(['region_key'=>$reg]);
        $listTariffs = ListTariffs::find()->where(['tariffs_id'=>$tariffs->id])->all();
        $lisListTariffs = [];

        foreach ($listTariffs as $list) {
            $lisListTariffs[$list->id] = ListListTariffs::find()->where(['list_tariffs_id'=>$list->id])->all();
        }


        //Третий Синий блок
        $gettingThird = GettingThird::findOne(['region_key'=>$reg]);
        $listGettingThird = ListGettingThird::find()->where(['getting_third_id'=>$gettingThird->id])->all();


        //Сервисы
        $services = Services::findOne(['region_key'=>$reg]);
        $listServices = ListServices::find()->where(['services_id'=>$services->id])->all();


        //Четвертый Синий блок
        $gettingFourth = GettingFourth::findOne(['region_key'=>$reg]);


        //Знакомство с командой
        $team = Team::findOne(['region_key'=>$reg]);
        $listTeam = ListTeam::find()->where(['team_id'=>$team->id])->all();

        //Галерея фотографий
        $gallery = Gallery::find()->where(['region_key'=>$reg])->all();

        //Вопросы, ответы
        $question = Question::findOne(['region_key'=>$reg]);
        $listQuestion = ListQuestion::find()->where(['question_id'=>$question->id])->all();
        $lisListQuestion = [];
        $listModalQuestion = [];

        foreach ($listQuestion as $list) {
            $lisListQuestion[$list->id] = ListListQuestion::find()->where(['list_question_id'=>$list->id])->all();
            $listModalQuestion[$list->id] = ListModalQuestion::find()->where(['modal_question_id'=>$list->id])->all();
        }

        //Пятый синий блок
        $gettingFifth = GettingFifth::findOne(['region_key'=>$reg]);

        //Партнеры
        $partners = Partners::findOne(['id'=>1]);

        //Подвал
        $footer = Footer::findOne(['region_key'=>$reg]);

        if (Yii::$app->request->isAjax){
            $model->load(Yii::$app->request->post());
            $model->status=0;
            return ($model->validate() && $model->addRecord());
        }

        //MobiHome
        $mobiHome = MobiHome::findOne(['region_key'=>$reg]);
        //MobiExplore
        $mobiExplore = MobiExplore::findOne(['region_key'=>$reg]);
        $mobiExploreLists = MobiExploreList::find()->where(['MobiExplore_id'=>$mobiExplore['id']])->all();
        $mobiExploreLevels = MobiExploreLevels::find()->where(['MobiExplore_id'=>$mobiExplore['id']])->all();
        $mobiAdditonally = MobiAdditionally::findOne(['region_key'=>$reg]);
        $mobiAdditonallyList = MobiAdditionallyList::find()->where(['MobiAdditionally_id'=>$mobiAdditonally['id']])->all();

        //mobiAsWellAs
        $mobiAsWellAs = MobiAsWellAs::findOne(['region_key'=>$reg]);

        //mobiConditions
        $mobiConditions = MobiConditons::findOne(['region_key'=>$reg]);
        $mobiConditionsLists = MobiConditonsList::find()->where(['MobiConditions_id'=>$mobiConditions['id']])->all();

        //MobiPrice
        $mobiPrice = MobiPrice::findOne(['region_key'=>$reg]);

        return $this->render('index',[

            'drop'=>$drop,
            'formHome'=>$formHome,
            'home'=>$home,
            'listHome'=>$listHome,
            'privilege'=>$privilege,
            'listPrivilege'=>$listPrivilege,
            'assurance' =>$assurance,
            'listAssurance'=>$listAssurance,
            'gettingFirst'=>$gettingFirst,
            'getSecond'=>$getSecond,
            'tariffs'=>$tariffs,
            'listTariffs'=>$listTariffs,
            'lisListTariffs'=>$lisListTariffs,
            'gettingThird'=>$gettingThird,
            'listGettingThird'=>$listGettingThird,
            'services'=>$services,
            'listServices'=>$listServices,
            'gettingFourth'=>$gettingFourth,
            'team'=>$team,
            'listTeam'=>$listTeam,
            'gallery'=>$gallery,
            'question'=>$question,
            'listQuestion'=>$listQuestion,
            'lisListQuestion'=>$lisListQuestion,
            'listModalQuestion'=>$listModalQuestion,
            'gettingFifth'=>$gettingFifth,
            'partners' => $partners,
            'footer'=>$footer,
            'loc'=>$loc,
            'reg'=>$reg,
            'model'=>$model,
            'modelAsk'=>$modelAsk,
            'modelRequestCallMe'=>$modelRequestCallMe,
            'mobiHome'=>$mobiHome,
            'mobiExplore'=>$mobiExplore,
            'mobiExploreLists' =>$mobiExploreLists,
            'mobiExploreLevels'=>$mobiExploreLevels,
            'mobiAdditionally'=>$mobiAdditonally,
            'mobiAdditonallyList'=>$mobiAdditonallyList,
            'mobiAsWellAs'=>$mobiAsWellAs,
            'mobiConditions'=>$mobiConditions,
            'mobiConditionsLists'=>$mobiConditionsLists,
            'mobiPrice' => $mobiPrice,


        ]);
    }

}
