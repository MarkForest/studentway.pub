<?php
/**
 * Created by PhpStorm.
 * User: march
 * Date: 04.01.2018
 * Time: 19:21
 */

namespace app\modules\admin\models;


use app\models\ISeventh;
use app\models\ISeventhList;
use yii\base\Model;

class ISeventhForm extends Model
{
    public $itoken;
    public $title_uk;
    public $title_ru;
    public $seventhList=[];

    public function rules()
    {
        return [
            [['itoken'], 'required'],
            [['itoken'], 'string', 'max' => 25],
            [['title_uk', 'title_ru'], 'string', 'max' => 50],
        ];
    }

    public function saveData(){
        $iSeventh = ISeventh::findOne(['itoken'=>$this->itoken]);
        $iSeventh->title_uk = $this->title_uk;
        $iSeventh->title_ru = $this->title_ru;

        $isSaved = false;

        foreach (array_keys($this->seventhList) as $id) {
            $list = ISeventhList::findOne(['id'=>$id]);
            $list->name_uk=$this->seventhList[$id]['name_uk'];
            $list->name_ru=$this->seventhList[$id]['name_ru'];
            $list->content_uk=$this->seventhList[$id]['content_uk'];
            $list->content_ru=$this->seventhList[$id]['content_ru'];
            $isSaved=$list->save(false);
        }

        return ($iSeventh->save(false)&&$isSaved);
    }

}