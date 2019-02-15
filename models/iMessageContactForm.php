<?php
/**
 * Created by PhpStorm.
 * User: march
 * Date: 31.12.2017
 * Time: 19:41
 */

namespace app\models;


use yii\base\Model;

class iMessageContactForm extends Model
{
    public $name;
    public $email;
    public $message;
    public $status;
    public $institute;

    public function rules(){
        return[
            [['name','email', 'status', 'message','institute'], 'required'],
            [['message',],'string'],
            [['status'], 'integer'],
            [['email', 'institute','name'], 'string', 'max' => 255],
            ['email','email'],
        ];
    }

    public function attributeLabels(){
        return [
            'name'=>'Имя',
            'email'=>'Email',
            'message'=>'Сообщение',
            'status'=>'Статус',
            'institute'=>'Институт',
        ];
    }

    public function addMessage(){
        $messageContact = new IMessageContact();
        $messageContact->status=0;
        $messageContact->name = $this->name;
        $messageContact->message = $this->message;
        $messageContact->email=$this->email;
        $messageContact->institute = $this->institute;
        return $messageContact->save(false);
    }

}