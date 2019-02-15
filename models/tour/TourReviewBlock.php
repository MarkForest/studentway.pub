<?php

namespace app\models\tour;

use Yii;

/**
 * This is the model class for table "tour_review_block".
 *
 * @property int $id
 * @property string $text_review_first
 * @property string $name_first
 * @property string $text_review_second
 * @property string $name_second
 * @property string $text_review_third
 * @property string $name_third
 * @property string $text_review_four
 * @property string $name_four
 * @property string $text_review_five
 * @property string $text_footer
 * @property string $btn_first_text
 * @property string $btn_second_text
 */
class TourReviewBlock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_review_block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_review_first', 'name_first', 'text_review_second', 'name_second',
                'text_review_third', 'name_third', 'text_review_four',
                'name_four', 'text_review_five', 'name_five', 'text_footer',
                'btn_first_text', 'btn_second_text'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text_review_first' => 'Text Review First',
            'name_first' => 'Name First',
            'text_review_second' => 'Text Review Second',
            'name_second' => 'Name Second',
            'text_review_third' => 'Text Review Third',
            'name_third' => 'Name Third',
            'text_review_four' => 'Text Review Four',
            'name_four' => 'Name Four',
            'text_review_five' => 'Text Review Five',
            'name_five' => 'Name Five',
            'text_footer' => 'Text Footer',
            'btn_first_text' => 'Btn First Text Footer',
            'btn_second_text' => 'Btn Second Text Footer',
        ];
    }
}
