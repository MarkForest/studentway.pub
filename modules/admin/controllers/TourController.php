<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 27.09.17
 * Time: 2:33
 */

namespace app\modules\admin\controllers;


use app\models\tour\TourAboutUniversityBlock;
use app\models\tour\TourAboutUsBlock;
use app\models\tour\TourContactBlock;
use app\models\tour\TourFirstBlock;
use app\models\tour\TourFooterBlock;
use app\models\tour\TourHaveQuestionsBlock;
use app\models\tour\TourHead;
use app\models\tour\TourHeadMenus;
use app\models\tour\TourInfoBlock;
use app\models\tour\TourOurServicesBlock;
use app\models\tour\TourPricesBlock;
use app\models\tour\TourQuestionsBlock;
use app\models\tour\TourReviewBlock;
use app\modules\admin\models\tour\TourAboutUniversityBlockForm;
use app\modules\admin\models\tour\TourAboutUsBlockForm;
use app\modules\admin\models\tour\TourContactBlockForm;
use app\modules\admin\models\tour\TourFirstBlockForm;
use app\modules\admin\models\tour\TourFooterBlockForm;
use app\modules\admin\models\tour\TourHaveQuestionsBlockForm;
use app\modules\admin\models\tour\TourHeadForm;
use app\modules\admin\models\tour\TourInfoBlockForm;
use app\modules\admin\models\tour\TourOurServicesBlockForm;
use app\modules\admin\models\tour\TourPricesBlockForm;
use app\modules\admin\models\tour\TourQuestionsBlockForm;
use app\modules\admin\models\tour\TourReviewBlockForm;
use Yii;
use yii\web\Controller;

class TourController extends Controller
{
    //public $layout = '/tours';
    public function actionIndex($id = 1)
    {
        //Шапка сайта
        $tour_head = TourHead::findOne(['id' => $id]);
        $tour_head_menus = TourHeadMenus::find()->where(['tour_head_id' => $id])->all();
        $tour_head_form = new TourHeadForm();

        //First block
        $tour_first_block = TourFirstBlock::findOne(['id' => $id]);
        $tour_first_block_form = new TourFirstBlockForm();

        //Info block
        $tour_info_block = TourInfoBlock::findOne(['id' => $id]);
        $tour_info_block_form = new TourInfoBlockForm();

        //About University
        $tour_about_university_block = TourAboutUniversityBlock::findOne(['id' => $id]);
        $tour_about_university_block_form = new TourAboutUniversityBlockForm();

        //Our Services
        $tour_our_services_block = TourOurServicesBlock::findOne(['id' => $id]);
        $tour_our_services_block_form = new TourOurServicesBlockForm();

        //About Us
        $tour_about_us_block = TourAboutUsBlock::findOne(['id' => $id]);
        $tour_about_us_block_form = new TourAboutUsBlockForm();

        //Questions
        $tour_questions_block = TourQuestionsBlock::findOne(['id'=>$id]);
        $tour_questions_block_form = new TourQuestionsBlockForm();

        //Have questions
        $tour_have_questions_block = TourHaveQuestionsBlock::findOne(['id'=>$id]);
        $tour_have_questions_block_form = new TourHaveQuestionsBlockForm();
        //Review
        $tour_review_block = TourReviewBlock::findOne(['id'=>$id]);
        $tour_review_block_form = new TourReviewBlockForm();
        //Prices
        $tour_prices_block = TourPricesBlock::findOne(['id'=>$id]);
        $tour_prices_block_form = new TourPricesBlockForm();
        //Contact
        $tour_contact_block = TourContactBlock::findOne(['id'=>$id]);
        $tour_contact_block_form = new TourContactBlockForm();
        //Footer
        $tour_footer_block = TourFooterBlock::findOne(['id'=>$id]);
        $tour_footer_block_form = new TourFooterBlockForm();
        return $this->render('index', [
            'tour_head' => $tour_head,
            'tour_head_form' => $tour_head_form,
            'tour_head_menus' => $tour_head_menus,
            ////////////////////////////////////
            'tour_first_block' => $tour_first_block,
            'tour_first_block_form' => $tour_first_block_form,
            ////////////////////////////////////
            'tour_info_block' => $tour_info_block,
            'tour_info_block_form' => $tour_info_block_form,
            ////////////////////////////////////
            'tour_about_university_block' => $tour_about_university_block,
            'tour_about_university_block_form' => $tour_about_university_block_form,
            ///////////////////////////////////
            'tour_our_services_block' => $tour_our_services_block,
            'tour_our_services_block_form' => $tour_our_services_block_form,
            ///////////////////////////////////
            'tour_about_us_block' => $tour_about_us_block,
            'tour_about_us_block_form' => $tour_about_us_block_form,
            ///////////////////////////////////
            'tour_questions_block' => $tour_questions_block,
            'tour_questions_block_form' => $tour_questions_block_form,
            ///////////////////////////////////
            'tour_have_questions_block' => $tour_have_questions_block,
            'tour_have_questions_block_form' => $tour_have_questions_block_form,
            ///////////////////////////////////
            'tour_review_block' => $tour_review_block,
            'tour_review_block_form' => $tour_review_block_form,
            ///////////////////////////////////
            'tour_prices_block' => $tour_prices_block,
            'tour_prices_block_form' => $tour_prices_block_form,
            ///////////////////////////////////
            'tour_contact_block' => $tour_contact_block,
            'tour_contact_block_form' => $tour_contact_block_form,
            ///////////////////////////////////
            'tour_footer_block' => $tour_footer_block,
            'tour_footer_block_form' => $tour_footer_block_form,
        ]);
    }

    /**
     * @return bool
     */
    public function actionSaveHome()
    {
        $tourHeadForm = new TourHeadForm();
        if (Yii::$app->request->isAjax) {
            $tourHeadForm->logo_text = $_POST['TourHeadForm']['logo_text'];
            $tourHeadForm->phone_number = $_POST['TourHeadForm']['phone_number'];
            $tourHeadForm->key_id = $_POST['TourHeadForm']['key_id'];
            $tourHeadForm->tour_menus = $_POST['TourHeadForm']['tour_menus'];
            return ($tourHeadForm->validate() && $tourHeadForm->saveData());
        }
    }
    public function actionSaveFirstBlock()
    {
        $tourFirstBlockForm = new TourFirstBlockForm();
        if (Yii::$app->request->isAjax) {
            $tourFirstBlockForm->title = $_POST['TourFirstBlockForm']['title'];
            $tourFirstBlockForm->description = $_POST['TourFirstBlockForm']['description'];
            $tourFirstBlockForm->btn_message_text = $_POST['TourFirstBlockForm']['btn_message_text'];
            return ($tourFirstBlockForm->validate() && $tourFirstBlockForm->saveData());
        }
    }
    public function actionSaveInfoBlock()
    {
        $tourInfoBlockForm = new TourInfoBlockForm();
        if (Yii::$app->request->isAjax) {
            $tourInfoBlockForm->title_big_head = $_POST['TourInfoBlockForm']['title_big_head'];
            $tourInfoBlockForm->title_first = $_POST['TourInfoBlockForm']['title_first'];
            $tourInfoBlockForm->title_second = $_POST['TourInfoBlockForm']['title_second'];
            $tourInfoBlockForm->title_third = $_POST['TourInfoBlockForm']['title_third'];
            $tourInfoBlockForm->title_four = $_POST['TourInfoBlockForm']['title_four'];
            $tourInfoBlockForm->title_five = $_POST['TourInfoBlockForm']['title_five'];
            $tourInfoBlockForm->title_six = $_POST['TourInfoBlockForm']['title_six'];
            $tourInfoBlockForm->description_first = $_POST['TourInfoBlockForm']['description_first'];
            $tourInfoBlockForm->description_second = $_POST['TourInfoBlockForm']['description_second'];
            $tourInfoBlockForm->description_third = $_POST['TourInfoBlockForm']['description_third'];
            $tourInfoBlockForm->description_four = $_POST['TourInfoBlockForm']['description_four'];
            $tourInfoBlockForm->description_five = $_POST['TourInfoBlockForm']['description_five'];
            $tourInfoBlockForm->description_six = $_POST['TourInfoBlockForm']['description_six'];
            $tourInfoBlockForm->btn_first_text = $_POST['TourInfoBlockForm']['btn_first_text'];
            $tourInfoBlockForm->btn_second_text = $_POST['TourInfoBlockForm']['btn_second_text'];
            $tourInfoBlockForm->text_footer = $_POST['TourInfoBlockForm']['text_footer'];
            return ($tourInfoBlockForm->validate() && $tourInfoBlockForm->saveData());
        }
    }
    public function actionSaveAboutUniversityBlock()
    {
        $tourAboutUniversityBlockForm = new TourAboutUniversityBlockForm();
        if (Yii::$app->request->isAjax) {
            $tourAboutUniversityBlockForm->title_big_head = $_POST['TourAboutUniversityBlockForm']['title_big_head'];
            $tourAboutUniversityBlockForm->text_head = $_POST['TourAboutUniversityBlockForm']['text_head'];
            $tourAboutUniversityBlockForm->title_first = $_POST['TourAboutUniversityBlockForm']['title_first'];
            $tourAboutUniversityBlockForm->description_first = $_POST['TourAboutUniversityBlockForm']['description_first'];
            $tourAboutUniversityBlockForm->title_second = $_POST['TourAboutUniversityBlockForm']['title_second'];
            $tourAboutUniversityBlockForm->description_second = $_POST['TourAboutUniversityBlockForm']['description_second'];
            $tourAboutUniversityBlockForm->title_third = $_POST['TourAboutUniversityBlockForm']['title_third'];
            $tourAboutUniversityBlockForm->description_third = $_POST['TourAboutUniversityBlockForm']['description_third'];
            $tourAboutUniversityBlockForm->title_big_footer = $_POST['TourAboutUniversityBlockForm']['title_big_footer'];
            $tourAboutUniversityBlockForm->curusel_title_first = $_POST['TourAboutUniversityBlockForm']['curusel_title_first'];
            $tourAboutUniversityBlockForm->curusel_title_second = $_POST['TourAboutUniversityBlockForm']['curusel_title_second'];
            $tourAboutUniversityBlockForm->curusel_title_third = $_POST['TourAboutUniversityBlockForm']['curusel_title_third'];
            $tourAboutUniversityBlockForm->curusel_title_four = $_POST['TourAboutUniversityBlockForm']['curusel_title_four'];
            $tourAboutUniversityBlockForm->curusel_title_five = $_POST['TourAboutUniversityBlockForm']['curusel_title_five'];
            $tourAboutUniversityBlockForm->text_footer = $_POST['TourAboutUniversityBlockForm']['text_footer'];
            $tourAboutUniversityBlockForm->btn_message_text = $_POST['TourAboutUniversityBlockForm']['btn_message_text'];
            $tourAboutUniversityBlockForm->btn_first_text = $_POST['TourAboutUniversityBlockForm']['btn_first_text'];
            $tourAboutUniversityBlockForm->btn_second_text = $_POST['TourAboutUniversityBlockForm']['btn_second_text'];
            return ($tourAboutUniversityBlockForm->validate() && $tourAboutUniversityBlockForm->saveData());
        }
    }
    public function actionSaveOurServicesBlock()
    {
        $tourOurServicesBlockForm = new TourOurServicesBlockForm();
        if (Yii::$app->request->isAjax) {
            $tourOurServicesBlockForm->title_big_head = $_POST['TourOurServicesBlockForm']['title_big_head'];
            $tourOurServicesBlockForm->title_first = $_POST['TourOurServicesBlockForm']['title_first'];
            $tourOurServicesBlockForm->description_first_first = $_POST['TourOurServicesBlockForm']['description_first_first'];
            $tourOurServicesBlockForm->description_first_second = $_POST['TourOurServicesBlockForm']['description_first_second'];
            $tourOurServicesBlockForm->description_first_third = $_POST['TourOurServicesBlockForm']['description_first_third'];
            $tourOurServicesBlockForm->title_second = $_POST['TourOurServicesBlockForm']['title_second'];
            $tourOurServicesBlockForm->description_second_first = $_POST['TourOurServicesBlockForm']['description_second_first'];
            $tourOurServicesBlockForm->description_second_second = $_POST['TourOurServicesBlockForm']['description_second_second'];
            $tourOurServicesBlockForm->description_second_third = $_POST['TourOurServicesBlockForm']['description_second_third'];
            $tourOurServicesBlockForm->description_second_four = $_POST['TourOurServicesBlockForm']['description_second_four'];
            $tourOurServicesBlockForm->title_third = $_POST['TourOurServicesBlockForm']['title_third'];
            $tourOurServicesBlockForm->description_third_first = $_POST['TourOurServicesBlockForm']['description_third_first'];
            $tourOurServicesBlockForm->description_third_second = $_POST['TourOurServicesBlockForm']['description_third_second'];
            $tourOurServicesBlockForm->title_four = $_POST['TourOurServicesBlockForm']['title_four'];
            $tourOurServicesBlockForm->btn_first_text = $_POST['TourOurServicesBlockForm']['btn_first_text'];
            $tourOurServicesBlockForm->btn_second_text = $_POST['TourOurServicesBlockForm']['btn_second_text'];
            return ($tourOurServicesBlockForm->validate() && $tourOurServicesBlockForm->saveData());
        }
    }
    public function actionSaveAboutUsBlock()
    {
        $tourAboutUsBlockForm = new TourAboutUsBlockForm();
        if (Yii::$app->request->isAjax) {
            $tourAboutUsBlockForm->title_big_head = $_POST['TourAboutUsBlockForm']['title_big_head'];
            $tourAboutUsBlockForm->text_head = $_POST['TourAboutUsBlockForm']['text_head'];
            $tourAboutUsBlockForm->title_big_footer = $_POST['TourAboutUsBlockForm']['title_big_footer'];
            $tourAboutUsBlockForm->title_first = $_POST['TourAboutUsBlockForm']['title_first'];
            $tourAboutUsBlockForm->description_first = $_POST['TourAboutUsBlockForm']['description_first'];
            $tourAboutUsBlockForm->title_second = $_POST['TourAboutUsBlockForm']['title_second'];
            $tourAboutUsBlockForm->description_second = $_POST['TourAboutUsBlockForm']['description_second'];
            $tourAboutUsBlockForm->title_third = $_POST['TourAboutUsBlockForm']['title_third'];
            $tourAboutUsBlockForm->description_third = $_POST['TourAboutUsBlockForm']['description_third'];
            $tourAboutUsBlockForm->title_four = $_POST['TourAboutUsBlockForm']['title_four'];
            $tourAboutUsBlockForm->description_four = $_POST['TourAboutUsBlockForm']['description_four'];
            $tourAboutUsBlockForm->title_five = $_POST['TourAboutUsBlockForm']['title_five'];
            $tourAboutUsBlockForm->description_five = $_POST['TourAboutUsBlockForm']['description_five'];
            $tourAboutUsBlockForm->text_footer = $_POST['TourAboutUsBlockForm']['text_footer'];
            $tourAboutUsBlockForm->btn_first_text = $_POST['TourAboutUsBlockForm']['btn_first_text'];
            $tourAboutUsBlockForm->btn_second_text = $_POST['TourAboutUsBlockForm']['btn_second_text'];
            return ($tourAboutUsBlockForm->validate() && $tourAboutUsBlockForm->saveData());
        }
    }
    public function actionSaveQuestionsBlock()
    {
        $tourQuestionsBlockForm = new TourQuestionsBlockForm();
        if (Yii::$app->request->isAjax) {
            $tourQuestionsBlockForm->title_big_head = $_POST['TourQuestionsBlockForm']['title_big_head'];
            $tourQuestionsBlockForm->title_first = $_POST['TourQuestionsBlockForm']['title_first'];
            $tourQuestionsBlockForm->description_first = $_POST['TourQuestionsBlockForm']['description_first'];
            $tourQuestionsBlockForm->title_second = $_POST['TourQuestionsBlockForm']['title_second'];
            $tourQuestionsBlockForm->description_second = $_POST['TourQuestionsBlockForm']['description_second'];
            $tourQuestionsBlockForm->title_third = $_POST['TourQuestionsBlockForm']['title_third'];
            $tourQuestionsBlockForm->description_third = $_POST['TourQuestionsBlockForm']['description_third'];
            $tourQuestionsBlockForm->title_four = $_POST['TourQuestionsBlockForm']['title_four'];
            $tourQuestionsBlockForm->description_four = $_POST['TourQuestionsBlockForm']['description_four'];
            $tourQuestionsBlockForm->title_five = $_POST['TourQuestionsBlockForm']['title_five'];
            $tourQuestionsBlockForm->description_five = $_POST['TourQuestionsBlockForm']['description_five'];
            $tourQuestionsBlockForm->title_six = $_POST['TourQuestionsBlockForm']['title_six'];
            $tourQuestionsBlockForm->description_six = $_POST['TourQuestionsBlockForm']['description_six'];
            $tourQuestionsBlockForm->text_footer = $_POST['TourQuestionsBlockForm']['text_footer'];
            $tourQuestionsBlockForm->btn_first_text = $_POST['TourQuestionsBlockForm']['btn_first_text'];
            $tourQuestionsBlockForm->btn_second_text = $_POST['TourQuestionsBlockForm']['btn_second_text'];
            return ($tourQuestionsBlockForm->validate() && $tourQuestionsBlockForm->saveData());
        }
    }
    public function actionSaveHaveQuestionsBlock()
    {
        $tourHaveQuestionsBlockForm = new TourHaveQuestionsBlockForm();
        if (Yii::$app->request->isAjax) {
            $tourHaveQuestionsBlockForm->title_big_head = $_POST['TourHaveQuestionsBlockForm']['title_big_head'];
            $tourHaveQuestionsBlockForm->btn_message_text = $_POST['TourHaveQuestionsBlockForm']['btn_message_text'];
            return ($tourHaveQuestionsBlockForm->validate() && $tourHaveQuestionsBlockForm->saveData());
        }
    }
    public function actionSaveReviewBlock()
    {
        $tourReviewBlockForm = new TourReviewBlockForm();
        if (Yii::$app->request->isAjax) {
            $tourReviewBlockForm->text_review_first = $_POST['TourReviewBlockForm']['text_review_first'];
            $tourReviewBlockForm->name_first = $_POST['TourReviewBlockForm']['name_first'];
            $tourReviewBlockForm->text_review_second = $_POST['TourReviewBlockForm']['text_review_second'];
            $tourReviewBlockForm->name_second = $_POST['TourReviewBlockForm']['name_second'];
            $tourReviewBlockForm->text_review_third = $_POST['TourReviewBlockForm']['text_review_third'];
            $tourReviewBlockForm->name_third = $_POST['TourReviewBlockForm']['name_third'];
            $tourReviewBlockForm->text_review_four = $_POST['TourReviewBlockForm']['text_review_four'];
            $tourReviewBlockForm->name_four = $_POST['TourReviewBlockForm']['name_four'];
            $tourReviewBlockForm->text_review_five = $_POST['TourReviewBlockForm']['text_review_five'];
            $tourReviewBlockForm->name_five = $_POST['TourReviewBlockForm']['name_five'];
            $tourReviewBlockForm->text_footer = $_POST['TourReviewBlockForm']['text_footer'];
            $tourReviewBlockForm->btn_first_text = $_POST['TourReviewBlockForm']['btn_first_text'];
            $tourReviewBlockForm->btn_second_text = $_POST['TourReviewBlockForm']['btn_second_text'];
            return ($tourReviewBlockForm->validate() && $tourReviewBlockForm->saveData());
        }
    }
    public function actionSavePricesBlock()
    {
        $tourPricesBlockForm = new TourPricesBlockForm();
        if (Yii::$app->request->isAjax) {
            $tourPricesBlockForm->title_big_head = $_POST['TourPricesBlockForm']['title_big_head'];
            $tourPricesBlockForm->title_first = $_POST['TourPricesBlockForm']['title_first'];
            $tourPricesBlockForm->price_first = $_POST['TourPricesBlockForm']['price_first'];
            $tourPricesBlockForm->btn_rate_first = $_POST['TourPricesBlockForm']['btn_rate_first'];
            $tourPricesBlockForm->little_text_first = $_POST['TourPricesBlockForm']['little_text_first'];
            $tourPricesBlockForm->title_second = $_POST['TourPricesBlockForm']['title_second'];
            $tourPricesBlockForm->price_second = $_POST['TourPricesBlockForm']['price_second'];
            $tourPricesBlockForm->btn_rate_second = $_POST['TourPricesBlockForm']['btn_rate_second'];
            $tourPricesBlockForm->little_text_second = $_POST['TourPricesBlockForm']['little_text_second'];
            $tourPricesBlockForm->text_footer = $_POST['TourPricesBlockForm']['text_footer'];
            $tourPricesBlockForm->btn_first_text = $_POST['TourPricesBlockForm']['btn_first_text'];
            $tourPricesBlockForm->btn_second_text = $_POST['TourPricesBlockForm']['btn_second_text'];
            return ($tourPricesBlockForm->validate() && $tourPricesBlockForm->saveData());
        }
    }
    public function actionSaveContactBlock()
    {
        $tourContactBlockForm = new TourContactBlockForm();
        if (Yii::$app->request->isAjax) {
            $tourContactBlockForm->title_big_head = $_POST['TourContactBlockForm']['title_big_head'];
            $tourContactBlockForm->text_head = $_POST['TourContactBlockForm']['text_head'];
            $tourContactBlockForm->description_first = $_POST['TourContactBlockForm']['description_first'];
            $tourContactBlockForm->description_second = $_POST['TourContactBlockForm']['description_second'];
            $tourContactBlockForm->description_third = $_POST['TourContactBlockForm']['description_third'];
            $tourContactBlockForm->description_four = $_POST['TourContactBlockForm']['description_four'];
            $tourContactBlockForm->description_five = $_POST['TourContactBlockForm']['description_five'];
            $tourContactBlockForm->text_footer = $_POST['TourContactBlockForm']['text_footer'];
            $tourContactBlockForm->link_phone_first = $_POST['TourContactBlockForm']['link_phone_first'];
            $tourContactBlockForm->link_phone_second = $_POST['TourContactBlockForm']['link_phone_second'];
            return ($tourContactBlockForm->validate() && $tourContactBlockForm->saveData());
        }
    }
    public function actionSaveFooterBlock()
    {
        $tourFooterBlockForm = new TourFooterBlockForm();
        if (Yii::$app->request->isAjax) {
            $tourFooterBlockForm->title_first = $_POST['TourFooterBlockForm']['title_first'];
            $tourFooterBlockForm->description_first = $_POST['TourFooterBlockForm']['description_first'];
            $tourFooterBlockForm->title_second = $_POST['TourFooterBlockForm']['title_second'];
            $tourFooterBlockForm->name_link_first = $_POST['TourFooterBlockForm']['name_link_first'];
            $tourFooterBlockForm->href_link_first = $_POST['TourFooterBlockForm']['href_link_first'];
            $tourFooterBlockForm->name_link_second = $_POST['TourFooterBlockForm']['name_link_second'];
            $tourFooterBlockForm->href_link_second = $_POST['TourFooterBlockForm']['href_link_second'];
            $tourFooterBlockForm->name_link_third = $_POST['TourFooterBlockForm']['name_link_third'];
            $tourFooterBlockForm->href_link_third = $_POST['TourFooterBlockForm']['href_link_third'];
            $tourFooterBlockForm->name_link_four = $_POST['TourFooterBlockForm']['name_link_four'];
            $tourFooterBlockForm->href_link_four = $_POST['TourFooterBlockForm']['href_link_four'];
            $tourFooterBlockForm->title_third = $_POST['TourFooterBlockForm']['title_third'];
            $tourFooterBlockForm->description_third = $_POST['TourFooterBlockForm']['description_third'];
            $tourFooterBlockForm->link_footer = $_POST['TourFooterBlockForm']['link_footer'];
            return ($tourFooterBlockForm->validate() && $tourFooterBlockForm->saveData());
        }
    }
}
