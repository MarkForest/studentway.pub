<?php

namespace app\models\tour;

use Yii;

/**
 * This is the model class for table "tour_contacts_img_block".
 *
 * @property int $id
 * @property string $image
 */
class TourContactsImgBlock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_contacts_img_block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
        ];
    }
}
