<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_home".
 *
 * @property integer $id
 * @property string $text_uk
 * @property string $text_ru
 * @property integer $home_id
 *
 * @property Home $home
 */
class ListHome extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_home';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text_uk', 'text_ru'], 'string'],
            [['text_uk', 'text_ru'], 'required'],
            [['home_id'], 'required'],
            [['home_id'], 'integer'],
            [['home_id'], 'exist', 'skipOnError' => true, 'targetClass' => Home::className(), 'targetAttribute' => ['home_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text_uk' => 'Text Uk',
            'text_ru' => 'Text Ru',
            'home_id' => 'Home ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHome()
    {
        return $this->hasOne(Home::className(), ['id' => 'home_id']);
    }
}
