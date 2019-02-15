<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iThird_list".
 *
 * @property integer $id
 * @property string $header_uk
 * @property string $header_ru
 * @property string $title_uk
 * @property string $title_ru
 * @property string $content_uk
 * @property string $content_ru
 * @property string $button_text_uk
 * @property string $button_text_ru
 * @property integer $iThird_id
 *
 * @property IThird $iThird
 * @property IThirdListPhoto[] $iThirdListPhotos
 */
class IThirdList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ithird_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_uk', 'title_ru', 'content_uk', 'content_ru'], 'string'],
            [['iThird_id'], 'required'],
            [['iThird_id'], 'integer'],
            [['header_uk', 'header_ru'], 'string', 'max' => 50],
            [['button_text_uk', 'button_text_ru'], 'string', 'max' => 255],
            [['iThird_id'], 'exist', 'skipOnError' => true, 'targetClass' => IThird::className(), 'targetAttribute' => ['iThird_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header_uk' => 'Header Uk',
            'header_ru' => 'Header Ru',
            'title_uk' => 'Title Uk',
            'title_ru' => 'Title Ru',
            'content_uk' => 'Content Uk',
            'content_ru' => 'Content Ru',
            'button_text_uk' => 'Button Text Uk',
            'button_text_ru' => 'Button Text Ru',
            'iThird_id' => 'I Third ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIThird()
    {
        return $this->hasOne(IThird::className(), ['id' => 'iThird_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIThirdListPhotos()
    {
        return $this->hasMany(IThirdListPhoto::className(), ['iThird_list_id' => 'id']);
    }
}
