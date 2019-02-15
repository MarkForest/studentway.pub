<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_assurance".
 *
 * @property integer $id
 * @property string $text_uk
 * @property string $text_ru
 * @property integer $assurance_id
 *
 * @property Assurance $assurance
 */
class ListAssurance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_assurance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text_uk', 'text_ru'], 'string'],
            [['assurance_id'], 'integer'],
            [['assurance_id'], 'exist', 'skipOnError' => true, 'targetClass' => Assurance::className(), 'targetAttribute' => ['assurance_id' => 'id']],
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
            'assurance_id' => 'Assurance ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssurance()
    {
        return $this->hasOne(Assurance::className(), ['id' => 'assurance_id']);
    }
}
