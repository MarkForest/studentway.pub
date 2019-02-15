<?php

namespace app\models\tour;

use Yii;

/**
 * This is the model class for table "tour_questions_block".
 *
 * @property int $id
 * @property string $title_big_head
 * @property string $title_first
 * @property string $description_first
 * @property string $title_second
 * @property string $description_second
 * @property string $title_third
 * @property string $description_third
 * @property string $title_four
 * @property string $description_four
 * @property string $title_five
 * @property string $description_five
 * @property string $title_six
 * @property string $description_six
 * @property string $text_footer
 * @property string $btn_first_text
 * @property string $btn_second_text
 */
class TourQuestionsBlock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_questions_block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description_first', 'description_second', 'description_third', 'description_four', 'description_five', 'description_six', 'text_footer'], 'string'],
            [['title_big_head', 'title_first', 'title_second', 'title_third', 'title_four', 'title_five', 'title_six', 'btn_first_text', 'btn_second_text'], 'string', 'max' => 255],
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
            'title_first' => 'Title First',
            'description_first' => 'Description First',
            'title_second' => 'Title Second',
            'description_second' => 'Description Second',
            'title_third' => 'Title Third',
            'description_third' => 'Description Third',
            'title_four' => 'Title Four',
            'description_four' => 'Description Four',
            'title_five' => 'Title Five',
            'description_five' => 'Description Five',
            'title_six' => 'Title Six',
            'description_six' => 'Description Six',
            'text_footer' => 'Text Footer',
            'btn_first_text' => 'Btn First Text',
            'btn_second_text' => 'Btn Second Text',
        ];
    }
}
