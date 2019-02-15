<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $id
 * @property string $header_title_ua
 * @property string $header_title_ru
 * @property string $disc_uk
 * @property string $disc_ru
 * @property string $region_key
 *
 * @property ListServices[] $listServices
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header_title_ua', 'header_title_ru', 'disc_uk', 'disc_ru'], 'string'],
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
            'header_title_ua' => 'Header Title Ua',
            'header_title_ru' => 'Header Title Ru',
            'disc_uk' => 'Disc Uk',
            'disc_ru' => 'Disc Ru',
            'region_key' => 'Region Key',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListServices()
    {
        return $this->hasMany(ListServices::className(), ['services_id' => 'id']);
    }
}
