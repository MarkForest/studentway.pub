<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "getting_third".
 *
 * @property integer $id
 * @property string $title_uk
 * @property string $title_ru
 * @property string $cost
 * @property string $region_key
 *
 * @property ListGettingThird[] $listGettingThirds
 */
class GettingThird extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'getting_third';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_uk', 'title_ru'], 'string'],
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
            'title_uk' => 'Title Uk',
            'title_ru' => 'Title Ru',
            'cost' => 'Cost',
            'region_key' => 'Region Key',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListGettingThirds()
    {
        return $this->hasMany(ListGettingThird::className(), ['getting_third_id' => 'id']);
    }
}
