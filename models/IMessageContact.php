<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iMessage_contact".
 *
 * @property integer $id
 * @property string $email
 * @property string $name
 * @property string $message
 * @property integer $status
 * @property string $institute
 */
class IMessageContact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'imessage_contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['status'], 'integer'],
            [['email', 'name', 'institute'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'message' => 'Message',
            'status' => 'Status',
            'institute' => 'Institute',
        ];
    }
}
