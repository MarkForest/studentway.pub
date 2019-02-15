<?php

namespace app\models\tour;

use Yii;

/**
 * This is the model class for table "tour_head".
 *
 * @property int $id
 * @property string $logo_text
 * @property string $phone_number
 *
 * @property TourHeadMenus[] $tourHeadMenuses
 */
class TourHead extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_head';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['logo_text', 'phone_number'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logo_text' => 'Logo Text',
            'phone_number' => 'Phone Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTourHeadMenuses()
    {
        return $this->hasMany(TourHeadMenus::className(), ['tour_head_id' => 'id']);
    }
}
