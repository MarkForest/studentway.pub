<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iLevel_message".
 *
 * @property integer $id
 * @property string $email
 * @property string $level
 * @property integer $status
 * @property string $institute
 */
class ILevelMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ilevel_message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'level', 'status', 'institute'], 'required'],
            [['status'], 'integer'],
            [['email', 'level', 'institute'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'level' => 'Level',
            'status' => 'Status',
            'institute' => 'Institute',
        ];
    }
}
