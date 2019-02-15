<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request_call_me".
 *
 * @property integer $id
 * @property string $fullname
 * @property string $tall_number
 * @property string $region_key
 * @property integer $status
 */
class RequestCallMe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'request_call_me';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status'], 'integer'],
            [['fullname', 'tall_number'], 'string', 'max' => 50],
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
            'fullname' => 'Fullname',
            'tall_number' => 'Tall Number',
            'region_key' => 'Region Key',
            'status' => 'Status',
        ];
    }
}
