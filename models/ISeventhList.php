<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iSeventh_list".
 *
 * @property integer $id
 * @property string $name_uk
 * @property string $name_ru
 * @property string $content_uk
 * @property string $content_ru
 * @property integer $iSeventh_id
 *
 * @property ISeventh $iSeventh
 * @property ISeventhListPhoto[] $iSeventhListPhotos
 */
class ISeventhList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'iseventh_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_uk', 'name_ru', 'content_uk', 'content_ru', 'iSeventh_id'], 'required'],
            [['content_uk', 'content_ru'], 'string'],
            [['iSeventh_id'], 'integer'],
            [['name_uk', 'name_ru'], 'string', 'max' => 50],
            [['iSeventh_id'], 'exist', 'skipOnError' => true, 'targetClass' => ISeventh::className(), 'targetAttribute' => ['iSeventh_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uk' => 'Name Uk',
            'name_ru' => 'Name Ru',
            'content_uk' => 'Content Uk',
            'content_ru' => 'Content Ru',
            'iSeventh_id' => 'I Seventh ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getISeventh()
    {
        return $this->hasOne(ISeventh::className(), ['id' => 'iSeventh_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getISeventhListPhotos()
    {
        return $this->hasMany(ISeventhListPhoto::className(), ['iSeventh_list_id' => 'id']);
    }
}
