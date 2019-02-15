<?php
/**
 * Created by PhpStorm.
 * User: march
 * Date: 04.01.2018
 * Time: 12:51
 */

namespace app\modules\admin\models;


use app\models\IThird;
use app\models\IThirdList;
use yii\base\Model;

class IThirdForm extends Model
{
    public $itoken;
    public $title_uk;
    public $title_ru;
    public $thirdList;

    public function rules(){
        return [
            [['itoken'], 'required'],
            [['itoken'], 'string', 'max' => 25],
            [['title_uk', 'title_ru'], 'string', 'max' => 50],
        ];
    }

    public function saveData(){
        $iThird = IThird::findOne(['itoken'=>$this->itoken]);
        $iThird->title_uk = $this->title_uk;
        $iThird->title_ru = $this->title_ru;

        $isSaved = false;

        foreach (array_keys($this->thirdList) as $id) {
            $list = IThirdList::findOne(['id'=>$id]);
            $list->header_uk=$this->thirdList[$id]['header_uk'];
            $list->header_ru=$this->thirdList[$id]['header_ru'];
            $list->title_uk=$this->thirdList[$id]['title_uk'];
            $list->title_ru=$this->thirdList[$id]['title_ru'];
            $list->content_uk=$this->thirdList[$id]['content_uk'];
            $list->content_ru=$this->thirdList[$id]['content_ru'];
            $list->button_text_uk=$this->thirdList[$id]['button_text_uk'];
            $list->button_text_ru=$this->thirdList[$id]['button_text_ru'];
            $isSaved=$list->save(false);
        }

        return ($iThird->save(false)&&$isSaved);
    }

}