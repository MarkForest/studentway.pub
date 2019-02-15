<?php
  namespace app\modules\admin\models;
  use yii\base\Model;
  use app\models\MobiAdditionally;
  use app\models\MobiAdditionallyList;
  class MobiAdditionallyForm extends Model{
    public $header_ru;
    public $header_uk;
    public $desc_ru;
    public $desc_uk;
    public $reg;
    public $mobiAdditionallyLists = [];
    public function rules(){
        return [
            [['header_ru', 'header_uk', 'desc_ru', 'desc_uk'], 'string', 'max' => 50]
        ];
    }
    public function attributeLabels(){
        return [
            'id' => 'ID',
            'header_ru' => 'Заголовок (Ru)',
            'header_uk' => 'Заголовок (Uk)',
            'desc_ru' => 'Описание (Ru)',
            'desc_uk' => 'Описание (Uk)',
            'region_key' => 'Region Key',
        ];
    }
    public function saveData(){
      $mobiAdditionally = MobiAdditionally::findOne(['region_key'=>$this->reg]);
      $mobiAdditionally->header_ru = $this->header_ru;
      $mobiAdditionally->header_uk = $this->header_uk;
      $mobiAdditionally->desc_ru = $this->desc_ru;
      $mobiAdditionally->desc_uk = $this->desc_uk;
      $isSaved = false;
      foreach (array_keys($this->mobiAdditionallyLists) as $id) {
        $mobiAdditonallyListItem = MobiAdditionallyList::findOne(['id'=>$id]);
        $mobiAdditonallyListItem->content_ru = $this->mobiAdditionallyLists[$id]['content_ru'];
        $mobiAdditonallyListItem->content_uk = $this->mobiAdditionallyLists[$id]['content_uk'];
        $isSaved = $mobiAdditonallyListItem->save();
      }
      return ($mobiAdditionally->save(false) && $isSaved);
    }
  }
 ?>
