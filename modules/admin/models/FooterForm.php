<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 01.10.17
 * Time: 18:54
 */

namespace app\modules\admin\models;


use app\models\Footer;
use yii\base\Model;

class FooterForm extends Model
{
     public $aboutus_title_uk;
     public $aboutus_title_ru;
     public $about_text_uk;
     public $about_text_ru;
     public $copyright_uk;
     public $copyright_ru;
     public $address_title_uk;
     public $address_title_ru;
     public $address_text_uk;
     public $address_text_ru;
     public $phone_number;
     public $email;
     public $site;
     public $reg;

    public function rules()
    {
        return [
            [['about_text_uk', 'about_text_ru', 'copyright_uk', 'copyright_ru', 'address_text_uk', 'address_text_ru'], 'string'],
            [['aboutus_title_uk','aboutus_title_ru','about_text_uk', 'about_text_ru',
                'copyright_uk', 'copyright_ru','address_title_uk','address_title_ru',
                'address_text_uk', 'address_text_ru', 'phone_number', 'email',
                'site'], 'required'],
            [['aboutus_title_uk', 'aboutus_title_ru', 'address_title_uk', 'address_title_ru', 'phone_number', 'email', 'site'], 'string', 'max' => 255],
            ['email','email'],
        ];
    }

    public function saveData(){
        $footer = Footer::findOne(['region_key'=>$this->reg]);

        $footer->aboutus_title_uk = $this->aboutus_title_uk;
        $footer->aboutus_title_ru = $this->aboutus_title_ru;
        $footer->about_text_uk = $this->about_text_uk;
        $footer->about_text_ru = $this->about_text_ru;
        $footer->copyright_uk = $this->copyright_uk;
        $footer->copyright_ru = $this->copyright_ru;
        $footer->address_title_uk = $this->address_title_uk;
        $footer->address_title_ru = $this->address_title_ru;
        $footer->address_text_uk = $this->address_text_uk;
        $footer->address_text_ru = $this->address_text_ru;
        $footer->phone_number = $this->phone_number;
        $footer->email = $this->email;
        $footer->site = $this->site;

        return $footer->save(false);
    }
}