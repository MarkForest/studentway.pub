<?php

namespace app\modules\admin\controllers;
use app\models\Gallery;
use app\models\IEighth;
use app\models\IFourth;
use app\models\IFourthList;
use app\models\IFourthListPhoto;
use app\models\IHome;
use app\models\IHomePhoto;
use app\models\ISecond;
use app\models\ISecondList;
use app\models\ISeventh;
use app\models\ISeventhList;
use app\models\ISeventhListPhoto;
use app\models\ISixth;
use app\models\ISixthList;
use app\models\ISixthListPhoto;
use app\models\IThird;
use app\models\IThirdList;
use app\models\IThirdListPhoto;
use app\models\ListTeam;
use app\models\Privilege;
use app\models\Team;
use app\models\tour\TourAboutUniversityImgBlock;
use app\models\tour\TourAboutUsImgBlock;
use app\models\tour\TourContactsImgBlock;
use app\models\tour\TourFirstImgBlock;
use app\models\tour\TourHaveQuestionsImgBlock;
use app\models\tour\TourOtherUniversityImgBlock;
use app\models\tour\TourOurServicesImgBlock;
use app\models\tour\TourReviewImgBlock;
use app\modules\admin\models\UploadForm;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\UploadedFile;
define('FIRST', 1);
class ImagesController extends Controller
{

    public $layout = '/image';
    public function actionIndex($t=null,$id=null){


        $teamImages = Team::find()->all();
        $privilege = Privilege::find()->all();
        $gallery_dp = Gallery::find()->where(['region_key'=>'dp'])->all();
        $gallery_ky = Gallery::find()->where(['region_key'=>'ky'])->all();
        $gallery_kh = Gallery::find()->where(['region_key'=>'kh'])->all();
        $gallery_kv = Gallery::find()->where(['region_key'=>'kv'])->all();
        $gallery_km = Gallery::find()->where(['region_key'=>'km'])->all();
        $gallery_od = Gallery::find()->where(['region_key'=>'od'])->all();
        $gallery_iz = Gallery::find()->where(['region_key'=>'iz'])->all();
        $gallery_vn = Gallery::find()->where(['region_key'=>'vn'])->all();
        $gallery_bc = Gallery::find()->where(['region_key'=>'bc'])->all();
        $gallery_sl = Gallery::find()->where(['region_key'=>'sl'])->all();

        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $fileName = $model->upload('images/');
            if ($fileName) {

                if ($t=='team'){
                    $listTeam = ListTeam::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web').'images/'.$listTeam->image;
                    $listTeam->image = $fileName;
                    if ($listTeam->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);

                        $teamImages = Team::find()->all();
                        $privilege = Privilege::find()->all();
                        $gallery_dp = Gallery::find()->where(['region_key'=>'dp'])->all();
                        $gallery_ky = Gallery::find()->where(['region_key'=>'ky'])->all();
                        $gallery_kh = Gallery::find()->where(['region_key'=>'kh'])->all();
                        $gallery_kv = Gallery::find()->where(['region_key'=>'kv'])->all();
                        $gallery_km = Gallery::find()->where(['region_key'=>'km'])->all();
                        $gallery_od = Gallery::find()->where(['region_key'=>'od'])->all();
                        $gallery_iz = Gallery::find()->where(['region_key'=>'iz'])->all();
                        $gallery_vn = Gallery::find()->where(['region_key'=>'vn'])->all();
                        $gallery_bc = Gallery::find()->where(['region_key'=>'bc'])->all();
                        $gallery_sl = Gallery::find()->where(['region_key'=>'sl'])->all();
                        $model = new UploadForm();
                        return $this->render('index',[
                            'teamImages'=>$teamImages,
                            'model'=>$model,
                            'privilege'=>$privilege,
                            'gallery_dp'=>$gallery_dp,
                            'gallery_ky'=>$gallery_ky,
                            'gallery_kh'=>$gallery_kh,
                            'gallery_vn'=>$gallery_vn,
                            'gallery_kv'=>$gallery_kv,
                            'gallery_km'=>$gallery_km,
                            'gallery_od'=>$gallery_od,
                            'gallery_iz'=>$gallery_iz,
                            'gallery_bc'=>$gallery_bc,
                            'gallery_sl'=>$gallery_sl,
                        ]);
                    }
                }

                if ($t=='privilege'){
                    $privilegeImage = Privilege::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web').'images/'.$privilegeImage->image;
                    $privilegeImage->image = $fileName;
                    if ($privilegeImage->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $teamImages = Team::find()->all();
                        $privilege = Privilege::find()->all();
                        $gallery_dp = Gallery::find()->where(['region_key'=>'dp'])->all();
                        $gallery_ky = Gallery::find()->where(['region_key'=>'ky'])->all();
                        $gallery_kh = Gallery::find()->where(['region_key'=>'kh'])->all();
                        $gallery_kv = Gallery::find()->where(['region_key'=>'kv'])->all();
                        $gallery_km = Gallery::find()->where(['region_key'=>'km'])->all();
                        $gallery_od = Gallery::find()->where(['region_key'=>'od'])->all();
                        $gallery_iz = Gallery::find()->where(['region_key'=>'iz'])->all();
                        $gallery_vn = Gallery::find()->where(['region_key'=>'vn'])->all();
                        $gallery_bc = Gallery::find()->where(['region_key'=>'bc'])->all();
                        $gallery_sl = Gallery::find()->where(['region_key'=>'sl'])->all();

                        $model = new UploadForm();
                        return $this->render('index',[
                            'teamImages'=>$teamImages,
                            'model'=>$model,
                            'privilege'=>$privilege,
                            'gallery_dp'=>$gallery_dp,
                            'gallery_ky'=>$gallery_ky,
                            'gallery_kh'=>$gallery_kh,
                            'gallery_vn'=>$gallery_vn,
                            'gallery_kv'=>$gallery_kv,
                            'gallery_km'=>$gallery_km,
                            'gallery_od'=>$gallery_od,
                            'gallery_iz'=>$gallery_iz,
                            'gallery_bc'=>$gallery_bc,
                            'gallery_sl'=>$gallery_sl,
                        ]);
                    }
                }

                if ($t=='gallery'){
                    $galleryImage = Gallery::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web').'images/'.$galleryImage->image;
                    $galleryImage->image = $fileName;
                    if ($galleryImage->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $teamImages = Team::find()->all();
                        $privilege = Privilege::find()->all();
                        $gallery_dp = Gallery::find()->where(['region_key'=>'dp'])->all();
                        $gallery_ky = Gallery::find()->where(['region_key'=>'ky'])->all();
                        $gallery_kh = Gallery::find()->where(['region_key'=>'kh'])->all();
                        $gallery_kv = Gallery::find()->where(['region_key'=>'kv'])->all();
                        $gallery_km = Gallery::find()->where(['region_key'=>'km'])->all();
                        $gallery_od = Gallery::find()->where(['region_key'=>'od'])->all();
                        $gallery_iz = Gallery::find()->where(['region_key'=>'iz'])->all();
                        $gallery_vn = Gallery::find()->where(['region_key'=>'vn'])->all();
                        $gallery_bc = Gallery::find()->where(['region_key'=>'bc'])->all();
                        $gallery_sl = Gallery::find()->where(['region_key'=>'sl'])->all();

                        $model = new UploadForm();
                        return $this->render('index',[
                            'teamImages'=>$teamImages,
                            'model'=>$model,
                            'privilege'=>$privilege,
                            'gallery_dp'=>$gallery_dp,
                            'gallery_ky'=>$gallery_ky,
                            'gallery_kh'=>$gallery_kh,
                            'gallery_vn'=>$gallery_vn,
                            'gallery_kv'=>$gallery_kv,
                            'gallery_km'=>$gallery_km,
                            'gallery_od'=>$gallery_od,
                            'gallery_iz'=>$gallery_iz,
                            'gallery_bc'=>$gallery_bc,
                            'gallery_sl'=>$gallery_sl,
                        ]);
                    }
                }
            }
        }


        return $this->render('index',[
            'teamImages'=>$teamImages,
            'model'=>$model,
            'privilege'=>$privilege,
            'gallery_dp'=>$gallery_dp,
            'gallery_ky'=>$gallery_ky,
            'gallery_kh'=>$gallery_kh,
            'gallery_vn'=>$gallery_vn,
            'gallery_kv'=>$gallery_kv,
            'gallery_km'=>$gallery_km,
            'gallery_od'=>$gallery_od,
            'gallery_iz'=>$gallery_iz,
            'gallery_bc'=>$gallery_bc,
            'gallery_sl'=>$gallery_sl,
        ]);
    }

    public function actionImageInstitutes($reg = 'modzewskogo',$t=null,$id=null){

        $home_list = IHomePhoto::find()->where(['iHome_id'=>IHome::findOne(['itoken'=>$reg])->id])->all();
        $second = ISecond::findOne(['iToken'=>$reg]);
        $third_list = IThirdList::find()->where(['iThird_id'=>IThird::findOne(['itoken'=>$reg])->id])->all();
        $fourth_list = IFourthList::find()->where(['iFourth_id'=>IFourth::findOne(['itoken'=>$reg])->id])->all();
        $sixth_list = ISixthList::find()->where(['iSixth_id'=>ISixth::findOne(['itoken'=>$reg])->id])->all();
        $seventh_list = ISeventhList::find()->where(['iSeventh_id'=>ISeventh::findOne(['itoken'=>$reg])->id])->all();
        $eighth = IEighth::findOne(['itoken'=>$reg]);
        $model = new UploadForm();


        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $fileName = $model->upload('institute/images/');

            if ($fileName) {

                if ($t=='home'){
                    $listHome = IHomePhoto::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web').'institute/images/'.$listHome->photo;
                    $listHome->photo = $fileName;
                    if ($listHome->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);

                        $home_list = IHomePhoto::find()->where(['iHome_id'=>IHome::findOne(['itoken'=>$reg])->id])->all();
                        $second = ISecond::findOne(['iToken'=>$reg]);
                        $third_list = IThirdList::find()->where(['iThird_id'=>IThird::findOne(['itoken'=>$reg])->id])->all();
                        $fourth_list = IFourthList::find()->where(['iFourth_id'=>IFourth::findOne(['itoken'=>$reg])->id])->all();
                        $sixth_list = ISixthList::find()->where(['iSixth_id'=>ISixth::findOne(['itoken'=>$reg])->id])->all();
                        $seventh_list = ISeventhList::find()->where(['iSeventh_id'=>ISeventh::findOne(['itoken'=>$reg])->id])->all();
                        $eighth = IEighth::findOne(['itoken'=>$reg]);
                        $model = new UploadForm();

                        return $this->render('institute',[
                            'home_list'=> $home_list,
                            'second'=>$second,
                            'third_list'=>$third_list,
                            'fourth_list' =>$fourth_list,
                            'sixth_list' =>$sixth_list,
                            'seventh_list'=>$seventh_list,
                            'eighth'=>$eighth,
                            'model'=>$model,
                            'reg'=>$reg,
                        ]);
                    }
                }

                if ($t=='second'){
                    $secondPhoto = ISeventhListPhoto::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web').'institute/images/'.$secondPhoto->photo;
                    $secondPhoto->photo = $fileName;
                    if ($secondPhoto->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $home_list = IHomePhoto::find()->where(['iHome_id'=>IHome::findOne(['itoken'=>$reg])->id])->all();
                        $second = ISecond::findOne(['iToken'=>$reg]);
                        $third_list = IThirdList::find()->where(['iThird_id'=>IThird::findOne(['itoken'=>$reg])->id])->all();
                        $fourth_list = IFourthList::find()->where(['iFourth_id'=>IFourth::findOne(['itoken'=>$reg])->id])->all();
                        $sixth_list = ISixthList::find()->where(['iSixth_id'=>ISixth::findOne(['itoken'=>$reg])->id])->all();
                        $seventh_list = ISeventhList::find()->where(['iSeventh_id'=>ISeventh::findOne(['itoken'=>$reg])->id])->all();
                        $eighth = IEighth::findOne(['itoken'=>$reg]);
                        $model = new UploadForm();

                        return $this->render('institute',[
                            'home_list'=> $home_list,
                            'second'=>$second,
                            'third_list'=>$third_list,
                            'fourth_list' =>$fourth_list,
                            'sixth_list' =>$sixth_list,
                            'seventh_list'=>$seventh_list,
                            'eighth'=>$eighth,
                            'model'=>$model,
                            'reg'=>$reg,
                        ]);
                    }
                }

                if ($t=='third'){
                    $thirdPhoto = IThirdListPhoto::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web').'institute/images/'.$thirdPhoto->photo;
                    $thirdPhoto->photo = $fileName;
                    if ($thirdPhoto->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $home_list = IHomePhoto::find()->where(['iHome_id'=>IHome::findOne(['itoken'=>$reg])->id])->all();
                        $second = ISecond::findOne(['iToken'=>$reg]);
                        $third_list = IThirdList::find()->where(['iThird_id'=>IThird::findOne(['itoken'=>$reg])->id])->all();
                        $fourth_list = IFourthList::find()->where(['iFourth_id'=>IFourth::findOne(['itoken'=>$reg])->id])->all();
                        $sixth_list = ISixthList::find()->where(['iSixth_id'=>ISixth::findOne(['itoken'=>$reg])->id])->all();
                        $seventh_list = ISeventhList::find()->where(['iSeventh_id'=>ISeventh::findOne(['itoken'=>$reg])->id])->all();
                        $eighth = IEighth::findOne(['itoken'=>$reg]);
                        $model = new UploadForm();

                        return $this->render('institute',[
                            'home_list'=> $home_list,
                            'second'=>$second,
                            'third_list'=>$third_list,
                            'fourth_list' =>$fourth_list,
                            'sixth_list' =>$sixth_list,
                            'seventh_list'=>$seventh_list,
                            'eighth'=>$eighth,
                            'model'=>$model,
                            'reg'=>$reg,
                        ]);
                    }
                }
                if ($t=='fourth'){
                    $fourthPhoto = IFourthListPhoto::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web').'institute/images/'.$fourthPhoto->photo;
                    $fourthPhoto->photo = $fileName;
                    if ($fourthPhoto->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $home_list = IHomePhoto::find()->where(['iHome_id'=>IHome::findOne(['itoken'=>$reg])->id])->all();
                        $second = ISecond::findOne(['iToken'=>$reg]);
                        $third_list = IThirdList::find()->where(['iThird_id'=>IThird::findOne(['itoken'=>$reg])->id])->all();
                        $fourth_list = IFourthList::find()->where(['iFourth_id'=>IFourth::findOne(['itoken'=>$reg])->id])->all();
                        $sixth_list = ISixthList::find()->where(['iSixth_id'=>ISixth::findOne(['itoken'=>$reg])->id])->all();
                        $seventh_list = ISeventhList::find()->where(['iSeventh_id'=>ISeventh::findOne(['itoken'=>$reg])->id])->all();
                        $eighth = IEighth::findOne(['itoken'=>$reg]);
                        $model = new UploadForm();

                        return $this->render('institute',[
                            'home_list'=> $home_list,
                            'second'=>$second,
                            'third_list'=>$third_list,
                            'fourth_list' =>$fourth_list,
                            'sixth_list' =>$sixth_list,
                            'seventh_list'=>$seventh_list,
                            'eighth'=>$eighth,
                            'model'=>$model,
                            'reg'=>$reg,
                        ]);
                    }
                }
                if ($t=='sixth'){
                    $sixthPhoto = ISixthListPhoto::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web').'institute/images/'.$sixthPhoto->photo;
                    $sixthPhoto->photo = $fileName;
                    if ($sixthPhoto->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $home_list = IHomePhoto::find()->where(['iHome_id'=>IHome::findOne(['itoken'=>$reg])->id])->all();
                        $second = ISecond::findOne(['iToken'=>$reg]);
                        $third_list = IThirdList::find()->where(['iThird_id'=>IThird::findOne(['itoken'=>$reg])->id])->all();
                        $fourth_list = IFourthList::find()->where(['iFourth_id'=>IFourth::findOne(['itoken'=>$reg])->id])->all();
                        $sixth_list = ISixthList::find()->where(['iSixth_id'=>ISixth::findOne(['itoken'=>$reg])->id])->all();
                        $seventh_list = ISeventhList::find()->where(['iSeventh_id'=>ISeventh::findOne(['itoken'=>$reg])->id])->all();
                        $eighth = IEighth::findOne(['itoken'=>$reg]);
                        $model = new UploadForm();

                        return $this->render('institute',[
                            'home_list'=> $home_list,
                            'second'=>$second,
                            'third_list'=>$third_list,
                            'fourth_list' =>$fourth_list,
                            'sixth_list' =>$sixth_list,
                            'seventh_list'=>$seventh_list,
                            'eighth'=>$eighth,
                            'model'=>$model,
                            'reg'=>$reg,
                        ]);
                    }
                }
                if ($t=='seventh'){
                    $seventhPhoto = ISeventhListPhoto::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web').'institute/images/'.$seventhPhoto->photo;
                    $seventhPhoto->photo = $fileName;
                    if ($seventhPhoto->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $home_list = IHomePhoto::find()->where(['iHome_id'=>IHome::findOne(['itoken'=>$reg])->id])->all();
                        $second = ISecond::findOne(['iToken'=>$reg]);
                        $third_list = IThirdList::find()->where(['iThird_id'=>IThird::findOne(['itoken'=>$reg])->id])->all();
                        $fourth_list = IFourthList::find()->where(['iFourth_id'=>IFourth::findOne(['itoken'=>$reg])->id])->all();
                        $sixth_list = ISixthList::find()->where(['iSixth_id'=>ISixth::findOne(['itoken'=>$reg])->id])->all();
                        $seventh_list = ISeventhList::find()->where(['iSeventh_id'=>ISeventh::findOne(['itoken'=>$reg])->id])->all();
                        $eighth = IEighth::findOne(['itoken'=>$reg]);
                        $model = new UploadForm();

                        return $this->render('institute',[
                            'home_list'=> $home_list,
                            'second'=>$second,
                            'third_list'=>$third_list,
                            'fourth_list' =>$fourth_list,
                            'sixth_list' =>$sixth_list,
                            'seventh_list'=>$seventh_list,
                            'eighth'=>$eighth,
                            'model'=>$model,
                            'reg'=>$reg,
                        ]);
                    }
                }
                if ($t=='eighth'){
                    $eighthPhoto = IEighth::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web').'institute/images/'.$eighthPhoto->photo_back;
                    $eighthPhoto->photo_back = $fileName;
                    if ($eighthPhoto->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $home_list = IHomePhoto::find()->where(['iHome_id'=>IHome::findOne(['itoken'=>$reg])->id])->all();
                        $second = ISecond::findOne(['iToken'=>$reg]);
                        $third_list = IThirdList::find()->where(['iThird_id'=>IThird::findOne(['itoken'=>$reg])->id])->all();
                        $fourth_list = IFourthList::find()->where(['iFourth_id'=>IFourth::findOne(['itoken'=>$reg])->id])->all();
                        $sixth_list = ISixthList::find()->where(['iSixth_id'=>ISixth::findOne(['itoken'=>$reg])->id])->all();
                        $seventh_list = ISeventhList::find()->where(['iSeventh_id'=>ISeventh::findOne(['itoken'=>$reg])->id])->all();
                        $eighth = IEighth::findOne(['itoken'=>$reg]);
                        $model = new UploadForm();

                        return $this->render('institute',[
                            'home_list'=> $home_list,
                            'second'=>$second,
                            'third_list'=>$third_list,
                            'fourth_list' =>$fourth_list,
                            'sixth_list' =>$sixth_list,
                            'seventh_list'=>$seventh_list,
                            'eighth'=>$eighth,
                            'model'=>$model,
                            'reg'=>$reg,
                        ]);
                    }
                }
            }
        }

        return $this->render('institute',[
            'home_list'=> $home_list,
            'second'=>$second,
            'third_list'=>$third_list,
            'fourth_list' =>$fourth_list,
            'sixth_list' =>$sixth_list,
            'seventh_list'=>$seventh_list,
            'eighth'=>$eighth,
            'model'=>$model,
            'reg'=>$reg,
        ]);
    }

    public function actionImageTour($id=null, $t=null)
    {
        $firstBlock = TourFirstImgBlock::findOne(['id'=>FIRST]);
        $aboutUniversityBlock = TourAboutUniversityImgBlock::find()->all();
        $aboutOtherUniversityBlock = TourOtherUniversityImgBlock::find()->all();
        $ourServicesBlock = TourOurServicesImgBlock::findOne(['id'=>FIRST]);
        $aboutUsBlock = TourAboutUsImgBlock::find()->all();
        $haveQuestionsBlock = TourHaveQuestionsImgBlock::findOne(['id'=>FIRST]);
        $reviewBlock = TourReviewImgBlock::find()->all();
        $contactsBlock = TourContactsImgBlock::findOne(['id'=>FIRST]);

        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $fileName = $model->upload('tours/images/');
            if($fileName){
                if($t=='first'){
                    $blockFirst=TourFirstImgBlock::findOne(['id'=>FIRST]);
                    $currentImage = Yii::getAlias('@web'). 'tours/images/' . $blockFirst->image;
                    $blockFirst->image = $fileName;
                    if ($blockFirst->save(false)) {
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $firstBlock=TourFirstImgBlock::findOne(['id'=>$id]);
                        $aboutUniversityBlock = TourAboutUniversityImgBlock::find()->all();
                        $aboutOtherUniversityBlock = TourOtherUniversityImgBlock::find()->all();
                        $ourServicesBlock = TourOurServicesImgBlock::findOne(['id'=>FIRST]);
                        $aboutUsBlock = TourAboutUsImgBlock::find()->all();
                        $haveQuestionsBlock = TourHaveQuestionsImgBlock::findOne(['id'=>FIRST]);
                        $reviewBlock = TourReviewImgBlock::find()->all();
                        $contactsBlock = TourContactsImgBlock::findOne(['id'=>FIRST]);
                        return $this->render('tour', [
                            'firstBlock'=>$firstBlock,
                            'aboutUniversityBlock'=>$aboutUniversityBlock,
                            'aboutOtherUniversityBlock'=>$aboutOtherUniversityBlock,
                            'ourServicesBlock'=>$ourServicesBlock,
                            'aboutUsBlock'=>$aboutUsBlock,
                            'haveQuestionsBlock'=>$haveQuestionsBlock,
                            'reviewBlock'=>$reviewBlock,
                            'contactsBlock'=>$contactsBlock,
                            'model'=>$model,
                        ]);
                    }
                }
                if($t=='about_university'){
                    $blockAboutUniversity = TourAboutUniversityImgBlock::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web'). 'tours/images/' . $blockAboutUniversity->image;
                    $blockAboutUniversity->image = $fileName;

                    if($blockAboutUniversity->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $firstBlock=TourFirstImgBlock::findOne(['id'=>FIRST]);
                        $aboutUniversityBlock = TourAboutUniversityImgBlock::find()->all();
                        $aboutOtherUniversityBlock = TourOtherUniversityImgBlock::find()->all();
                        $ourServicesBlock = TourOurServicesImgBlock::findOne(['id'=>FIRST]);
                        $aboutUsBlock = TourAboutUsImgBlock::find()->all();
                        $haveQuestionsBlock = TourHaveQuestionsImgBlock::findOne(['id'=>FIRST]);
                        $reviewBlock = TourReviewImgBlock::find()->all();
                        $contactsBlock = TourContactsImgBlock::findOne(['id'=>FIRST]);
                        return $this->render('tour', [
                            'firstBlock'=>$firstBlock,
                            'aboutUniversityBlock'=>$aboutUniversityBlock,
                            'aboutOtherUniversityBlock'=>$aboutOtherUniversityBlock,
                            'ourServicesBlock'=>$ourServicesBlock,
                            'aboutUsBlock'=>$aboutUsBlock,
                            'haveQuestionsBlock'=>$haveQuestionsBlock,
                            'reviewBlock'=>$reviewBlock,
                            'contactsBlock'=>$contactsBlock,
                            'model'=>$model,
                        ]);
                    }
                }
                if($t=='aboutOtherUniversityBlock'){
                    $blockAboutOtherUniversity = TourOtherUniversityImgBlock::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web'). 'tours/images/' . $blockAboutOtherUniversity->image;
                    $blockAboutOtherUniversity->image = $fileName;

                    if($blockAboutOtherUniversity->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $firstBlock=TourFirstImgBlock::findOne(['id'=>FIRST]);
                        $aboutUniversityBlock = TourAboutUniversityImgBlock::find()->all();
                        $aboutOtherUniversityBlock = TourOtherUniversityImgBlock::find()->all();
                        $ourServicesBlock = TourOurServicesImgBlock::findOne(['id'=>FIRST]);
                        $aboutUsBlock = TourAboutUsImgBlock::find()->all();
                        $haveQuestionsBlock = TourHaveQuestionsImgBlock::findOne(['id'=>FIRST]);
                        $reviewBlock = TourReviewImgBlock::find()->all();
                        $contactsBlock = TourContactsImgBlock::findOne(['id'=>FIRST]);
                        return $this->render('tour', [
                            'firstBlock'=>$firstBlock,
                            'aboutUniversityBlock'=>$aboutUniversityBlock,
                            'aboutOtherUniversityBlock'=>$aboutOtherUniversityBlock,
                            'ourServicesBlock'=>$ourServicesBlock,
                            'aboutUsBlock'=>$aboutUsBlock,
                            'haveQuestionsBlock'=>$haveQuestionsBlock,
                            'reviewBlock'=>$reviewBlock,
                            'contactsBlock'=>$contactsBlock,
                            'model'=>$model,
                        ]);
                    }
                }
                if($t=='ourServicesBlock'){
                    $blockOurServices = TourOurServicesImgBlock::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web'). 'tours/images/' . $blockOurServices->image;
                    $blockOurServices->image = $fileName;

                    if($blockOurServices->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $firstBlock=TourFirstImgBlock::findOne(['id'=>FIRST]);
                        $aboutUniversityBlock = TourAboutUniversityImgBlock::find()->all();
                        $aboutOtherUniversityBlock = TourOtherUniversityImgBlock::find()->all();
                        $ourServicesBlock = TourOurServicesImgBlock::findOne(['id'=>FIRST]);
                        $aboutUsBlock = TourAboutUsImgBlock::find()->all();
                        $haveQuestionsBlock = TourHaveQuestionsImgBlock::findOne(['id'=>FIRST]);
                        $reviewBlock = TourReviewImgBlock::find()->all();
                        $contactsBlock = TourContactsImgBlock::findOne(['id'=>FIRST]);
                        return $this->render('tour', [
                            'firstBlock'=>$firstBlock,
                            'aboutUniversityBlock'=>$aboutUniversityBlock,
                            'aboutOtherUniversityBlock'=>$aboutOtherUniversityBlock,
                            'ourServicesBlock'=>$ourServicesBlock,
                            'aboutUsBlock'=>$aboutUsBlock,
                            'haveQuestionsBlock'=>$haveQuestionsBlock,
                            'reviewBlock'=>$reviewBlock,
                            'contactsBlock'=>$contactsBlock,
                            'model'=>$model,
                        ]);
                    }
                }
                if($t=='aboutUsBlock'){
                    $blockAboutUs = TourAboutUsImgBlock::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web'). 'tours/images/' . $blockAboutUs->image;
                    $blockAboutUs->image = $fileName;

                    if($blockAboutUs->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $firstBlock=TourFirstImgBlock::findOne(['id'=>FIRST]);
                        $aboutUniversityBlock = TourAboutUniversityImgBlock::find()->all();
                        $aboutOtherUniversityBlock = TourOtherUniversityImgBlock::find()->all();
                        $ourServicesBlock = TourOurServicesImgBlock::findOne(['id'=>FIRST]);
                        $aboutUsBlock = TourAboutUsImgBlock::find()->all();
                        $haveQuestionsBlock = TourHaveQuestionsImgBlock::findOne(['id'=>FIRST]);
                        $reviewBlock = TourReviewImgBlock::find()->all();
                        $contactsBlock = TourContactsImgBlock::findOne(['id'=>FIRST]);
                        return $this->render('tour', [
                            'firstBlock'=>$firstBlock,
                            'aboutUniversityBlock'=>$aboutUniversityBlock,
                            'aboutOtherUniversityBlock'=>$aboutOtherUniversityBlock,
                            'ourServicesBlock'=>$ourServicesBlock,
                            'aboutUsBlock'=>$aboutUsBlock,
                            'haveQuestionsBlock'=>$haveQuestionsBlock,
                            'reviewBlock'=>$reviewBlock,
                            'contactsBlock'=>$contactsBlock,
                            'model'=>$model,
                        ]);
                    }
                }
                if($t=='haveQuestionsBlock'){
                    $blockHaveQuestions = TourHaveQuestionsImgBlock::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web'). 'tours/images/' . $blockHaveQuestions->image;
                    $blockHaveQuestions->image = $fileName;

                    if($blockHaveQuestions->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $firstBlock=TourFirstImgBlock::findOne(['id'=>FIRST]);
                        $aboutUniversityBlock = TourAboutUniversityImgBlock::find()->all();
                        $aboutOtherUniversityBlock = TourOtherUniversityImgBlock::find()->all();
                        $ourServicesBlock = TourOurServicesImgBlock::findOne(['id'=>FIRST]);
                        $aboutUsBlock = TourAboutUsImgBlock::find()->all();
                        $haveQuestionsBlock = TourHaveQuestionsImgBlock::findOne(['id'=>FIRST]);
                        $reviewBlock = TourReviewImgBlock::find()->all();
                        $contactsBlock = TourContactsImgBlock::findOne(['id'=>FIRST]);
                        return $this->render('tour', [
                            'firstBlock'=>$firstBlock,
                            'aboutUniversityBlock'=>$aboutUniversityBlock,
                            'aboutOtherUniversityBlock'=>$aboutOtherUniversityBlock,
                            'ourServicesBlock'=>$ourServicesBlock,
                            'aboutUsBlock'=>$aboutUsBlock,
                            'haveQuestionsBlock'=>$haveQuestionsBlock,
                            'reviewBlock'=>$reviewBlock,
                            'contactsBlock'=>$contactsBlock,
                            'model'=>$model,
                        ]);
                    }
                }
                if($t=='reviewBlock'){
                    $blockReview = TourReviewImgBlock::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web'). 'tours/images/' . $blockReview->image;
                    $blockReview->image = $fileName;

                    if($blockReview->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $firstBlock=TourFirstImgBlock::findOne(['id'=>FIRST]);
                        $aboutUniversityBlock = TourAboutUniversityImgBlock::find()->all();
                        $aboutOtherUniversityBlock = TourOtherUniversityImgBlock::find()->all();
                        $ourServicesBlock = TourOurServicesImgBlock::findOne(['id'=>FIRST]);
                        $aboutUsBlock = TourAboutUsImgBlock::find()->all();
                        $haveQuestionsBlock = TourHaveQuestionsImgBlock::findOne(['id'=>FIRST]);
                        $reviewBlock = TourReviewImgBlock::find()->all();
                        $contactsBlock = TourContactsImgBlock::findOne(['id'=>FIRST]);
                        return $this->render('tour', [
                            'firstBlock'=>$firstBlock,
                            'aboutUniversityBlock'=>$aboutUniversityBlock,
                            'aboutOtherUniversityBlock'=>$aboutOtherUniversityBlock,
                            'ourServicesBlock'=>$ourServicesBlock,
                            'aboutUsBlock'=>$aboutUsBlock,
                            'haveQuestionsBlock'=>$haveQuestionsBlock,
                            'reviewBlock'=>$reviewBlock,
                            'contactsBlock'=>$contactsBlock,
                            'model'=>$model,
                        ]);
                    }
                }
                if($t=='contactsBlock'){
                    $blockContacts = TourContactsImgBlock::findOne(['id'=>$id]);
                    $currentImage = Yii::getAlias('@web'). 'tours/images/' . $blockContacts->image;
                    $blockContacts->image = $fileName;

                    if($blockContacts->save(false)){
                        if (file_exists($currentImage))
                            unlink($currentImage);
                        $firstBlock=TourFirstImgBlock::findOne(['id'=>FIRST]);
                        $aboutUniversityBlock = TourAboutUniversityImgBlock::find()->all();
                        $aboutOtherUniversityBlock = TourOtherUniversityImgBlock::find()->all();
                        $ourServicesBlock = TourOurServicesImgBlock::findOne(['id'=>FIRST]);
                        $aboutUsBlock = TourAboutUsImgBlock::find()->all();
                        $haveQuestionsBlock = TourHaveQuestionsImgBlock::findOne(['id'=>FIRST]);
                        $reviewBlock = TourReviewImgBlock::find()->all();
                        $contactsBlock = TourContactsImgBlock::findOne(['id'=>FIRST]);
                        return $this->render('tour', [
                            'firstBlock'=>$firstBlock,
                            'aboutUniversityBlock'=>$aboutUniversityBlock,
                            'aboutOtherUniversityBlock'=>$aboutOtherUniversityBlock,
                            'ourServicesBlock'=>$ourServicesBlock,
                            'aboutUsBlock'=>$aboutUsBlock,
                            'haveQuestionsBlock'=>$haveQuestionsBlock,
                            'reviewBlock'=>$reviewBlock,
                            'contactsBlock'=>$contactsBlock,
                            'model'=>$model,
                        ]);
                    }
                }
            }
        }

        return $this->render('tour', [
            'firstBlock'=>$firstBlock,
            'aboutUniversityBlock'=>$aboutUniversityBlock,
            'aboutOtherUniversityBlock'=>$aboutOtherUniversityBlock,
            'ourServicesBlock'=>$ourServicesBlock,
            'aboutUsBlock'=>$aboutUsBlock,
            'haveQuestionsBlock'=>$haveQuestionsBlock,
            'reviewBlock'=>$reviewBlock,
            'contactsBlock'=>$contactsBlock,
            'model'=>$model,
        ]);
    }
}