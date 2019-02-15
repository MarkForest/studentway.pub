<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form_home".
 *
 * @property integer $id
 * @property string $desc_ru
 * @property string $desc_uk
 * @property string $header_ru
 * @property string $header_uk
 * @property string $name_placeholder_ru
 * @property string $name_placeholder_uk
 * @property string $tell_placeholder_ru
 * @property string $tell_placeholder_uk
 * @property string $button_text_ru
 * @property string $button_text_uk
 * @property string $region_key
 */
class FormHome extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_home';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_key'], 'required'],
            [['desc_ru', 'desc_uk', 'header_ru', 'header_uk', 'name_placeholder_ru', 'name_placeholder_uk', 'tell_placeholder_ru', 'tell_placeholder_uk', 'button_text_ru', 'button_text_uk'], 'string', 'max' => 50],
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
            'desc_ru' => 'Desc Ru',
            'desc_uk' => 'Desc Uk',
            'header_ru' => 'Header Ru',
            'header_uk' => 'Header Uk',
            'name_placeholder_ru' => 'Name Placeholder Ru',
            'name_placeholder_uk' => 'Name Placeholder Uk',
            'tell_placeholder_ru' => 'Tell Placeholder Ru',
            'tell_placeholder_uk' => 'Tell Placeholder Uk',
            'button_text_ru' => 'Button Text Ru',
            'button_text_uk' => 'Button Text Uk',
            'region_key' => 'Region Key',
        ];
    }
}
