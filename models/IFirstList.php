<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iFirst_list".
 *
 * @property integer $id
 * @property string $title_uk
 * @property string $title_ru
 * @property string $content_uk
 * @property string $content_ru
 * @property integer $iFirst_id
 *
 * @property IFirst $iFirst
 */
class IFirstList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ifirst_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_uk', 'title_ru', 'content_uk', 'content_ru', 'iFirst_id'], 'required'],
            [['content_uk', 'content_ru'], 'string'],
            [['iFirst_id'], 'integer'],
            [['title_uk', 'title_ru'], 'string', 'max' => 50],
            [['iFirst_id'], 'exist', 'skipOnError' => true, 'targetClass' => IFirst::className(), 'targetAttribute' => ['iFirst_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_uk' => 'Title Uk',
            'title_ru' => 'Title Ru',
            'content_uk' => 'Content Uk',
            'content_ru' => 'Content Ru',
            'iFirst_id' => 'I First ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIFirst()
    {
        return $this->hasOne(IFirst::className(), ['id' => 'iFirst_id']);
    }
}
