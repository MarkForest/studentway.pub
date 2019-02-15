<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MobiHome".
 *
 * @property integer $id
 * @property string $desc_ru
 * @property string $desc_uk
 * @property string $header_ru
 * @property string $header_uk
 * @property string $region_key
 * @property string $contact_one
 * @property string $contact_two
 * @property string $address_ru
 * @property string $address_uk
 */
class MobiHome extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mobihome';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desc_ru', 'desc_uk', 'header_ru', 'header_uk', 'contact_one', 'contact_two', 'address_ru', 'address_uk'], 'string', 'max' => 50],
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
            'desc_ru' => 'Desc Ru',
            'desc_uk' => 'Desc Uk',
            'header_ru' => 'Header Ru',
            'header_uk' => 'Header Uk',
            'region_key' => 'Region Key',
            'contact_one' => 'Contact One',
            'contact_two' => 'Contact Two',
            'address_ru' => 'Address Ru',
            'address_uk' => 'Address Uk',
        ];
    }
}
