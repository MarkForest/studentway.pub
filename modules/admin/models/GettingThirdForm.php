<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 30.09.17
 * Time: 4:03
 */

namespace app\modules\admin\models;


use app\models\GettingThird;
use app\models\ListGettingThird;
use yii\base\Model;

class GettingThirdForm extends Model
{
     public $title_uk;
     public $title_ru;
     public $cost;
     public $reg;
     public $listGettingThird=[];

    public function rules()
    {
        return [
            [['title_uk', 'title_ru'], 'string'],
            [['title_uk', 'title_ru'], 'required'],
            [['cost'], 'string', 'max' => 25],
        ];
    }


    public function saveData(){

        $gettingThird = GettingThird::findOne(['region_key'=>$this->reg]);
        $gettingThird->title_uk=$this->title_uk;
        $gettingThird->title_ru=$this->title_ru;
        $gettingThird->cost=$this->cost;

        $isSaved = false;
        foreach (array_keys($this->listGettingThird) as $id){
            $list = ListGettingThird::findOne(['id'=>$id]);
            $list->text_ru = $this->listGettingThird[$id]['text_ru'];
            $list->text_uk = $this->listGettingThird[$id]['text_uk'];
            $isSaved = $list->save(false);
        }

        return ($gettingThird->save(false)&&$isSaved);
    }
}