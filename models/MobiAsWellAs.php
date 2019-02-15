<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MobiAsWellAs".
 *
 * @property integer $id
 * @property string $header_ru
 * @property string $header_uk
 * @property string $desc_ru
 * @property string $desc_uk
 * @property string $button_one_ru
 * @property string $button_one_uk
 * @property string $button_two_ru
 * @property string $button_two_uk
 * @property string $region_key
 * @property string $content_ru
 * @property string $content_uk
 */
class MobiAsWellAs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mobiaswellas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header_ru', 'header_uk'], 'string', 'max' => 50],
            [['desc_ru', 'desc_uk'], 'string', 'max' => 255],
            [['button_one_ru', 'button_one_uk', 'button_two_ru', 'button_two_uk'], 'string', 'max' => 100],
            [['region_key'], 'string', 'max' => 10],
            [['content_ru', 'content_uk'], 'string', 'max' => 1000],
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
            'desc_ru' => 'Desc Ru',
            'desc_uk' => 'Desc Uk',
            'button_one_ru' => 'Button One Ru',
            'button_one_uk' => 'Button One Uk',
            'button_two_ru' => 'Button Two Ru',
            'button_two_uk' => 'Button Two Uk',
            'region_key' => 'Region Key',
            'content_ru' => 'Content Ru',
            'content_uk' => 'Content Uk',
        ];
    }
}
