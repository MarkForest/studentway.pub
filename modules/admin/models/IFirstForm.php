<?php
/**
 * Created by PhpStorm.
 * User: march
 * Date: 01.01.2018
 * Time: 17:56
 */

namespace app\modules\admin\models;


use app\models\IFirst;
use app\models\IFirstList;
use yii\base\Model;

class IFirstForm extends Model
{
    public $iToken;
    public $title_uk;
    public $title_ru;
    public $firstList = [];

    public function rules(){
        return [

            [['iToken'], 'string', 'max' => 25],
            [['title_uk', 'title_ru'], 'string', 'max' => 50],
        ];
    }

    public function saveData(){
        $first = IFirst::findOne(['iToken'=>$this->iToken]);

        $first->title_ru = $this->title_ru;
        $first->title_uk = $this->title_uk;

        $isSaved = false;

        foreach (array_keys($this->firstList) as $id) {
            $list = IFirstList::findOne(['id'=>$id]);
            $list->title_uk=$this->firstList[$id]['title_uk'];
            $list->title_ru=$this->firstList[$id]['title_ru'];
            $list->content_uk=$this->firstList[$id]['content_uk'];
            $list->content_ru=$this->firstList[$id]['content_ru'];
            $isSaved=$list->save(false);
        }

        return ($first->save(false)&&$isSaved);

    }
}