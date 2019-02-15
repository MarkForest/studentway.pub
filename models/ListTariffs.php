<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_tariffs".
 *
 * @property integer $id
 * @property string $title_uk
 * @property string $title_ru
 * @property string $cost
 * @property integer $tariffs_id
 *
 * @property ListListTariffs[] $listListTariffs
 * @property Tariffs $tariffs
 */
class ListTariffs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_tariffs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_uk', 'title_ru'], 'string'],
            [['tariffs_id'], 'required'],
            [['tariffs_id'], 'integer'],
            [['cost'], 'string', 'max' => 25],
            [['tariffs_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tariffs::className(), 'targetAttribute' => ['tariffs_id' => 'id']],
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
            'cost' => 'Cost',
            'tariffs_id' => 'Tariffs ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListListTariffs()
    {
        return $this->hasMany(ListListTariffs::className(), ['list_tariffs_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTariffs()
    {
        return $this->hasOne(Tariffs::className(), ['id' => 'tariffs_id']);
    }
}
