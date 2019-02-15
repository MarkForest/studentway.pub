<?php


namespace app\modules\admin\models\tour;

use app\models\tour\TourAboutUniversityBlock;
use app\models\tour\TourQuestionsBlock;
use yii\base\Model;

class TourQuestionsBlockForm extends Model
{
    public $title_big_head;
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
    public $title_six;
    public $description_six;
    public $text_footer;
    public $btn_first_text;
    public $btn_second_text;

    public function rules()
    {
        return [
            [['description_first', 'description_second', 'description_third', 'description_four', 'description_five', 'description_six', 'text_footer'], 'string'],
            [['title_big_head', 'title_first', 'title_second', 'title_third', 'title_four', 'title_five', 'title_six', 'btn_first_text', 'btn_second_text'], 'string', 'max' => 255],
        ];
    }

    public function saveData($id=1)
    {
        $tour_questions_block = TourQuestionsBlock::findOne(['id' => $id]);
        $tour_questions_block->title_big_head = $this->title_big_head;
        $tour_questions_block->title_first = $this->title_first;
        $tour_questions_block->description_first = $this->description_first;
        $tour_questions_block->title_second = $this->title_second;
        $tour_questions_block->description_second = $this->description_second;
        $tour_questions_block->title_third = $this->title_third;
        $tour_questions_block->description_third = $this->description_third;
        $tour_questions_block->title_four = $this->title_four;
        $tour_questions_block->description_four = $this->description_four;
        $tour_questions_block->title_five = $this->title_five;
        $tour_questions_block->description_five = $this->description_five;
        $tour_questions_block->title_six = $this->title_six;
        $tour_questions_block->description_six = $this->description_six;
        $tour_questions_block->text_footer = $this->text_footer;

        $tour_questions_block->btn_first_text = $this->btn_first_text;
        $tour_questions_block->btn_second_text = $this->btn_second_text;

        return $tour_questions_block->save(false);
    }
}