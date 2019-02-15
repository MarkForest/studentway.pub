<?php

namespace app\models\tour;

use Yii;

/**
 * This is the model class for table "tour_our_services_block".
 *
 * @property int $id
 * @property string $title_big_head
 * @property string $title_first
 * @property string $description_first_first
 * @property string $description_first_second
 * @property string $description_first_third
 * @property string $title_second
 * @property string $description_second_first
 * @property string $description_second_second
 * @property string $description_second_third
 * @property string $description_second_four
 * @property string $title_third
 * @property string $description_third_first
 * @property string $description_third_second
 * @property string $title_four
 * @property string $btn_first_text
 * @property string $btn_second_text
 */
class TourOurServicesBlock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_our_services_block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_big_head', 'title_first', 'description_first_first', 'description_first_second', 'description_first_third', 'title_second', 'description_second_first', 'description_second_second', 'description_second_third', 'description_second_four', 'title_third', 'description_third_first', 'description_third_second', 'title_four', 'btn_first_text', 'btn_second_text'], 'string', 'max' => 255],
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
            'description_first_first' => 'Description First First',
            'description_first_second' => 'Description First Second',
            'description_first_third' => 'Description First Third',
            'title_second' => 'Title Second',
            'description_second_first' => 'Description Second First',
            'description_second_second' => 'Description Second Second',
            'description_second_third' => 'Description Second Third',
            'description_second_four' => 'Description Second Four',
            'title_third' => 'Title Third',
            'description_third_first' => 'Description Third First',
            'description_third_second' => 'Description Third Second',
            'title_four' => 'Title Four',
            'btn_first_text' => 'Btn First Text',
            'btn_second_text' => 'Btn Second Text',
        ];
    }
}
