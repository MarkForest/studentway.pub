<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property integer $id
 * @property string $header_title_uk
 * @property string $header_title_ru
 * @property string $bottom_title_uk
 * @property string $bottom_title_ru
 */
class Partners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header_title_uk', 'header_title_ru', 'bottom_title_uk', 'bottom_title_ru'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header_title_uk' => 'Header Title Uk',
            'header_title_ru' => 'Header Title Ru',
            'bottom_title_uk' => 'Bottom Title Uk',
            'bottom_title_ru' => 'Bottom Title Ru',
        ];
    }
}
