<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_list_question".
 *
 * @property integer $id
 * @property string $text_uk
 * @property string $text_ru
 * @property integer $list_question_id
 *
 * @property ListQuestion $listQuestion
 */
class ListListQuestion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_list_question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text_uk', 'text_ru'], 'string'],
            [['list_question_id'], 'required'],
            [['list_question_id'], 'integer'],
            [['list_question_id'], 'exist', 'skipOnError' => true, 'targetClass' => ListQuestion::className(), 'targetAttribute' => ['list_question_id' => 'id']],
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
            'list_question_id' => 'List Question ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListQuestion()
    {
        return $this->hasOne(ListQuestion::className(), ['id' => 'list_question_id']);
    }
}
