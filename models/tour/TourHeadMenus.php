<?php

namespace app\models\tour;

use Yii;

/**
 * This is the model class for table "tour_head_menus".
 *
 * @property int $id
 * @property string $menu_text
 * @property string $link_text
 * @property int $tour_head_id
 *
 * @property TourHead $tourHead
 */
class TourHeadMenus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_head_menus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tour_head_id'], 'required'],
            [['tour_head_id'], 'integer'],
            [['menu_text'], 'string', 'max' => 250],
            [['tour_head_id'], 'exist', 'skipOnError' => true, 'targetClass' => TourHead::className(), 'targetAttribute' => ['tour_head_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_text' => 'Menu Text',
            'link_text' => 'Link Text',
            'tour_head_id' => 'Tour Head ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTourHead()
    {
        return $this->hasOne(TourHead::className(), ['id' => 'tour_head_id']);
    }
}
