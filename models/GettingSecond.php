<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "getting_second".
 *
 * @property integer $id
 * @property string $timer_title_uk
 * @property string $timer_title_ru
 * @property string $title_uk
 * @property string $title_ru
 * @property string $disc_uk
 * @property string $disc_ru
 * @property string $button_text_uk
 * @property string $button_text_ru
 * @property string $region_key
 */
class GettingSecond extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'getting_second';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['timer_title_ru'], 'required'],
            [['title_uk', 'title_ru', 'disc_uk', 'disc_ru', 'button_text_uk', 'button_text_ru'], 'string'],
            [['timer_title_uk', 'timer_title_ru'], 'string', 'max' => 255],
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
            'timer_title_uk' => 'Timer Title Uk',
            'timer_title_ru' => 'Timer Title Ru',
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
