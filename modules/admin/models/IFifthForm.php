<?php
/**
 * Created by PhpStorm.
 * User: march
 * Date: 04.01.2018
 * Time: 15:43
 */

namespace app\modules\admin\models;


use app\models\IFifth;
use app\models\IFifthList;
use yii\base\Model;

class IFifthForm extends Model
{
    public $itoken;
    public $title_uk;
    public $title_ru;
    public $fifthList;

    public function rules(){
        return [
            [['itoken'], 'required'],
            [['itoken'], 'string', 'max' => 25],
            [['title_uk', 'title_ru'], 'string', 'max' => 50],
        ];
    }

    public function saveData(){
        $iFifth = IFifth::findOne(['itoken'=>$this->itoken]);
        $iFifth->title_uk = $this->title_uk;
        $iFifth->title_ru = $this->title_ru;

        $isSaved = false;

        foreach (array_keys($this->fifthList) as $id) {
            $list = IFifthList::findOne(['id'=>$id]);
            $list->period_uk=$this->fifthList[$id]['period_uk'];
            $list->period_ru=$this->fifthList[$id]['period_ru'];
            $list->title_uk=$this->fifthList[$id]['title_uk'];
            $list->title_ru=$this->fifthList[$id]['title_ru'];
            $list->list_one_uk=$this->fifthList[$id]['list_one_uk'];
            $list->list_one_ru=$this->fifthList[$id]['list_one_ru'];
            $list->list_two_uk=$this->fifthList[$id]['list_two_uk'];
            $list->list_two_ru=$this->fifthList[$id]['list_two_ru'];
            $list->list_three_uk=$this->fifthList[$id]['list_three_uk'];
            $list->list_three_ru=$this->fifthList[$id]['list_three_ru'];
            $list->button_text_uk=$this->fifthList[$id]['button_text_uk'];
            $list->button_text_ru=$this->fifthList[$id]['button_text_ru'];
            $list->coast=$this->fifthList[$id]['coast'];
            $isSaved=$list->save(false);
        }

        return ($iFifth->save(false)&&$isSaved);
    }

}