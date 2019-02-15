<?php

namespace app\models\tour;

use Yii;

/**
 * This is the model class for table "tour_prices_block".
 *
 * @property int $id
 * @property string $title_big_head
 * @property string $title_first
 * @property string $price_first
 * @property string $btn_rate_first
 * @property string $little_text_first
 * @property string $title_second
 * @property string $price_second
 * @property string $btn_rate_second
 * @property string $little_text_second
 * @property string $text_footer
 * @property string $btn_first_text
 * @property string $btn_second_text
 */
class TourPricesBlock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_prices_block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_big_head', 'title_first', 'price_first', 'btn_rate_first', 'little_text_first', 'title_second', 'price_second', 'btn_rate_second', 'little_text_second','text_footer', 'btn_first_text', 'btn_second_text'], 'string', 'max' => 255],
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
            'price_first' => 'Price First',
            'btn_rate_first' => 'Btn Rate First',
            'little_text_first' => 'Little Text First',
            'title_second' => 'Title Second',
            'price_second' => 'Price Second',
            'btn_rate_second' => 'Btn Rate Second',
            'little_text_second' => 'Little Text Second',
            'text_footer' => 'Text Footer',
            'btn_first_text' => 'Btn First Text',
            'btn_second_text' => 'Btn Second Text',
        ];
    }
}
