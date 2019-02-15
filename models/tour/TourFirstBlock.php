<?php

namespace app\models\tour;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "tour_first_blok".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $btn_message_text
 */
class TourFirstBlock extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_first_block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'btn_message_text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'btn_message_text' => 'Btn Message Text',
        ];
    }
}
