<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MobiConditons".
 *
 * @property integer $id
 * @property string $header_ru
 * @property string $header_uk
 * @property string $desc_ru
 * @property string $desc_uk
 * @property string $button_ru
 * @property string $button_uk
 * @property string $region_key
 *
 * @property MobiConditonsList[] $mobiConditonsLists
 */
class MobiConditons extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mobiconditons';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header_ru', 'header_uk', 'desc_ru', 'desc_uk', 'button_ru', 'button_uk'], 'string', 'max' => 255],
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
            'header_ru' => 'Header Ru',
            'header_uk' => 'Header Uk',
            'desc_ru' => 'Desc Ru',
            'desc_uk' => 'Desc Uk',
            'button_ru' => 'Button Ru',
            'button_uk' => 'Button Uk',
            'region_key' => 'Region Key',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMobiConditonsLists()
    {
        return $this->hasMany(MobiConditonsList::className(), ['MobiConditions_id' => 'id']);
    }
}
