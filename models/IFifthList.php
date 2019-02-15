<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iFifth_list".
 *
 * @property integer $id
 * @property string $title_uk
 * @property string $title_ru
 * @property string $coast
 * @property string $period_uk
 * @property string $period_ru
 * @property string $list_one_uk
 * @property string $list_one_ru
 * @property string $list_two_uk
 * @property string $list_two_ru
 * @property string $list_three_uk
 * @property string $list_three_ru
 * @property string $button_text_uk
 * @property string $button_text_ru
 * @property integer $iFifth_id
 *
 * @property IFifth $iFifth
 */
class IFifthList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ififth_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iFifth_id'], 'required'],
            [['iFifth_id'], 'integer'],
            [['title_uk', 'title_ru', 'list_one_uk', 'list_one_ru', 'list_two_uk', 'list_two_ru', 'list_three_uk', 'list_three_ru', 'button_text_uk', 'button_text_ru'], 'string', 'max' => 50],
            [['coast', 'period_uk', 'period_ru'], 'string', 'max' => 25],
            [['iFifth_id'], 'exist', 'skipOnError' => true, 'targetClass' => IFifth::className(), 'targetAttribute' => ['iFifth_id' => 'id']],
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
            'coast' => 'Coast',
            'period_uk' => 'Period Uk',
            'period_ru' => 'Period Ru',
            'list_one_uk' => 'List One Uk',
            'list_one_ru' => 'List One Ru',
            'list_two_uk' => 'List Two Uk',
            'list_two_ru' => 'List Two Ru',
            'list_three_uk' => 'List Three Uk',
            'list_three_ru' => 'List Three Ru',
            'button_text_uk' => 'Button Text Uk',
            'button_text_ru' => 'Button Text Ru',
            'iFifth_id' => 'I Fifth ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIFifth()
    {
        return $this->hasOne(IFifth::className(), ['id' => 'iFifth_id']);
    }
}
