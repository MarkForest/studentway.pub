<?php

namespace app\models\tour;

use Yii;

/**
 * This is the model class for table "tour_about_us_block".
 *
 * @property int $id
 * @property string $title_big_head
 * @property string $text_head
 * @property string $title_big_footer
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
 * @property string $text_footer
 * @property string $btn_first_text
 * @property string $btn_second_text
 */
class TourAboutUsBlock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_about_us_block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_head', 'text_footer'], 'string'],
            [['title_big_head', 'title_big_footer', 'title_first', 'description_first', 'title_second', 'description_second', 'title_third', 'description_third', 'title_four', 'description_four', 'title_five', 'description_five', 'btn_first_text', 'btn_second_text'], 'string', 'max' => 255],
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
            'text_head' => 'Text Head',
            'title_big_footer' => 'Title Big Footer',
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
            'text_footer' => 'Text Footer',
            'btn_first_text' => 'Btn First Text',
            'btn_second_text' => 'Btn Second Text',
        ];
    }
}
