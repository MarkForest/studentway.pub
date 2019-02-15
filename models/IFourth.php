<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iFourth".
 *
 * @property integer $id
 * @property string $itoken
 * @property string $title_uk
 * @property string $title_ru
 *
 * @property IFourthList[] $iFourthLists
 */
class IFourth extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ifourth';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['itoken'], 'required'],
            [['itoken'], 'string', 'max' => 25],
            [['title_uk', 'title_ru'], 'string', 'max' => 255],
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
    public function getIFourthLists()
    {
        return $this->hasMany(IFourthList::className(), ['iFourth_id' => 'id']);
    }
}
