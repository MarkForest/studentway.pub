<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 25.09.17
 * Time: 19:38
 */

namespace app\models;


use yii\base\Model;


class RecordsForm extends Model
{
    public $name;
    public $phoneNumber;
    public $email;
    public $status;

    public function rules()
    {
        return [
            [['name', 'phoneNumber', 'email', 'status'], 'required'],
            [['status'], 'integer'],
            [['name', 'phoneNumber'], 'string', 'max' => 25],
            [['email'],'string', 'max' => 150],
            ['email','email'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name'=>'Имя',
            'email'=>'Email',
            'phoneNumber'=>'Номер телефона',
        ];
    }

    public function addRecord(){

        $rec = Records::findOne(['email'=>$this->email]);

        if(isset($rec) && $rec->status==0)
            return false;
        else {
            $newRecord = new Records();
            $newRecord->name = $this->name;
            $newRecord->email = $this->email;
            $newRecord->phone_number = $this->phoneNumber;
            $newRecord->status = 0;
            return $newRecord->save(false);
        }
    }
}