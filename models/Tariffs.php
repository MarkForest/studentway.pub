<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tariffs".
 *
 * @property integer $id
 * @property string $title_uk
 * @property string $title_ru
 * @property string $disc_uk
 * @property string $disc_ru
 * @property string $region_key
 *
 * @property ListTariffs[] $listTariffs
 */
class Tariffs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tariffs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_uk', 'title_ru', 'disc_uk', 'disc_ru'], 'string'],
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
            'title_uk' => 'Title Uk',
            'title_ru' => 'Title Ru',
            'disc_uk' => 'Disc Uk',
            'disc_ru' => 'Disc Ru',
            'region_key' => 'Region Key',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListTariffs()
    {
        return $this->hasMany(ListTariffs::className(), ['tariffs_id' => 'id']);
    }
}
