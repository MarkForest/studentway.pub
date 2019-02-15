<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iHome_photo".
 *
 * @property integer $id
 * @property string $photo
 * @property integer $iHome_id
 *
 * @property IHome $iHome
 */
class IHomePhoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ihome_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iHome_id'], 'required'],
            [['iHome_id'], 'integer'],
            [['photo'], 'string', 'max' => 255],
            [['iHome_id'], 'exist', 'skipOnError' => true, 'targetClass' => IHome::className(), 'targetAttribute' => ['iHome_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Photo',
            'iHome_id' => 'I Home ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIHome()
    {
        return $this->hasOne(IHome::className(), ['id' => 'iHome_id']);
    }
}
