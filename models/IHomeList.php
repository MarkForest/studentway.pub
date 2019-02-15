<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iHome_list".
 *
 * @property integer $id
 * @property string $title_uk
 * @property string $title_ru
 * @property string $content_uk
 * @property string $content_ru
 * @property string $consult_uk
 * @property string $consult_ru
 * @property integer $iHome_id
 *
 * @property IHome $iHome
 */
class IHomeList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ihome_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_uk', 'content_ru'], 'string'],
            [['iHome_id'], 'required'],
            [['iHome_id'], 'integer'],
            [['title_uk', 'title_ru', 'consult_uk', 'consult_ru'], 'string', 'max' => 255],
            [['iHome_id'], 'exist', 'skipOnError' => true, 'targetClass' => IHome::className(), 'targetAttribute' => ['iHome_id' => 'id']],
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
            'consult_uk' => 'Consult Uk',
            'consult_ru' => 'Consult Ru',
            'iHome_id' => 'I Home ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIHome()
    {
        return $this->hasOne(IHome::className(), ['id' => 'iHome_id']);
    }
}
