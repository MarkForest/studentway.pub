<?php

namespace app\models\tour;

use Yii;

/**
 * This is the model class for table "tour_have_questions_block".
 *
 * @property int $id
 * @property string $title_big_head
 * @property string $btn_message_text
 */
class TourHaveQuestionsBlock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_have_questions_block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_big_head', 'btn_message_text'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_big_head' => 'Title Big Head',
            'btn_message_text' => 'Btn Message Text',
        ];
    }
}
