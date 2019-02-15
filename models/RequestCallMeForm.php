<?php
namespace app\models;
use app\models\RequestCallMe;
use yii\base\Model;

class RequestCallMeForm extends Model{
    public $fullname;
    public $tall_number;
    public $region_key;
    public $status;
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status'], 'integer'],
            [['fullname', 'tall_number'], 'string', 'max' => 50],
            [['region_key'], 'string', 'max' => 10],
        ];
    }
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
    public function addRequestCallMe(){
        $requestCallMe = new RequestCallMe();
        $requestCallMe->fullname = $this->fullname;
        $requestCallMe->status = 0;
        $requestCallMe->tall_number = $this->tall_number;
        $requestCallMe->region_key = $this->region_key;
        return $requestCallMe->save(false);
    }
}