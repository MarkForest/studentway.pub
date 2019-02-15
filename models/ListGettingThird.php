<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_getting_third".
 *
 * @property integer $id
 * @property string $text_uk
 * @property string $text_ru
 * @property string $image
 * @property integer $getting_third_id
 *
 * @property GettingThird $gettingThird
 */
class ListGettingThird extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_getting_third';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text_uk', 'text_ru'], 'string'],
            [['getting_third_id'], 'required'],
            [['getting_third_id'], 'integer'],
            [['image'], 'string', 'max' => 256],
            [['getting_third_id'], 'exist', 'skipOnError' => true, 'targetClass' => GettingThird::className(), 'targetAttribute' => ['getting_third_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text_uk' => 'Text Uk',
            'text_ru' => 'Text Ru',
            'image' => 'Image',
            'getting_third_id' => 'Getting Third ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGettingThird()
    {
        return $this->hasOne(GettingThird::className(), ['id' => 'getting_third_id']);
    }
}
