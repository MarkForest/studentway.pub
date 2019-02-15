<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MobiPrice".
 *
 * @property integer $id
 * @property string $header_ru
 * @property string $header_uk
 * @property string $desc_one_ru
 * @property string $desc_one_uk
 * @property string $desc_two_ru
 * @property string $desc_two_uk
 * @property string $button_ru
 * @property string $button_uk
 * @property string $region_key
 */
class MobiPrice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mobiprice';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header_ru', 'header_uk'], 'string', 'max' => 500],
            [['desc_one_ru', 'desc_one_uk', 'desc_two_ru', 'desc_two_uk'], 'string', 'max' => 255],
            [['button_ru', 'button_uk'], 'string', 'max' => 50],
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
            'header_ru' => 'Header Ru',
            'header_uk' => 'Header Uk',
            'desc_one_ru' => 'Desc One Ru',
            'desc_one_uk' => 'Desc One Uk',
            'desc_two_ru' => 'Desc Two Ru',
            'desc_two_uk' => 'Desc Two Uk',
            'button_ru' => 'Button Ru',
            'button_uk' => 'Button Uk',
            'region_key' => 'Region Key',
        ];
    }
}
