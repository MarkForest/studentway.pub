<?php

namespace app\modules\admin\models\tour;
use app\models\tour\TourOurServicesBlock;
use yii\base\Model;

class TourOurServicesBlockForm extends Model
{
    public $title_big_head;
    public $title_first;
    public $description_first_first;
    public $description_first_second;
    public $description_first_third;
    public $title_second;
    public $description_second_first;
    public $description_second_second;
    public $description_second_third;
    public $description_second_four;
    public $title_third;
    public $description_third_first;
    public $description_third_second;
    public $title_four;
    public $btn_first_text;
    public $btn_second_text;

    public function rules()
    {
        return [
            [['title_big_head', 'title_first', 'description_first_first', 'description_first_second', 'description_first_third', 'title_second', 'description_second_first', 'description_second_second', 'description_second_third', 'description_second_four', 'title_third', 'description_third_first', 'description_third_second', 'title_four', 'btn_first_text', 'btn_second_text'], 'string', 'max' => 255],
        ];
    }
    public function saveData($id=1)
    {
        $tour_our_services_block = TourOurServicesBlock::findOne(['id' => $id]);
        $tour_our_services_block->title_big_head = $this->title_big_head;
        $tour_our_services_block->title_first = $this->title_first;
        $tour_our_services_block->description_first_first = $this->description_first_first;
        $tour_our_services_block->description_first_second = $this->description_first_second;
        $tour_our_services_block->description_first_third = $this->description_first_third;
        $tour_our_services_block->title_second = $this->title_second;
        $tour_our_services_block->description_second_first = $this->description_second_first;
        $tour_our_services_block->description_second_second = $this->description_second_second;
        $tour_our_services_block->description_second_third = $this->description_second_third;
        $tour_our_services_block->description_second_four = $this->description_second_four;
        $tour_our_services_block->title_third = $this->title_third;
        $tour_our_services_block->description_third_first = $this->description_third_first;
        $tour_our_services_block->description_third_second = $this->description_third_second;
        $tour_our_services_block->title_four = $this->title_four;
        $tour_our_services_block->btn_first_text = $this->btn_first_text;
        $tour_our_services_block->btn_second_text = $this->btn_second_text;

        return $tour_our_services_block->save(false);
    }
}