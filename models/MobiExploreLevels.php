<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MobiExploreLevels".
 *
 * @property integer $id
 * @property string $level
 * @property string $period_ru
 * @property string $period_uk
 * @property string $desc_ru
 * @property string $desc_uk
 * @property string $info_ru
 * @property string $info_uk
 * @property string $price
 * @property string $price_period_ru
 * @property string $price_period_uk
 * @property integer $MobiExplore_id
 *
 * @property MobiExplore $mobiExplore
 */
class MobiExploreLevels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mobiexplorelevels';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MobiExplore_id'], 'required'],
            [['MobiExplore_id'], 'integer'],
            [['level'], 'string', 'max' => 25],
            [['period_ru', 'period_uk', 'price', 'price_period_ru', 'price_period_uk'], 'string', 'max' => 50],
            [['desc_ru', 'desc_uk'], 'string', 'max' => 255],
            [['MobiExplore_id'], 'exist', 'skipOnError' => true, 'targetClass' => MobiExplore::className(), 'targetAttribute' => ['MobiExplore_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'level' => 'Level',
            'period_ru' => 'Period Ru',
            'period_uk' => 'Period Uk',
            'desc_ru' => 'Desc Ru',
            'desc_uk' => 'Desc Uk',
            'info_ru' => 'Info Ru',
            'info_uk' => 'Info Uk',
            'price' => 'Price',
            'price_period_ru' => 'Price Period Ru',
            'price_period_uk' => 'Price Period Uk',
            'MobiExplore_id' => 'Mobi Explore ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMobiExplore()
    {
        return $this->hasOne(MobiExplore::className(), ['id' => 'MobiExplore_id']);
    }
}
