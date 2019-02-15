<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "records".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone_number
 * @property string $email
 * @property integer $status
 */
class Records extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'records';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone_number', 'email', 'status'], 'required'],
            [['status'], 'integer'],
            [['name', 'phone_number'], 'string', 'max' => 25],
            [['email'], 'string', 'max' => 150],
            ['email','unique', 'targetAttribute'=>'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
            'status' => 'Status',
        ];
    }
}
