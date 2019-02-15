<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_question".
 *
 * @property integer $id
 * @property string $title_uk
 * @property string $title_ru
 * @property string $button_text_uk
 * @property string $button_text_ru
 * @property integer $question_id
 *
 * @property ListListQuestion[] $listListQuestions
 * @property Question $question
 * @property ModalQuestion[] $modalQuestions
 */
class ListQuestion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['button_text_uk', 'button_text_ru'], 'string'],
            [['question_id'], 'required'],
            [['question_id'], 'integer'],
            [['title_uk', 'title_ru'], 'string', 'max' => 255],
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => Question::className(), 'targetAttribute' => ['question_id' => 'id']],
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
            'button_text_uk' => 'Button Text Uk',
            'button_text_ru' => 'Button Text Ru',
            'question_id' => 'Question ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListListQuestions()
    {
        return $this->hasMany(ListListQuestion::className(), ['list_question_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestion()
    {
        return $this->hasOne(Question::className(), ['id' => 'question_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModalQuestions()
    {
        return $this->hasMany(ModalQuestion::className(), ['list_question_id' => 'id']);
    }
}
