<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modal_question".
 *
 * @property integer $id
 * @property string $header_title_uk
 * @property string $header_title_ru
 * @property string $button_text_uk
 * @property string $button_text_ru
 * @property integer $list_question_id
 *
 * @property ListModalQuestion[] $listModalQuestions
 * @property ListQuestion $listQuestion
 */
class ModalQuestion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modal_question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header_title_uk', 'header_title_ru', 'button_text_uk', 'button_text_ru'], 'string'],
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
            'header_title_uk' => 'Header Title Uk',
            'header_title_ru' => 'Header Title Ru',
            'button_text_uk' => 'Button Text Uk',
            'button_text_ru' => 'Button Text Ru',
            'list_question_id' => 'List Question ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListModalQuestions()
    {
        return $this->hasMany(ListModalQuestion::className(), ['modal_question_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListQuestion()
    {
        return $this->hasOne(ListQuestion::className(), ['id' => 'list_question_id']);
    }
}
