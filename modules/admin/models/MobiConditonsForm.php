<?php
  namespace app\modules\admin\models;
  use yii\base\Model;
  use app\models\MobiConditons;
  use app\models\MobiConditonsList;
  class MobiConditonsForm extends Model{
    public $header_ru;
    public $header_uk;
    public $desc_ru;
    public $desc_uk;
    public $button_ru;
    public $button_uk;
    public $mobiConditionsList = [];
    public $reg;
    public function rules()
    {
        return [
            [['header_ru', 'header_uk', 'desc_ru', 'desc_uk', 'button_ru', 'button_uk'], 'string', 'max' => 255]
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
            'button_ru' => 'Текст кнопки (Ru)',
            'button_uk' => 'Текст кнопки (Uk)',
            'region_key' => 'Region Key',
        ];
    }
    public function saveData(){
      $mobiConditions = MobiConditons::findOne(['region_key'=>$this->reg]);
      $mobiConditions->header_ru = $this->header_ru;
      $mobiConditions->header_uk = $this->header_uk;
      $mobiConditions->desc_ru = $this->desc_ru;
      $mobiConditions->desc_uk = $this->desc_uk;
      $mobiConditions->button_ru = $this->button_ru;
      $mobiConditions->button_uk = $this->button_uk;
      $isSaved = false;
      foreach (array_keys($this->mobiConditionsList) as $id) {
        $mobiConditionsListItem = MobiConditonsList::findOne(['id'=>$id]);
        $mobiConditionsListItem->content_ru = $this->mobiConditionsList[$id]['content_ru'];
        $mobiConditionsListItem->content_uk = $this->mobiConditionsList[$id]['content_uk'];
        $isSaved = $mobiConditionsListItem->save();
      }
      return ($mobiConditions->save(false) && $isSaved);
    }

  }
 ?>
