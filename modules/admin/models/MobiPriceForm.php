<?php
  namespace app\modules\admin\models;
  use yii\base\Model;
  use app\models\MobiPrice;
  class MobiPriceForm extends Model{
    public $header_ru;
    public $header_uk;
    public $desc_one_ru;
    public $desc_one_uk;
    public $desc_two_ru;
    public $desc_two_uk;
    public $button_ru;
    public $button_uk;
    public $reg;
    public function rules()
    {
        return [
            [['header_ru', 'header_uk'], 'string', 'max' => 500],
            [['desc_one_ru', 'desc_one_uk', 'desc_two_ru', 'desc_two_uk'], 'string', 'max' => 255],
            [['button_ru', 'button_uk'], 'string', 'max' => 50],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header_ru' => 'Заголовок (Ru)',
            'header_uk' => 'Заголовок (Uk)',
            'desc_one_ru' => 'Описание (Ru)',
            'desc_one_uk' => 'Описание (Uk)',
            'desc_two_ru' => 'Описание (Ru)',
            'desc_two_uk' => 'Описание (Uk)',
            'button_ru' => 'Текст кнопки (Ru)',
            'button_uk' => 'Текст кнопки (Uk)',
            'region_key' => 'Region Key',
        ];
    }
    public function saveData(){
      $mobiPrice = MobiPrice::findOne(['region_key'=>$this->reg]);
      $mobiPrice->header_ru = $this->header_ru;
      $mobiPrice->header_uk = $this->header_uk;
      $mobiPrice->desc_one_ru = $this->desc_one_ru;
      $mobiPrice->desc_one_uk = $this->desc_one_uk;
      $mobiPrice->desc_two_ru = $this->desc_two_ru;
      $mobiPrice->desc_two_uk = $this->desc_two_uk;
      $mobiPrice->button_ru = $this->button_ru;
      $mobiPrice->button_uk = $this->button_uk;
      return $mobiPrice->save(false);
    }


  }
 ?>
