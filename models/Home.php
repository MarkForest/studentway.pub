<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "home".
 *
 * @property integer $id
 * @property string $stock_content_uk
 * @property string $stock_content_ru:
 * @property string $title_uk
 * @property string $title_ru
 * @property string $cost
 * @property string $header_title_1_uk
 * @property string $header_title_1_ru
 * @property string $header_title_2_uk
 * @property string $header_title_2_ru
 * @property string $button_text_uk
 * @property string $button_text_ru
 * @property string $region_key
 *
 * @property ListHome[] $listHomes
 */
class Home extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'home';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stock_content_uk', 'stock_content_ru:', 'title_uk', 'title_ru', 'header_title_1_uk', 'header_title_1_ru', 'header_title_2_uk', 'header_title_2_ru', 'button_text_uk', 'button_text_ru'], 'string'],
            [['cost'], 'string', 'max' => 25],
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
            'stock_content_uk' => 'Stock Content Uk',
            'stock_content_ru' => 'Stock Content Ru',
            'title_uk' => 'Title Uk',
            'title_ru' => 'Title Ru',
            'cost' => 'Cost',
            'header_title_1_uk' => 'Header Title 1 Uk',
            'header_title_1_ru' => 'Header Title 1 Ru',
            'header_title_2_uk' => 'Header Title 2 Uk',
            'header_title_2_ru' => 'Header Title 2 Ru',
            'button_text_uk' => 'Button Text Uk',
            'button_text_ru' => 'Button Text Ru',
            'region_key' => 'Region Key',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListHomes()
    {
        return $this->hasMany(ListHome::className(), ['home_id' => 'id']);
    }
}
