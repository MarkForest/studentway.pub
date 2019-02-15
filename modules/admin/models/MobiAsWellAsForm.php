<?php
  namespace app\modules\admin\models;
  use yii\base\Model;
  use app\models\MobiAsWellAs;
  class MobiAsWellAsForm extends Model{
    public $header_ru;
    public $header_uk;
    public $desc_ru;
    public $desc_uk;
    public $button_one_ru;
    public $button_one_uk;
    public $button_two_ru;
    public $button_two_uk;
    public $content_ru;
    public $content_uk;
    public $reg;
    public function rules()
    {
        return [
            [['header_ru', 'header_uk'], 'string', 'max' => 50],
            [['desc_ru', 'desc_uk'], 'string', 'max' => 255],
            [['button_one_ru', 'button_one_uk', 'button_two_ru', 'button_two_uk'], 'string', 'max' => 100],
            [['content_ru', 'content_uk'], 'string', 'max' => 1000],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header_ru' => 'Заголовок (Ru)',
            'header_uk' => 'Заголовок (Uk)',
            'desc_ru' => 'Описание (Ru)',
            'desc_uk' => 'Описание (Uk)',
            'button_one_ru' => 'Описание (Ru)',
            'button_one_uk' => 'Описание (Uk)',
            'button_two_ru' => 'Текст кнопки (Ru)',
            'button_two_uk' => 'Текст кнопки (Uk)',
            'region_key' => 'Region Key',
            'content_ru' => 'Контент (Ru)',
            'content_uk' => 'Контент (Uk)',
        ];
    }
    public function saveData(){
      $mobiAsWellAs = MobiAsWellAs::findOne(['region_key'=>$this->reg]);
      $mobiAsWellAs->header_ru = $this->header_ru;
      $mobiAsWellAs->header_uk = $this->header_uk;
      $mobiAsWellAs->desc_ru = $this->desc_ru;
      $mobiAsWellAs->desc_uk = $this->desc_uk;
      $mobiAsWellAs->button_one_ru = $this->button_one_ru;
      $mobiAsWellAs->button_one_uk = $this->button_one_uk;
      $mobiAsWellAs->button_two_ru = $this->button_two_ru;
      $mobiAsWellAs->button_two_uk = $this->button_two_uk;
      $mobiAsWellAs->content_ru = $this->content_ru;
      $mobiAsWellAs->content_uk = $this->content_uk;
      return $mobiAsWellAs->save(false);
    }
  }
 ?>
