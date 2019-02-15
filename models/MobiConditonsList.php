<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MobiConditons_list".
 *
 * @property integer $id
 * @property string $content_ru
 * @property string $content_uk
 * @property integer $MobiConditions_id
 *
 * @property MobiConditons $mobiConditions
 */
class MobiConditonsList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mobiconditons_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MobiConditions_id'], 'integer'],
            [['content_ru', 'content_uk'], 'string', 'max' => 500],
            [['MobiConditions_id'], 'exist', 'skipOnError' => true, 'targetClass' => MobiConditons::className(), 'targetAttribute' => ['MobiConditions_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content_ru' => 'Content Ru',
            'content_uk' => 'Content Uk',
            'MobiConditions_id' => 'Mobi Conditions ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMobiConditions()
    {
        return $this->hasOne(MobiConditons::className(), ['id' => 'MobiConditions_id']);
    }
}
