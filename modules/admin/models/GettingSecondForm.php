<?php

namespace app\modules\admin\models;


use app\models\GettingSecond;
use yii\base\Model;

class GettingSecondForm extends Model
{

    public $timer_title_uk;
    public $timer_title_ru;
    public $title_uk;
    public $title_ru;
    public $disc_uk;
    public $disc_ru;
    public $reg;

    public function rules()
    {
        return [
            [['timer_title_ru'], 'required'],
            [['title_uk', 'title_ru', 'disc_uk', 'disc_ru'], 'string'],
            [['timer_title_uk', 'timer_title_ru'], 'string', 'max' => 255],
        ];
    }

    public function saveData(){
        $gettingSecond =  GettingSecond::findOne(['region_key'=>$this->reg]);

        $gettingSecond->timer_title_uk = $this->timer_title_uk;
        $gettingSecond->timer_title_ru = $this->timer_title_ru;
        $gettingSecond->title_uk = $this->title_uk;
        $gettingSecond->title_ru = $this->title_ru;
        $gettingSecond->disc_uk = $this->disc_uk;
        $gettingSecond->disc_ru = $this->disc_ru;

        return $gettingSecond->save(false);
    }


}