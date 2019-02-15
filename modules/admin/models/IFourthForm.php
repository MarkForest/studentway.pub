<?php
/**
 * Created by PhpStorm.
 * User: march
 * Date: 04.01.2018
 * Time: 14:50
 */

namespace app\modules\admin\models;


use app\models\IFourth;
use app\models\IFourthList;
use yii\base\Model;

class IFourthForm extends Model
{

    public $itoken;
    public $title_uk;
    public $title_ru;
    public  $fourthList=[];

    public function rules(){
        return[
            [['itoken'], 'required'],
            [['itoken'], 'string', 'max' => 25],
            [['title_uk', 'title_ru'], 'string', 'max' => 255],
        ];
    }

    public function saveData(){
        $iFourth = IFourth::findOne(['itoken'=>$this->itoken]);
        $iFourth->title_uk = $this->title_uk;
        $iFourth->title_ru = $this->title_ru;

        $isSaved = false;

        foreach (array_keys($this->fourthList) as $id) {
            $list = IFourthList::findOne(['id'=>$id]);
            $list->title_uk=$this->fourthList[$id]['title_uk'];
            $list->title_ru=$this->fourthList[$id]['title_ru'];
            $list->content_uk=$this->fourthList[$id]['content_uk'];
            $list->content_ru=$this->fourthList[$id]['content_ru'];
            $list->button_text_uk=$this->fourthList[$id]['button_text_uk'];
            $list->button_text_ru=$this->fourthList[$id]['button_text_ru'];
            $isSaved=$list->save(false);
        }

        return ($iFourth->save(false)&&$isSaved);
    }
}