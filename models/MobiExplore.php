<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MobiExplore".
 *
 * @property integer $id
 * @property string $header_ru
 * @property string $header_uk
 * @property string $region_key
 * @property string $button_ru
 * @property string $button_uk
 *
 * @property MobiExploreLevels[] $mobiExploreLevels
 * @property MobiExploreList[] $mobiExploreLists
 */
class MobiExplore extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mobiexplore';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header_ru', 'header_uk', 'button_ru', 'button_uk'], 'string', 'max' => 50],
            [['region_key'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header_ru' => 'Header Ru',
            'header_uk' => 'Header Uk',
            'region_key' => 'Region Key',
            'button_ru' => 'Button Ru',
            'button_uk' => 'Button Uk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMobiExploreLevels()
    {
        return $this->hasMany(MobiExploreLevels::className(), ['MobiExplore_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMobiExploreLists()
    {
        return $this->hasMany(MobiExploreList::className(), ['MobiExplore_id' => 'id']);
    }
}
