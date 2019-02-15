<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_privilege".
 *
 * @property integer $id
 * @property string $text_uk
 * @property string $text_ru
 * @property integer $privilege_id
 *
 * @property Privilege $privilege
 */
class ListPrivilege extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_privilege';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text_uk', 'text_ru'], 'string'],
            [['privilege_id'], 'required'],
            [['privilege_id'], 'integer'],
            [['privilege_id'], 'exist', 'skipOnError' => true, 'targetClass' => Privilege::className(), 'targetAttribute' => ['privilege_id' => 'id']],
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
            'privilege_id' => 'Privilege ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrivilege()
    {
        return $this->hasOne(Privilege::className(), ['id' => 'privilege_id']);
    }
}
