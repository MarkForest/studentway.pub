<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iFifth".
 *
 * @property integer $id
 * @property string $itoken
 * @property string $title_uk
 * @property string $title_ru
 *
 * @property IFifthList[] $iFifthLists
 */
class IFifth extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ififth';
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
    public function getIFifthLists()
    {
        return $this->hasMany(IFifthList::className(), ['iFifth_id' => 'id']);
    }
}
