<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property integer $id
 * @property string $header_title_uk
 * @property string $header_title_ru
 * @property string $disc_uk
 * @property string $disc_ru
 * @property string $region_key
 *
 * @property ListQuestion[] $listQuestions
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['disc_uk', 'disc_ru'], 'string'],
            [['header_title_uk', 'header_title_ru'], 'string', 'max' => 255],
            [['region_key'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header_title_uk' => 'Header Title Uk',
            'header_title_ru' => 'Header Title Ru',
            'disc_uk' => 'Disc Uk',
            'disc_ru' => 'Disc Ru',
            'region_key' => 'Region Key',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListQuestions()
    {
        return $this->hasMany(ListQuestion::className(), ['question_id' => 'id']);
    }
}
