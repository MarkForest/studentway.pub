<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iSecond".
 *
 * @property integer $id
 * @property string $iToken
 * @property string $title_uk
 * @property string $title_ru
 * @property string $top_description_uk
 * @property string $top_description_ru
 * @property string $description_uk
 * @property string $description_ru
 * @property string $photo
 *
 * @property ISecondList[] $iSecondLists
 */
class ISecond extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'isecond';
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
            [['top_description_uk', 'top_description_ru', 'description_uk', 'description_ru', 'photo'], 'string', 'max' => 255],
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
            'top_description_uk' => 'Top Description Uk',
            'top_description_ru' => 'Top Description Ru',
            'description_uk' => 'Description Uk',
            'description_ru' => 'Description Ru',
            'photo' => 'Photo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getISecondLists()
    {
        return $this->hasMany(ISecondList::className(), ['iSecond_id' => 'id']);
    }
}
