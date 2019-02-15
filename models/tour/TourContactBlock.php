<?php

namespace app\models\tour;

use Yii;

/**
 * This is the model class for table "tour_contact_block".
 *
 * @property int $id
 * @property string $title_big_head
 * @property string $text_head
 * @property string $description_first
 * @property string $description_second
 * @property string $description_third
 * @property string $description_four
 * @property string $description_five
 * @property string $text_footer
 * @property string $link_phone_first
 * @property string $link_phone_second
 */
class TourContactBlock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_contact_block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_big_head', 'text_head', 'description_first', 'description_second', 'description_third', 'description_four', 'description_five', 'text_footer', 'link_phone_first', 'link_phone_second'], 'string', 'max' => 255],
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
            'description_first' => 'Description First',
            'description_second' => 'Description Second',
            'description_third' => 'Description Third',
            'description_four' => 'Description Four',
            'description_five' => 'Description Five',
            'text_footer' => 'Text Footer',
            'link_phone_first' => 'Link Phone First',
            'link_phone_second' => 'Link Phone Second',
        ];
    }
}
