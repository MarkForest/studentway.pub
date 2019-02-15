<?php
namespace app\models;
use yii\base\Model;
class AskQuestionForm extends Model
{
    public $name;
    public $email;
    public $message;
    public $status;

    public function rules()
    {
        return [
            [['name', 'email', 'message', 'status'], 'required'],
            [['message'], 'string'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 25],
            [['email'], 'string', 'max' => 255],
            ['email','email'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name'=>'Имя',
            'email'=>'Email',
            'message'=>'Вопрос',
            'status'=>'Статус',
        ];
    }

    public function addQuestion(){
        $askQuestion = new Askquestion();
        $askQuestion->status = 0;
        $askQuestion->name = $this->name;
        $askQuestion->email = $this->email;
        $askQuestion->message = $this->message;
        return $askQuestion->save(false);
    }


}