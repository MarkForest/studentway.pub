<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MobiAdditionally".
 *
 * @property integer $id
 * @property string $header_ru
 * @property string $header_uk
 * @property string $desc_ru
 * @property string $desc_uk
 * @property string $region_key
 *
 * @property MobiAdditionallyList[] $mobiAdditionallyLists
 */
class MobiAdditionally extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mobiadditionally';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header_ru', 'header_uk', 'desc_ru', 'desc_uk'], 'string', 'max' => 50],
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
            'region_key' => 'Region Key',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMobiAdditionallyLists()
    {
        return $this->hasMany(MobiAdditionallyList::className(), ['MobiAdditionally_id' => 'id']);
    }
}
