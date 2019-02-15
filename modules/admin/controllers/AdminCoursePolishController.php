<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 27.09.17
 * Time: 2:28
 */

namespace app\modules\admin\controllers;


use app\models\Assurance;
use app\models\Footer;
use app\models\FormHome;
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
use app\models\Partners;
use app\models\Privilege;
use app\models\Question;
use app\models\RequestCallMeForm;
use app\models\Services;
use app\models\Tariffs;
use app\models\Team;
use app\modules\admin\models\AssuranceForm;
use app\modules\admin\models\FooterForm;
use app\modules\admin\models\FormHomeForm;
use app\modules\admin\models\GettingFifthForm;
use app\modules\admin\models\GettingFourthForm;
use app\modules\admin\models\GettingSecondForm;
use app\modules\admin\models\GettingThirdForm;
use app\modules\admin\models\HomeForm;
use app\modules\admin\models\PrivilegeForm;
use app\modules\admin\models\GettingFirstForm;
use app\modules\admin\models\QuestionForm;
use app\modules\admin\models\ServicesForm;
use app\modules\admin\models\TariffsForm;
use app\modules\admin\models\TeamForm;
use Codeception\Module\Yii2;
use Yii;
use yii\web\Controller;

class AdminCoursePolishController extends Controller
{

//    Ajax Home
    public function actionSaveHome(){
        $homeForm = new HomeForm();
        if (Yii::$app->request->isAjax){
            $homeForm->load(Yii::$app->request->post());
//            $homeForm->title_ru = $_POST['HomeForm']['title_uk'];
//            $homeForm->title_ru = $_POST['HomeForm']['title_ru'];
            $homeForm->listHome = $_POST['HomeForm']['listHome'];
            return ($homeForm->validate() && $homeForm->saveData());
        }
    }

    //    Ajax Privilege
    public function actionSavePrivilege(){
        $privilegeForm = new PrivilegeForm();
        if (Yii::$app->request->isAjax){

            $privilegeForm->main_title_uk = $_POST['PrivilegeForm']['main_title_uk'];
            $privilegeForm->main_title_ru = $_POST['PrivilegeForm']['main_title_ru'];
            $privilegeForm->title_list_uk = $_POST['PrivilegeForm']['title_list_uk'];
            $privilegeForm->title_list_ru = $_POST['PrivilegeForm']['title_list_ru'];
            $privilegeForm->disc_uk = $_POST['PrivilegeForm']['disc_uk'];
            $privilegeForm->disc_ru = $_POST['PrivilegeForm']['disc_ru'];
            $privilegeForm->listPrivilege = $_POST['PrivilegeForm']['listPrivilege'];
            $privilegeForm->reg = $_POST['PrivilegeForm']['reg'];

            return ($privilegeForm->validate() && $privilegeForm->saveData());
        }
    }


    //    Ajax Assurance
    public function actionSaveAssurances(){
        $assuranceForm  = new AssuranceForm();
        if (Yii::$app->request->isAjax){
            $assuranceForm->main_title_uk = $_POST['AssuranceForm']['main_title_uk'];
            $assuranceForm->main_title_ru = $_POST['AssuranceForm']['main_title_ru'];
            $assuranceForm->disc_title_uk = $_POST['AssuranceForm']['disc_title_uk'];
            $assuranceForm->disc_title_ru = $_POST['AssuranceForm']['disc_title_ru'];
            $assuranceForm->disc_text_uk = $_POST['AssuranceForm']['disc_text_uk'];
            $assuranceForm->disc_text_ru = $_POST['AssuranceForm']['disc_text_ru'];
            $assuranceForm->reg = $_POST['AssuranceForm']['reg'];
            $assuranceForm->listAssurance = $_POST['AssuranceForm']['listAssurance'];

            return ($assuranceForm->validate()&&$assuranceForm->saveData());
        }
    }


    //    Ajax Getting First
    public function actionSaveGettingFirst(){
        $gettingFirstForm  = new GettingFirstForm();
        if (Yii::$app->request->isAjax){
            $gettingFirstForm->load(Yii::$app->request->post());
            return ($gettingFirstForm->validate()&&$gettingFirstForm->saveData());
        }
    }


    //    Ajax Getting Second
    public function actionSaveGettingSecond(){
        $gettingSecondForm  = new GettingSecondForm();
        if (Yii::$app->request->isAjax){
            $gettingSecondForm->timer_title_uk = $_POST['GettingSecondForm']['timer_title_uk'];
            $gettingSecondForm->timer_title_ru = $_POST['GettingSecondForm']['timer_title_ru'];
            $gettingSecondForm->title_uk = $_POST['GettingSecondForm']['title_uk'];
            $gettingSecondForm->title_ru = $_POST['GettingSecondForm']['title_ru'];
            $gettingSecondForm->disc_uk = $_POST['GettingSecondForm']['disc_uk'];
            $gettingSecondForm->disc_ru = $_POST['GettingSecondForm']['disc_ru'];
            $gettingSecondForm->reg = $_POST['GettingSecondForm']['reg'];

            return ($gettingSecondForm->validate()&&$gettingSecondForm->saveData());
        }
    }


    //    Ajax Tariffs
    public function actionSaveTariffs(){
        $tariffsForm = new TariffsForm();
        if (Yii::$app->request->isAjax){

            $tariffsForm->title_uk = $_POST['TariffsForm']['title_uk'];
            $tariffsForm->title_ru = $_POST['TariffsForm']['title_ru'];
            $tariffsForm->disc_uk = $_POST['TariffsForm']['disc_uk'];
            $tariffsForm->disc_ru = $_POST['TariffsForm']['disc_ru'];
            $tariffsForm->reg = $_POST['TariffsForm']['reg'];
            $tariffsForm->listTariffs = $_POST['TariffsForm']['listTariffs'];
            $tariffsForm->listListTariffs = $_POST['TariffsForm']['listListTariffs'];

            return ($tariffsForm->validate()&&$tariffsForm->saveData());
        }
    }


    //    Ajax Question
    public function actionSaveQuestion(){
        $question = new QuestionForm();
        if (Yii::$app->request->isAjax){

            $question->header_title_uk = $_POST['QuestionForm']['header_title_uk'];
            $question->header_title_ru = $_POST['QuestionForm']['header_title_ru'];
            $question->disc_uk = $_POST['QuestionForm']['disc_uk'];
            $question->disc_ru = $_POST['QuestionForm']['disc_ru'];
            $question->reg = $_POST['QuestionForm']['reg'];
            $question->listQuestion = $_POST['QuestionForm']['listQuestion'];
            $question->listListQuestion = $_POST['QuestionForm']['listListQuestion'];

            return ($question->validate()&&$question->saveData());
        }
    }

    //    Ajax Getting Third
    public function actionSaveGettingThird(){
        $gettingThirdForm = new GettingThirdForm();
        if (Yii::$app->request->isAjax){

            $gettingThirdForm->title_uk = $_POST['GettingThirdForm']['title_uk'];
            $gettingThirdForm->title_ru = $_POST['GettingThirdForm']['title_ru'];
            $gettingThirdForm->cost = $_POST['GettingThirdForm']['cost'];
            $gettingThirdForm->reg = $_POST['GettingThirdForm']['reg'];
            $gettingThirdForm->listGettingThird = $_POST['GettingThirdForm']['listGettingThird'];

            return ($gettingThirdForm->validate()&&$gettingThirdForm->saveData());
        }
    }

    //     Ajax Services
    public function actionSaveServices(){
        $servicesForm = new ServicesForm();
        if (Yii::$app->request->isAjax){


            $servicesForm->header_title_ua = $_POST['ServicesForm']['title_uk'];
            $servicesForm->header_title_ru = $_POST['ServicesForm']['title_ru'];
            $servicesForm->disc_uk = $_POST['ServicesForm']['disc_uk'];
            $servicesForm->disc_ru = $_POST['ServicesForm']['disc_ru'];
            $servicesForm->disc_ru = $_POST['ServicesForm']['button_text_uk'];
            $servicesForm->disc_ru = $_POST['ServicesForm']['button_text_ru'];
            $servicesForm->reg = $_POST['ServicesForm']['reg'];


            return ($servicesForm->validate()&&$servicesForm->saveData());
        }
    }


    //     Ajax Getting Fourth
    public function actionSaveGettingFourth(){
        $gettingFourthForm = new GettingFourthForm();
        if (Yii::$app->request->isAjax){
            $gettingFourthForm->title_uk = $_POST['GettingFourthForm']['title_uk'];
            $gettingFourthForm->title_ru = $_POST['GettingFourthForm']['title_ru'];
            $gettingFourthForm->disc_uk = $_POST['GettingFourthForm']['disc_uk'];
            $gettingFourthForm->disc_ru = $_POST['GettingFourthForm']['disc_ru'];
            $gettingFourthForm->button_text_uk = $_POST['GettingFourthForm']['button_text_uk'];
            $gettingFourthForm->button_text_ru = $_POST['GettingFourthForm']['button_text_ru'];
            $gettingFourthForm->reg = $_POST['GettingFourthForm']['reg'];

            return ($gettingFourthForm->validate()&&$gettingFourthForm->saveData());
        }
    }

    //  Ajax Team
    public function actionSaveTeam(){
        $teamForm=new TeamForm();

        if (Yii::$app->request->isAjax){
            $teamForm->header_title_uk = $_POST['TeamForm']['header_title_uk'];
            $teamForm->header_title_ru = $_POST['TeamForm']['header_title_ru'];
            $teamForm->disc_uk = $_POST['TeamForm']['disc_uk'];
            $teamForm->disc_ru = $_POST['TeamForm']['disc_ru'];
            $teamForm->reg = $_POST['TeamForm']['reg'];
            $teamForm->listTeam = $_POST['TeamForm']['listTeam'];
            return ($teamForm->validate() && $teamForm->saveData());
        }
    }

    // Ajax Getting fifth
    public function actionSaveGettingFifth(){
        $gettingFifthForm  = new GettingFifthForm();
        if (Yii::$app->request->isAjax){
            $gettingFifthForm->title_uk = $_POST['GettingFifthForm']['title_uk'];
            $gettingFifthForm->title_ru = $_POST['GettingFifthForm']['title_ru'];
            $gettingFifthForm->button_text_uk = $_POST['GettingFifthForm']['button_text_uk'];
            $gettingFifthForm->button_text_ru = $_POST['GettingFifthForm']['button_text_ru'];
            $gettingFifthForm->reg = $_POST['GettingFifthForm']['reg'];
            return ($gettingFifthForm->validate()&&$gettingFifthForm->saveData());
        }
    }




    public function actionSaveFooter(){
        $footerForm  = new FooterForm();
        if (Yii::$app->request->isAjax){
            $footerForm->aboutus_title_uk = $_POST['FooterForm']['aboutus_title_uk'];
            $footerForm->aboutus_title_ru = $_POST['FooterForm']['aboutus_title_ru'];
            $footerForm->about_text_uk = $_POST['FooterForm']['about_text_uk'];
            $footerForm->about_text_ru = $_POST['FooterForm']['about_text_ru'];
            $footerForm->copyright_uk = $_POST['FooterForm']['copyright_uk'];
            $footerForm->copyright_ru = $_POST['FooterForm']['copyright_ru'];
            $footerForm->address_title_uk = $_POST['FooterForm']['address_title_uk'];
            $footerForm->address_title_ru = $_POST['FooterForm']['address_title_ru'];
            $footerForm->address_text_uk = $_POST['FooterForm']['address_text_uk'];
            $footerForm->address_text_ru = $_POST['FooterForm']['address_text_ru'];
            $footerForm->phone_number = $_POST['FooterForm']['phone_number'];
            $footerForm->email = $_POST['FooterForm']['email'];
            $footerForm->site = $_POST['FooterForm']['site'];
            $footerForm->reg = $_POST['FooterForm']['reg'];

            return ($footerForm->validate()&&$footerForm->saveData());
        }
    }




    public function actionIndex($reg = 'dp'){


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



        //шапка сайта Home
        $home = Home::findOne(['region_key'=>$reg]);
        $listHome = ListHome::find()->where(['home_id'=>$home->id])->all();
        $homeForm = new HomeForm();
        $formHome = FormHome::findOne(['region_key'=>$reg]);
        $formHomeForm = new FormHomeForm();

        //Привелегии
        $privilege = Privilege::findOne(['region_key'=>$reg]);
        $listPrivilege = ListPrivilege::find()->where(['privilege_id'=>$privilege->id])->all();
        $privilegeForm = new PrivilegeForm();

        //Гарантии
        $assurance = Assurance::findOne(['region_key'=>$reg]);
        $listAssurance = ListAssurance::find()->where(['assurance_id'=>$assurance->id])->all();
        $assuranceForm = new AssuranceForm();

        //Первый Синий блок
        $gettingFirst = GettingFirst::find()->where(['region_key'=>$reg])->one();
        $gettingFirstForm = new GettingFirstForm();

        //Второй Синий блок
        $gettingSecond = GettingSecond::findOne(['region_key'=>$reg]);
        $gettingSecondForm = new GettingSecondForm();

        //Тарифы
        $tariffs = Tariffs::findOne(['region_key'=>$reg]);
        $listTariffs = ListTariffs::find()->where(['tariffs_id'=>$tariffs->id])->all();
        $lisListTariffs = [];
        foreach ($listTariffs as $list) {
            $lisListTariffs[$list->id] = ListListTariffs::find()->where(['list_tariffs_id'=>$list->id])->all();
        }
        $tariffsForm = new TariffsForm();

        //Третий Синий блок
        $gettingThird = GettingThird::findOne(['region_key'=>$reg]);
        $listGettingThird = ListGettingThird::find()->where(['getting_third_id'=>$gettingThird->id])->all();
        $gettingThirdForm = new GettingThirdForm();

        //Сервисы
        $services = Services::findOne(['region_key'=>$reg]);
        $listServices = ListServices::find()->where(['services_id'=>$services->id])->all();
        $servicesForm = new ServicesForm();


        //Четвертый Синий блок
        $gettingFourth = GettingFourth::findOne(['region_key'=>$reg]);
        $gettingFourthForm = new GettingFourthForm();


        //Знакомство с командой
        $team = Team::findOne(['region_key'=>$reg]);
        $listTeam = ListTeam::find()->where(['team_id'=>$team->id])->all();
        $teamForm = new TeamForm();


        //Вопросы, ответы

        $question = Question::findOne(['region_key'=>$reg]);
        $listQuestion = ListQuestion::find()->where(['question_id'=>$question->id])->all();
        $lisListQuestion = [];
        $listModalQuestion = [];
        $questionForm = new QuestionForm();

        foreach ($listQuestion as $list) {
            $lisListQuestion[$list->id] = ListListQuestion::find()->where(['list_question_id'=>$list->id])->all();
            $listModalQuestion[$list->id] = ListModalQuestion::find()->where(['modal_question_id'=>$list->id])->all();
        }

        //Пятый синий блок
        $gettingFifth = GettingFifth::findOne(['region_key'=>$reg]);
        $gettingFifthForm = new GettingFifthForm();

        //Партнеры
        $partners = Partners::findOne(['id'=>1]);

        //Подвал
        $footer = Footer::findOne(['region_key'=>$reg]);
        $footerForm = new FooterForm();



        return $this->render('index',[

            'reg'=>$reg,
            'formHome'=>$formHome,
            'formHomeForm' =>$formHomeForm,
            'drop'=>$drop,
            'home'=>$home,
            'listHome'=>$listHome,
            'privilege'=>$privilege,
            'listPrivilege'=>$listPrivilege,
            'assurance' =>$assurance,
            'listAssurance'=>$listAssurance,
            'gettingFirst'=>$gettingFirst,
            'gettingSecond'=>$gettingSecond,
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
            'question'=>$question,
            'listQuestion'=>$listQuestion,
            'lisListQuestion'=>$lisListQuestion,
            'listModalQuestion'=>$listModalQuestion,
            'gettingFifth'=>$gettingFifth,
            'partners' => $partners,
            'footer'=>$footer,
            'homeForm'=>$homeForm,
            'privilegeForm'=>$privilegeForm,
            'assuranceForm'=>$assuranceForm,
            'gettingFirstForm'=>$gettingFirstForm,
            'gettingSecondForm'=>$gettingSecondForm,
            'tariffsForm'=>$tariffsForm,
            'gettingThirdForm'=>$gettingThirdForm,
            'servicesForm'=>$servicesForm,
            'gettingFourthForm'=>$gettingFourthForm,
            'teamForm' => $teamForm,
            'questionForm'=>$questionForm,
            'gettingFifthForm'=>$gettingFifthForm,
            'footerForm'=>$footerForm,
        ]);
    }

}