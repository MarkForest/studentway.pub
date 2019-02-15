<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MobiAdditionally_list".
 *
 * @property integer $id
 * @property string $content_ru
 * @property string $content_uk
 * @property integer $MobiAdditionally_id
 *
 * @property MobiAdditionally $mobiAdditionally
 */
class MobiAdditionallyList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mobiadditionally_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MobiAdditionally_id'], 'integer'],
            [['content_ru', 'content_uk'], 'string', 'max' => 255],
            [['MobiAdditionally_id'], 'exist', 'skipOnError' => true, 'targetClass' => MobiAdditionally::className(), 'targetAttribute' => ['MobiAdditionally_id' => 'id']],
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
            'MobiAdditionally_id' => 'Mobi Additionally ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMobiAdditionally()
    {
        return $this->hasOne(MobiAdditionally::className(), ['id' => 'MobiAdditionally_id']);
    }
}
