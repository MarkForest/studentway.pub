<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iMenu".
 *
 * @property integer $id
 * @property string $itoken
 * @property string $home_uk
 * @property string $home_ru
 * @property string $wedo_uk
 * @property string $wedo_ru
 * @property string $level_uk
 * @property string $level_ru
 * @property string $portfolio_uk
 * @property string $portfolio_ru
 * @property string $sent_uk
 * @property string $sent_ru
 * @property string $price_uk
 * @property string $price_ru
 * @property string $contact_uk
 * @property string $contact_ru
 */
class IMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'imenu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['itoken'], 'required'],
            [['itoken', 'home_uk', 'home_ru', 'wedo_uk', 'wedo_ru', 'level_uk', 'level_ru', 'portfolio_uk', 'portfolio_ru', 'sent_uk', 'sent_ru', 'price_uk', 'price_ru', 'contact_uk', 'contact_ru'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'itoken' => 'Itoken',
            'home_uk' => 'Home Uk',
            'home_ru' => 'Home Ru',
            'wedo_uk' => 'Wedo Uk',
            'wedo_ru' => 'Wedo Ru',
            'level_uk' => 'Level Uk',
            'level_ru' => 'Level Ru',
            'portfolio_uk' => 'Portfolio Uk',
            'portfolio_ru' => 'Portfolio Ru',
            'sent_uk' => 'Sent Uk',
            'sent_ru' => 'Sent Ru',
            'price_uk' => 'Price Uk',
            'price_ru' => 'Price Ru',
            'contact_uk' => 'Contact Uk',
            'contact_ru' => 'Contact Ru',
        ];
    }
}
