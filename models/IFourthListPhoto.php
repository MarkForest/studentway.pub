<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iFourth_list_photo".
 *
 * @property integer $id
 * @property string $photo
 * @property integer $iFourth_list_id
 *
 * @property IFourthList $iFourthList
 */
class IFourthListPhoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ifourth_list_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iFourth_list_id'], 'required'],
            [['iFourth_list_id'], 'integer'],
            [['photo'], 'string', 'max' => 255],
            [['iFourth_list_id'], 'exist', 'skipOnError' => true, 'targetClass' => IFourthList::className(), 'targetAttribute' => ['iFourth_list_id' => 'id']],
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
            'iFourth_list_id' => 'I Fourth List ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIFourthList()
    {
        return $this->hasOne(IFourthList::className(), ['id' => 'iFourth_list_id']);
    }
}
