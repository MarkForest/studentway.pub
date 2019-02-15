<?php

namespace app\models\tour;

use Yii;

/**
 * This is the model class for table "tour_about_university_block".
 *
 * @property int $id
 * @property string $title_big_head
 * @property string $text_head
 * @property string $title_first
 * @property string $description_first
 * @property string $title_second
 * @property string $description_second
 * @property string $title_third
 * @property string $description_third
 * @property string $title_big_footer
 * @property string $curusel_title_first
 * @property string $curusel_title_second
 * @property string $curusel_title_third
 * @property string $curusel_title_four
 * @property string $curusel_title_five
 * @property string $text_footer
 * @property string $btn_message_text
 * @property string $btn_first_text
 * @property string $btn_second_text
 */
class TourAboutUniversityBlock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_about_university_block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_big_head','text_head', 'title_first', 'description_first', 'title_second', 'description_second', 'title_third', 'description_third', 'title_big_footer', 'text_footer', 'btn_message_text', 'btn_first_text', 'btn_second_text','curusel_title_first','curusel_title_second','curusel_title_third', 'curusel_title_four', 'curusel_title_five'], 'string', 'max' => 255],
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
            'title_first' => 'Title First',
            'description_first' => 'Description First',
            'title_second' => 'Title Second',
            'description_second' => 'Description Second',
            'title_third' => 'Title Third',
            'description_third' => 'Description Third',
            'title_big_footer' => 'Title Big Footer',
            'curusel_title_first' => 'Title Big First',
            'curusel_title_second' => 'Title Big Second',
            'curusel_title_third' => 'Title Big Third',
            'curusel_title_four' => 'Title Big Four',
            'curusel_title_five' => 'Title Big Five',
            'text_footer' => 'Text Footer',
            'btn_message_text' => 'Btn Message Text',
            'btn_first_text' => 'Btn First Text',
            'btn_second_text' => 'Btn Second Text',
        ];
    }
}
