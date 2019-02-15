<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 01.10.17
 * Time: 17:50
 */

namespace app\modules\admin\models;


use app\models\GettingFifth;
use yii\base\Model;

class GettingFifthForm extends Model
{
    public $title_uk;
    public $title_ru;
    public $button_text_uk;
    public $button_text_ru;
    public $reg;


    public function rules()
    {
        return [
            [['title_uk', 'title_ru', 'button_text_uk', 'button_text_ru'], 'string', 'max' => 255],
            [['title_uk', 'title_ru', 'button_text_uk', 'button_text_ru'], 'required'],
        ];
    }

    public function saveData(){
        $gettingFifth = GettingFifth::findOne(['region_key'=>$this->reg]);

        $gettingFifth->title_uk = $this->title_uk;
        $gettingFifth->title_ru = $this->title_ru;
        $gettingFifth->button_text_uk = $this->button_text_uk;
        $gettingFifth->button_text_ru = $this->button_text_ru;

        return $gettingFifth->save(false);
    }
}