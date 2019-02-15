<?php

namespace app\models\tour;

use Yii;

/**
 * This is the model class for table "tour_footer_block".
 *
 * @property int $id
 * @property string $title_first
 * @property string $description_first
 * @property string $title_second
 * @property string $name_link_first
 * @property string $href_link_first
 * @property string $name_link_second
 * @property string $href_link_second
 * @property string $name_link_third
 * @property string $href_link_third
 * @property string $name_link_four
 * @property string $href_link_four
 * @property string $title_third
 * @property string $description_third
 * @property string $link_footer
 */
class TourFooterBlock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_footer_block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description_first', 'description_third'], 'string'],
            [['title_first', 'title_second', 'name_link_first', 'href_link_first', 'name_link_second', 'href_link_second', 'name_link_third', 'href_link_third', 'name_link_four', 'href_link_four', 'title_third', 'link_footer'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_first' => 'Title First',
            'description_first' => 'Description First',
            'title_second' => 'Title Second',
            'name_link_first' => 'Name Link First',
            'href_link_first' => 'Href Link First',
            'name_link_second' => 'Name Link Second',
            'href_link_second' => 'Href Link Second',
            'name_link_third' => 'Name Link Third',
            'href_link_third' => 'Href Link Third',
            'name_link_four' => 'Name Link Four',
            'href_link_four' => 'Href Link Four',
            'title_third' => 'Title Third',
            'description_third' => 'Description Third',
            'link_footer' => 'Link Footer',
        ];
    }
}
