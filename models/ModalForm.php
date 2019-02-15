<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 16.11.2018
 * Time: 18:10
 */

namespace app\models;


use yii\base\Model;

class ModalForm extends Model
{
    public $name;
    public $phone_number;
    public function rules()
    {
        return [
            [['name', 'phone_number'], 'required'],
            ['name', 'string'],
            ['phone_number', 'number']
        ];
    }
    public function addRecord(){



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