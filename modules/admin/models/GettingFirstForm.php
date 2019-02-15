<?php

namespace app\modules\admin\models;


use app\models\GettingFirst;
use yii\base\Model;

class GettingFirstForm extends Model
{
    public $disc_uk;
    public $disc_ru;
    public $button_text_uk;
    public $button_text_ru;
    public $reg;

    public function rules()
    {
        return [
            [['reg', 'disc_uk', 'disc_ru', 'button_text_uk', 'button_text_ru'], 'required'],
        ];
    }

    public function saveData()
    {
        $gettingFirst = GettingFirst::findOne(['region_key'=>$this->reg]);
        $gettingFirst->disc_uk = $this->disc_uk;
        $gettingFirst->disc_ru = $this->disc_ru;
        $gettingFirst->button_text_uk = $this->button_text_uk;
        $gettingFirst->button_text_ru = $this->button_text_ru;

        return $gettingFirst->save(false);
    }


}