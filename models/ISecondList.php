<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iSecond_list".
 *
 * @property integer $id
 * @property string $title_uk
 * @property string $title_ru
 * @property string $description_uk
 * @property string $description_ru
 * @property string $content_uk
 * @property string $content_ru
 * @property string $link_text_uk
 * @property string $link_text_ru
 * @property integer $iSecond_id
 *
 * @property ISecond $iSecond
 */
class ISecondList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'isecond_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_uk', 'content_ru'], 'string'],
            [['iSecond_id'], 'required'],
            [['iSecond_id'], 'integer'],
            [['title_uk', 'title_ru'], 'string', 'max' => 50],
            [['description_uk', 'description_ru', 'link_text_uk', 'link_text_ru'], 'string', 'max' => 255],
            [['iSecond_id'], 'exist', 'skipOnError' => true, 'targetClass' => ISecond::className(), 'targetAttribute' => ['iSecond_id' => 'id']],
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
            'description_uk' => 'Description Uk',
            'description_ru' => 'Description Ru',
            'content_uk' => 'Content Uk',
            'content_ru' => 'Content Ru',
            'link_text_uk' => 'Link Text Uk',
            'link_text_ru' => 'Link Text Ru',
            'iSecond_id' => 'I Second ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getISecond()
    {
        return $this->hasOne(ISecond::className(), ['id' => 'iSecond_id']);
    }
}
