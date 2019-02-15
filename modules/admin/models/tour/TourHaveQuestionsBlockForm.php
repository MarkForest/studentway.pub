<?php


namespace app\modules\admin\models\tour;

use app\models\tour\TourHaveQuestionsBlock;
use yii\base\Model;

class TourHaveQuestionsBlockForm extends Model
{
    public $title_big_head;
    public $btn_message_text;

    public function rules()
    {
        return [
            [['title_big_head', 'btn_message_text'], 'string'],
        ];
    }

    public function saveData($id=1)
    {
        $tour_have_questions_block = TourHaveQuestionsBlock::findOne(['id' => $id]);
        $tour_have_questions_block->title_big_head = $this->title_big_head;
        $tour_have_questions_block->btn_message_text = $this->btn_message_text;

        return $tour_have_questions_block->save(false);
    }
}