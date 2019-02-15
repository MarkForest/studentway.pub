<?php
/**
 * Created by PhpStorm.
 * User: march
 * Date: 01.01.2018
 * Time: 19:03
 */

namespace app\modules\admin\models;


use app\models\ISecond;
use app\models\ISecondList;
use yii\base\Model;

class ISecondForm extends Model
{
    public $iToken;
    public $title_uk;
    public $title_ru;
    public $top_description_uk;
    public $top_description_ru;
    public $description_uk;
    public $description_ru;

    public $secondList = [];

    public function rules(){
        return [
            [['iToken'], 'required'],
            [['iToken'], 'string', 'max' => 25],
            [['title_uk', 'title_ru'], 'string', 'max' => 50],
            [['top_description_uk', 'top_description_ru', 'description_uk', 'description_ru'], 'string', 'max' => 255],
        ];
    }

    public function saveData(){
        $second = ISecond::findOne(['iToken'=>$this->iToken]);

        $second->title_uk=$this->title_uk;
        $second->title_ru=$this->title_ru;
        $second->top_description_uk=$this->top_description_uk;
        $second->top_description_ru=$this->top_description_ru;
        $second->description_uk=$this->description_uk;
        $second->description_ru=$this->description_ru;

        $isSaved = false;

        foreach (array_keys($this->secondList) as $id) {
            $list = ISecondList::findOne(['id'=>$id]);
            $list->title_uk=$this->secondList[$id]['title_uk'];
            $list->title_ru=$this->secondList[$id]['title_ru'];
            $list->description_uk=$this->secondList[$id]['description_uk'];
            $list->description_ru=$this->secondList[$id]['description_ru'];
            $list->content_uk=$this->secondList[$id]['content_uk'];
            $list->content_ru=$this->secondList[$id]['content_ru'];
            $list->link_text_uk=$this->secondList[$id]['link_text_uk'];
            $list->link_text_ru=$this->secondList[$id]['link_text_ru'];
            $isSaved=$list->save(false);
        }

        return ($second->save(false)&&$isSaved);

    }
}