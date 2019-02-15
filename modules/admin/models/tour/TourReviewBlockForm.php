<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 09.12.2018
 * Time: 0:16
 */

namespace app\modules\admin\models\tour;

use app\models\tour\TourInfoBlock;
use app\models\tour\TourReviewBlock;
use yii\base\Model;

class TourReviewBlockForm extends Model
{
    public $text_review_first;
    public $name_first;
    public $text_review_second;
    public $name_second;
    public $text_review_third;
    public $name_third;
    public $text_review_four;
    public $name_four;
    public $text_review_five;
    public $name_five;
    public $text_footer;
    public $btn_first_text;
    public $btn_second_text;

    public function rules()
    {
        return [
            [['text_review_first', 'name_first', 'text_review_second', 'name_second',
                'text_review_third', 'name_third', 'text_review_four',
                'name_four', 'text_review_five', 'name_five', 'text_footer',
                'btn_first_text', 'btn_second_text'], 'string'],
        ];
    }
    public function saveData($id=1)
    {
        $tour_review_block = TourReviewBlock::findOne(['id' => $id]);
        $tour_review_block->text_review_first = $this->text_review_first;
        $tour_review_block->name_first = $this->name_first;
        $tour_review_block->text_review_second = $this->text_review_second;
        $tour_review_block->name_second = $this->name_second;
        $tour_review_block->text_review_third = $this->text_review_third;
        $tour_review_block->name_third = $this->name_third;
        $tour_review_block->text_review_four = $this->text_review_four;
        $tour_review_block->name_four = $this->name_four;
        $tour_review_block->text_review_five = $this->text_review_five;
        $tour_review_block->name_five = $this->name_five;

        $tour_review_block->text_footer = $this->text_footer;

        $tour_review_block->btn_first_text = $this->btn_first_text;
        $tour_review_block->btn_second_text = $this->btn_second_text;

        return $tour_review_block->save(false);
    }
}