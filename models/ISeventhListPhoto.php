<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iSeventh_list_photo".
 *
 * @property integer $id
 * @property string $photo
 * @property integer $iSeventh_list_id
 *
 * @property ISeventhList $iSeventhList
 */
class ISeventhListPhoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'iseventh_list_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo', 'iSeventh_list_id'], 'required'],
            [['iSeventh_list_id'], 'integer'],
            [['photo'], 'string', 'max' => 255],
            [['iSeventh_list_id'], 'exist', 'skipOnError' => true, 'targetClass' => ISeventhList::className(), 'targetAttribute' => ['iSeventh_list_id' => 'id']],
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
            'iSeventh_list_id' => 'I Seventh List ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getISeventhList()
    {
        return $this->hasOne(ISeventhList::className(), ['id' => 'iSeventh_list_id']);
    }
}
