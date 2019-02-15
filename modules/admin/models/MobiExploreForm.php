<?php
  namespace app\modules\admin\models;
  use yii\base\Model;
  use app\models\MobiExplore;
  use app\models\MobiExploreList;
  use app\models\MobiExploreLevels;
  class MobiExploreForm extends Model{
    public $header_ru;
    public $header_uk;
    public $button_ru;
    public $button_uk;
    public $mobiExploreList = [];
    public $mobiExploreLevels = [];
    public $reg;

    public function rules()
    {
        return [
            [['header_ru', 'header_uk', 'button_ru', 'button_uk'], 'string', 'max' => 50],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header_ru' => 'Заголовок (Ru)',
            'header_uk' => 'Заголовок (Uk)',
            'region_key' => 'Region Key',
            'button_ru' => 'Текст кнопки (Ru)',
            'button_uk' => 'Текст кнопки (Uk)',
        ];
    }
    public function saveData(){
      $mobiExplore = MobiExplore::findOne(['region_key'=>$this->reg]);
      $mobiExplore->header_ru = $this->header_ru;
      $mobiExplore->header_uk = $this->header_uk;
      $mobiExplore->button_ru = $this->button_ru;
      $mobiExplore->button_uk = $this->button_uk;
      $isSaved = false;
      foreach (array_keys($this->mobiExploreList) as $id) {
        $mobiExploreItem = MobiExploreList::findOne(['id'=>$id]);
        $mobiExploreItem->content_ru = $this->mobiExploreList[$id]['content_ru'];
        $mobiExploreItem->content_uk = $this->mobiExploreList[$id]['content_uk'];
        $isSaved = $mobiExploreItem->save();
      }
      foreach (array_keys($this->mobiExploreLevels) as $id) {
        $mobiExploreItem = MobiExploreLevels::findOne(['id'=>$id]);
        $mobiExploreItem->period_ru = $this->mobiExploreLevels[$id]['period_ru'];
        $mobiExploreItem->period_uk = $this->mobiExploreLevels[$id]['period_uk'];
        $mobiExploreItem->desc_ru = $this->mobiExploreLevels[$id]['desc_ru'];
        $mobiExploreItem->desc_uk = $this->mobiExploreLevels[$id]['desc_uk'];
        $mobiExploreItem->info_ru = $this->mobiExploreLevels[$id]['info_ru'];
        $mobiExploreItem->info_uk = $this->mobiExploreLevels[$id]['info_uk'];
        $mobiExploreItem->price_period_ru = $this->mobiExploreLevels[$id]['price_period_ru'];
        $mobiExploreItem->price_period_uk = $this->mobiExploreLevels[$id]['price_period_uk'];
        $mobiExploreItem->level = $this->mobiExploreLevels[$id]['level'];
        $mobiExploreItem->price = $this->mobiExploreLevels[$id]['price'];
        $isSaved = $mobiExploreItem->save();
      }
      return ($mobiExplore->save(false)&&$isSaved);
    }
  }
?>
