<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iFirst".
 *
 * @property integer $id
 * @property string $iToken
 * @property string $title_uk
 * @property string $title_ru
 *
 * @property IFirstList[] $iFirstLists
 */
class IFirst extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ifirst';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iToken'], 'required'],
            [['iToken'], 'string', 'max' => 25],
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
            'iToken' => 'I Token',
            'title_uk' => 'Title Uk',
            'title_ru' => 'Title Ru',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIFirstLists()
    {
        return $this->hasMany(IFirstList::className(), ['iFirst_id' => 'id']);
    }
}
