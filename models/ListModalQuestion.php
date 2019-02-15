<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_modal_question".
 *
 * @property integer $id
 * @property string $title_uk
 * @property string $title_ru
 * @property string $text_uk
 * @property string $text_ru
 * @property integer $modal_question_id
 *
 * @property ModalQuestion $modalQuestion
 */
class ListModalQuestion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_modal_question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_uk', 'title_ru', 'text_uk', 'text_ru'], 'string'],
            [['modal_question_id'], 'required'],
            [['modal_question_id'], 'integer'],
            [['modal_question_id'], 'exist', 'skipOnError' => true, 'targetClass' => ModalQuestion::className(), 'targetAttribute' => ['modal_question_id' => 'id']],
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
            'text_uk' => 'Text Uk',
            'text_ru' => 'Text Ru',
            'modal_question_id' => 'Modal Question ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModalQuestion()
    {
        return $this->hasOne(ModalQuestion::className(), ['id' => 'modal_question_id']);
    }
}
