<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iSixth_list_photo".
 *
 * @property integer $id
 * @property string $photo
 * @property integer $iSixth_list_id
 *
 * @property ISixthList $iSixthList
 */
class ISixthListPhoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'isixth_list_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iSixth_list_id'], 'required'],
            [['iSixth_list_id'], 'integer'],
            [['photo'], 'string', 'max' => 255],
            [['iSixth_list_id'], 'exist', 'skipOnError' => true, 'targetClass' => ISixthList::className(), 'targetAttribute' => ['iSixth_list_id' => 'id']],
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
            'iSixth_list_id' => 'I Sixth List ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getISixthList()
    {
        return $this->hasOne(ISixthList::className(), ['id' => 'iSixth_list_id']);
    }
}
