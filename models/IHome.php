<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iHome".
 *
 * @property integer $id
 * @property string $itoken
 * @property string $logo_title_uk
 * @property string $top_description_uk
 * @property string $top_description_ru
 * @property string $main_description_uk
 * @property string $main_description_ru
 * @property string $header_uk
 * @property string $header_ru
 * @property string $city_uk
 * @property string $city_ru
 * @property string $logo_title_ru
 *
 * @property IHomeList[] $iHomeLists
 * @property IHomePhoto[] $iHomePhotos
 */
class IHome extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ihome';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['top_description_uk', 'top_description_ru'], 'string'],
            [['itoken'], 'string', 'max' => 25],
            [['logo_title_uk', 'main_description_uk', 'main_description_ru', 'header_uk', 'header_ru', 'city_uk', 'city_ru', 'logo_title_ru'], 'string', 'max' => 255],
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
            'logo_title_uk' => 'Logo Title Uk',
            'top_description_uk' => 'Top Description Uk',
            'top_description_ru' => 'Top Description Ru',
            'main_description_uk' => 'Main Description Uk',
            'main_description_ru' => 'Main Description Ru',
            'header_uk' => 'Header Uk',
            'header_ru' => 'Header Ru',
            'city_uk' => 'City Uk',
            'city_ru' => 'City Ru',
            'logo_title_ru' => 'Logo Title Ru',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIHomeLists()
    {
        return $this->hasMany(IHomeList::className(), ['iHome_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIHomePhotos()
    {
        return $this->hasMany(IHomePhoto::className(), ['iHome_id' => 'id']);
    }
}
