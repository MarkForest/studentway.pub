<?php
  namespace app\modules\admin\models;
  use yii\base\Model;
  use app\models\MobiHome;
  class MobiHomeForm extends Model
  {
    public $desc_ru;
    public $desc_uk;
    public $header_ru;
    public $header_uk;
    public $contact_one;
    public $contact_two;
    public $address_ru;
    public $address_uk;
    public $reg;

    public function rules(){
      return [
          [['header_ru', 'header_uk', 'contact_one', 'contact_two', 'address_ru', 'address_uk'], 'string', 'max' => 50],
          [['desc_ru', 'desc_uk'], 'string', 'max' => 500],
      ];
    }
    public function attributeLabels(){
      return[
        'id' => 'ID',
        'desc_ru' => 'Описание (Ru)',
        'desc_uk' => 'Описание (Uk)',
        'header_ru' => 'Загаловок (Ru)',
        'header_uk' => 'Загаловок (Uk)',
        'region_key' => 'Region Key',
        'contact_one' => 'Теллефон Первый',
        'contact_two' => 'Теллефон Второй',
        'address_ru' => 'Адресс (Ru)',
        'address_uk' => 'Адресс (Uk)',
      ];
    }
    public function saveData(){
      $mobiHome = MobiHome::findOne(['region_key'=>$this->reg]);
      $mobiHome->desc_ru = $this->desc_ru;
      $mobiHome->desc_uk = $this->desc_uk;
      $mobiHome->header_ru = $this->header_ru;
      $mobiHome->header_uk = $this->header_uk;
      $mobiHome->contact_one = $this->contact_one;
      $mobiHome->contact_two = $this->contact_two;
      $mobiHome->address_ru = $this->address_ru;
      $mobiHome->address_uk = $this->address_uk;
      $mobiHome->region_key = $this->reg;

      return $mobiHome->save(false);
    }
  }

?>
