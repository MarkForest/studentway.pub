<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "footer".
 *
 * @property integer $id
 * @property string $aboutus_title_uk
 * @property string $aboutus_title_ru
 * @property string $about_text_uk
 * @property string $about_text_ru
 * @property string $copyright_uk
 * @property string $copyright_ru
 * @property string $address_title_uk
 * @property string $address_title_ru
 * @property string $address_text_uk
 * @property string $address_text_ru
 * @property string $phone_number
 * @property string $email
 * @property string $site
 * @property string $form_title_uk
 * @property string $form_title_ru
 * @property string $region_key
 */
class Footer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'footer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['about_text_uk', 'about_text_ru', 'copyright_uk', 'copyright_ru', 'address_text_uk', 'address_text_ru', 'form_title_uk', 'form_title_ru'], 'string'],
            [['aboutus_title_uk', 'aboutus_title_ru', 'address_title_uk', 'address_title_ru', 'phone_number', 'email', 'site'], 'string', 'max' => 255],
            [['region_key'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'aboutus_title_uk' => 'Aboutus Title Uk',
            'aboutus_title_ru' => 'Aboutus Title Ru',
            'about_text_uk' => 'About Text Uk',
            'about_text_ru' => 'About Text Ru',
            'copyright_uk' => 'Copyright Uk',
            'copyright_ru' => 'Copyright Ru',
            'address_title_uk' => 'Address Title Uk',
            'address_title_ru' => 'Address Title Ru',
            'address_text_uk' => 'Address Text Uk',
            'address_text_ru' => 'Address Text Ru',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
            'site' => 'Site',
            'form_title_uk' => 'Form Title Uk',
            'form_title_ru' => 'Form Title Ru',
            'region_key' => 'Region Key',
        ];
    }
}
