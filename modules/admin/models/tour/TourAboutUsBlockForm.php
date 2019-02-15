<?php
namespace app\modules\admin\models\tour;
use app\models\tour\TourAboutUsBlock;
use yii\base\Model;

class TourAboutUsBlockForm extends Model
{
    public $title_big_head;
    public $text_head;
    public $title_big_footer;
    public $title_first;
    public $description_first;
    public $title_second;
    public $description_second;
    public $title_third;
    public $description_third;
    public $title_four;
    public $description_four;
    public $title_five;
    public $description_five;
    public $text_footer;
    public $btn_first_text;
    public $btn_second_text;

    public function rules()
    {
        return [
            [['text_head', 'text_footer'], 'string'],
            [['title_big_head', 'title_big_footer', 'title_first', 'description_first', 'title_second', 'description_second', 'title_third', 'description_third', 'title_four', 'description_four', 'title_five', 'description_five', 'btn_first_text', 'btn_second_text'], 'string'],
        ];
    }
    public function saveData($id=1)
    {
        $tour_about_us_block = TourAboutUsBlock::findOne(['id' => $id]);
        $tour_about_us_block->title_big_head = $this->title_big_head;
        $tour_about_us_block->text_head = $this->text_head;
        $tour_about_us_block->title_big_footer = $this->title_big_footer;
        $tour_about_us_block->title_first = $this->title_first;
        $tour_about_us_block->description_first = $this->description_first;
        $tour_about_us_block->title_second = $this->title_second;
        $tour_about_us_block->description_second = $this->description_second;
        $tour_about_us_block->title_third = $this->title_third;
        $tour_about_us_block->description_third = $this->description_third;
        $tour_about_us_block->title_four = $this->title_four;
        $tour_about_us_block->description_four = $this->description_four;
        $tour_about_us_block->title_five = $this->title_five;
        $tour_about_us_block->description_five = $this->description_five;
        $tour_about_us_block->text_footer = $this->text_footer;
        $tour_about_us_block->btn_first_text = $this->btn_first_text;
        $tour_about_us_block->btn_second_text = $this->btn_second_text;

        return $tour_about_us_block->save(false);
    }
}