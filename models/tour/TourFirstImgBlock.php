<?php

namespace app\models\tour;

use Yii;

/**
 * This is the model class for table "tour_first_img_block".
 *
 * @property int $id
 * @property string $image
 * @property string $img_bg
 */
class TourFirstImgBlock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_first_img_block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image', 'img_bg'], 'string', 'max' => 255],
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
            'img_bg' => 'Img Bg',
        ];
    }
}
