<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "getting_first".
 *
 * @property integer $id
 * @property string $disc_uk
 * @property string $disc_ru
 * @property string $button_text_uk
 * @property string $button_text_ru
 * @property string $region_key
 */
class GettingFirst extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'getting_first';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['disc_uk', 'disc_ru', 'button_text_uk', 'button_text_ru'], 'required'],
            [['disc_uk', 'disc_ru', 'button_text_uk', 'button_text_ru'], 'string'],
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
            'disc_uk' => 'Disc Uk',
            'disc_ru' => 'Disc Ru',
            'button_text_uk' => 'Button Text Uk',
            'button_text_ru' => 'Button Text Ru',
            'region_key' => 'Region Key',
        ];
    }
}
