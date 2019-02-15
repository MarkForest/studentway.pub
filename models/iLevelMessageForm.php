<?php
/**
 * Created by PhpStorm.
 * User: march
 * Date: 01.01.2018
 * Time: 2:05
 */

namespace app\models;


use yii\base\Model;

class iLevelMessageForm extends Model
{
    public $email;
    public $level;
    public $status;
    public $institute;

    public function rules(){
        return [
            [['email', 'level', 'status', 'institute'], 'required'],
            [['status'], 'integer'],
            [['email','level','institute'], 'string', 'max' => 255],
            ['email','email']
        ];
    }

    public function attributeLabels()
    {
        return [
            'email'=>'Email',
            'level'=>'Уровень',
            'status'=>'Статус',
            'institute'=>'Институт',
        ];
    }

    public function addLevelMessage(){
        $level = new ILevelMessage();
        $level->institute = $this->institute;
        $level->status = 0;
        $level->level = $this->level;
        $level->email = $this->email;
        return $level->save(false);
    }

}