<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iSixth_list".
 *
 * @property integer $id
 * @property string $header_uk
 * @property string $header_ru
 * @property string $title_uk
 * @property string $title_ru
 * @property string $content_uk
 * @property string $content_ru
 * @property integer $iSixth_id
 *
 * @property ISixth $iSixth
 * @property ISixthListPhoto[] $iSixthListPhotos
 */
class ISixthList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'isixth_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header_uk', 'header_ru', 'title_uk', 'title_ru', 'content_uk', 'content_ru', 'iSixth_id'], 'required'],
            [['title_uk', 'title_ru', 'content_uk', 'content_ru'], 'string'],
            [['iSixth_id'], 'integer'],
            [['header_uk', 'header_ru'], 'string', 'max' => 50],
            [['iSixth_id'], 'exist', 'skipOnError' => true, 'targetClass' => ISixth::className(), 'targetAttribute' => ['iSixth_id' => 'id']],
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
            'iSixth_id' => 'I Sixth ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getISixth()
    {
        return $this->hasOne(ISixth::className(), ['id' => 'iSixth_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getISixthListPhotos()
    {
        return $this->hasMany(ISixthListPhoto::className(), ['iSixth_list_id' => 'id']);
    }
}
