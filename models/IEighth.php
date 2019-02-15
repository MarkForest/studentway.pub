<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iEighth".
 *
 * @property integer $id
 * @property string $itoken
 * @property string $title_uk
 * @property string $title_ru
 * @property string $info_title_uk
 * @property string $info_title_ru
 * @property string $info_content_uk
 * @property string $info_content_ru
 * @property string $email_title_uk
 * @property string $email_title_ru
 * @property string $phone_title_uk
 * @property string $phone_title_ru
 * @property string $email_content
 * @property string $phone_content
 * @property string $button_text_uk
 * @property string $button_text_ru
 * @property string $copyright_uk
 * @property string $copyright_ru
 * @property string $photo_back
 */
class IEighth extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ieighth';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['itoken'], 'required'],
            [['info_content_uk', 'info_content_ru'], 'string'],
            [['itoken'], 'string', 'max' => 25],
            [['title_uk', 'title_ru', 'email_title_uk', 'email_title_ru', 'email_content', 'phone_content', 'button_text_uk', 'button_text_ru', 'copyright_uk', 'copyright_ru', 'photo_back'], 'string', 'max' => 255],
            [['info_title_uk', 'info_title_ru', 'phone_title_uk', 'phone_title_ru'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'itoken' => 'Itoken',
            'title_uk' => 'Title Uk',
            'title_ru' => 'Title Ru',
            'info_title_uk' => 'Info Title Uk',
            'info_title_ru' => 'Info Title Ru',
            'info_content_uk' => 'Info Content Uk',
            'info_content_ru' => 'Info Content Ru',
            'email_title_uk' => 'Email Title Uk',
            'email_title_ru' => 'Email Title Ru',
            'phone_title_uk' => 'Phone Title Uk',
            'phone_title_ru' => 'Phone Title Ru',
            'email_content' => 'Email Content',
            'phone_content' => 'Phone Content',
            'button_text_uk' => 'Button Text Uk',
            'button_text_ru' => 'Button Text Ru',
            'copyright_uk' => 'Copyright Uk',
            'copyright_ru' => 'Copyright Ru',
            'photo_back' => 'Photo Back',
        ];
    }
}
