<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iThird".
 *
 * @property integer $id
 * @property string $itoken
 * @property string $title_uk
 * @property string $title_ru
 *
 * @property IThirdList[] $iThirdLists
 */
class IThird extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ithird';
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
    public function getIThirdLists()
    {
        return $this->hasMany(IThirdList::className(), ['iThird_id' => 'id']);
    }
}
