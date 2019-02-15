<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iFourth_list".
 *
 * @property integer $id
 * @property string $title_uk
 * @property string $title_ru
 * @property string $content_uk
 * @property string $content_ru
 * @property string $button_text_uk
 * @property string $button_text_ru
 * @property integer $iFourth_id
 *
 * @property IFourth $iFourth
 * @property IFourthListPhoto[] $iFourthListPhotos
 */
class IFourthList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ifourth_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_uk', 'content_ru'], 'string'],
            [['iFourth_id'], 'required'],
            [['iFourth_id'], 'integer'],
            [['title_uk', 'title_ru', 'button_text_uk', 'button_text_ru'], 'string', 'max' => 255],
            [['iFourth_id'], 'exist', 'skipOnError' => true, 'targetClass' => IFourth::className(), 'targetAttribute' => ['iFourth_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_uk' => 'Title Uk',
            'title_ru' => 'Title Ru',
            'content_uk' => 'Content Uk',
            'content_ru' => 'Content Ru',
            'button_text_uk' => 'Button Text Uk',
            'button_text_ru' => 'Button Text Ru',
            'iFourth_id' => 'I Fourth ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIFourth()
    {
        return $this->hasOne(IFourth::className(), ['id' => 'iFourth_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIFourthListPhotos()
    {
        return $this->hasMany(IFourthListPhoto::className(), ['iFourth_list_id' => 'id']);
    }
}
