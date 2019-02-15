<?php


namespace app\modules\admin\models\tour;

use app\models\tour\TourAboutUniversityBlock;
use yii\base\Model;

class TourAboutUniversityBlockForm extends Model
{
    public $title_big_head;
    public $text_head;
    public $title_first;
    public $description_first;
    public $title_second;
    public $description_second;
    public $title_third;
    public $description_third;
    public $title_big_footer;
    public $curusel_title_first;
    public $curusel_title_second;
    public $curusel_title_third;
    public $curusel_title_four;
    public $curusel_title_five;
    public $text_footer;
    public $btn_message_text;
    public $btn_first_text;
    public $btn_second_text;

    public function rules()
    {
        return [
            [['title_big_head','text_head', 'title_first', 'description_first', 'title_second', 'description_second', 'title_third', 'description_third', 'title_big_footer', 'text_footer', 'btn_message_text', 'btn_first_text', 'btn_second_text'], 'string', 'max' => 255],
        ];
    }
    public function saveData($id=1)
    {
        $tour_about_university_block = TourAboutUniversityBlock::findOne(['id' => $id]);
        $tour_about_university_block->title_big_head = $this->title_big_head;
        $tour_about_university_block->text_head = $this->text_head;
        $tour_about_university_block->title_first = $this->title_first;
        $tour_about_university_block->description_first = $this->description_first;
        $tour_about_university_block->title_second = $this->title_second;
        $tour_about_university_block->description_second = $this->description_second;
        $tour_about_university_block->title_third = $this->title_third;
        $tour_about_university_block->description_third = $this->description_third;
        $tour_about_university_block->title_big_footer = $this->title_big_footer;
        $tour_about_university_block->curusel_title_first = $this->curusel_title_first;
        $tour_about_university_block->curusel_title_second = $this->curusel_title_second;
        $tour_about_university_block->curusel_title_third = $this->curusel_title_third;
        $tour_about_university_block->curusel_title_four = $this->curusel_title_four;
        $tour_about_university_block->curusel_title_five = $this->curusel_title_five;
        $tour_about_university_block->text_footer = $this->text_footer;
        $tour_about_university_block->btn_message_text = $this->btn_message_text;
        $tour_about_university_block->btn_first_text = $this->btn_first_text;
        $tour_about_university_block->btn_second_text = $this->btn_second_text;

        return $tour_about_university_block->save(false);
    }
}