<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iThird_list_photo".
 *
 * @property integer $id
 * @property string $photo
 * @property integer $iThird_list_id
 *
 * @property IThirdList $iThirdList
 */
class IThirdListPhoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ithird_list_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iThird_list_id'], 'required'],
            [['iThird_list_id'], 'integer'],
            [['photo'], 'string', 'max' => 255],
            [['iThird_list_id'], 'exist', 'skipOnError' => true, 'targetClass' => IThirdList::className(), 'targetAttribute' => ['iThird_list_id' => 'id']],
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
            'iThird_list_id' => 'I Third List ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIThirdList()
    {
        return $this->hasOne(IThirdList::className(), ['id' => 'iThird_list_id']);
    }
}
