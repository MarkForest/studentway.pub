<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iSeventh".
 *
 * @property integer $id
 * @property string $itoken
 * @property string $title_uk
 * @property string $title_ru
 *
 * @property ISeventhList[] $iSeventhLists
 */
class ISeventh extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'iseventh';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['itoken'], 'required'],
            [['itoken'], 'string', 'max' => 25],
            [['title_uk', 'title_ru'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'itoken' => 'Itoken',
            'title_uk' => 'Title Uk',
            'title_ru' => 'Title Ru',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getISeventhLists()
    {
        return $this->hasMany(ISeventhList::className(), ['iSeventh_id' => 'id']);
    }
}
