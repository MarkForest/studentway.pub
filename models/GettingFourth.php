<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "getting_fourth".
 *
 * @property integer $id
 * @property string $title_uk
 * @property string $title_ru
 * @property string $disc_uk
 * @property string $disc_ru
 * @property string $button_text_uk
 * @property string $button_text_ru
 * @property string $region_key
 */
class GettingFourth extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'getting_fourth';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_uk', 'title_ru', 'disc_uk', 'disc_ru'], 'string'],
            [['button_text_uk', 'button_text_ru'], 'string', 'max' => 255],
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
            'title_uk' => 'Title Uk',
            'title_ru' => 'Title Ru',
            'disc_uk' => 'Disc Uk',
            'disc_ru' => 'Disc Ru',
            'button_text_uk' => 'Button Text Uk',
            'button_text_ru' => 'Button Text Ru',
            'region_key' => 'Region Key',
        ];
    }
}
