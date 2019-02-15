<?php
namespace app\modules\admin\models;


use app\models\FormHome;
use yii\base\Model;

class FormHomeForm extends Model
{
    public $desc_ru;
    public $desc_uk;
    public $header_ru;
    public $header_uk;
    public $name_placeholder_ru;
    public $name_placeholder_uk;
    public $tell_placeholder_ru;
    public $tell_placeholder_uk;
    public $button_text_ru;
    public $button_text_uk;
    public $reg;


    public function rules(){
        return [
            [['region_key'], 'required'],
            [['desc_ru', 'desc_uk', 'header_ru', 'header_uk', 'name_placeholder_ru', 'name_placeholder_uk', 'tell_placeholder_ru', 'tell_placeholder_uk', 'button_text_ru', 'button_text_uk'], 'string', 'max' => 50],
            [['region_key'], 'string', 'max' => 10],
        ];
    }

    public function saveData(){
        $formHome = FormHome::findOne(['region_key'=>$this->reg]);
        $formHome->desc_ru = $this->desc_ru;
        $formHome->desc_uk = $this->desc_uk;
        $formHome->header_ru = $this->header_ru;
        $formHome->header_uk = $this->header_uk;
        $formHome->name_placeholder_ru = $this->name_placeholder_ru;
        $formHome->name_placeholder_uk = $this->name_placeholder_uk;
        $formHome->tell_placeholder_ru = $this->tell_placeholder_ru;
        $formHome->tell_placeholder_uk = $this->tell_placeholder_uk;
        $formHome->button_text_ru = $this->button_text_ru;
        $formHome->button_text_uk = $this->button_text_uk;
        return($formHome->save(false));
    }
}