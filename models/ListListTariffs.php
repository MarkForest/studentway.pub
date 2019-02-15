<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_list_tariffs".
 *
 * @property integer $id
 * @property string $text_uk
 * @property string $text_ru
 * @property integer $list_tariffs_id
 *
 * @property ListTariffs $listTariffs
 */
class ListListTariffs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_list_tariffs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text_uk', 'text_ru'], 'string'],
            [['list_tariffs_id'], 'required'],
            [['list_tariffs_id'], 'integer'],
            [['list_tariffs_id'], 'exist', 'skipOnError' => true, 'targetClass' => ListTariffs::className(), 'targetAttribute' => ['list_tariffs_id' => 'id']],
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
            'list_tariffs_id' => 'List Tariffs ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListTariffs()
    {
        return $this->hasOne(ListTariffs::className(), ['id' => 'list_tariffs_id']);
    }
}
