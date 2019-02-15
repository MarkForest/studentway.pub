<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_services".
 *
 * @property integer $id
 * @property string $image
 * @property string $block_title_uk
 * @property string $block_title_ru
 * @property string $text_uk
 * @property string $text_ru
 * @property integer $services_id
 *
 * @property Services $services
 */
class ListServices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'block_title_uk', 'block_title_ru', 'text_uk', 'text_ru'], 'string'],
            [['services_id'], 'required'],
            [['services_id'], 'integer'],
            [['services_id'], 'exist', 'skipOnError' => true, 'targetClass' => Services::className(), 'targetAttribute' => ['services_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'block_title_uk' => 'Block Title Uk',
            'block_title_ru' => 'Block Title Ru',
            'text_uk' => 'Text Uk',
            'text_ru' => 'Text Ru',
            'services_id' => 'Services ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasOne(Services::className(), ['id' => 'services_id']);
    }
}
