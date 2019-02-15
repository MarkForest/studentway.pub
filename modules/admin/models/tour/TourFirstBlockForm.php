<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 09.12.2018
 * Time: 0:16
 */

namespace app\modules\admin\models\tour;

use app\models\tour\TourFirstBlock;
use yii\base\Model;

class TourFirstBlockForm extends Model
{
    public $id;
    public $title;
    public $description;
    public $btn_message_text;


    public function rules()
    {
        return [
            [['title', 'description', 'btn_message_text'], 'string', 'max' => 250],
        ];
    }
    public function saveData($id=1)
    {
        $tour_first_block = TourFirstBlock::findOne(['id' => $id]);
        $tour_first_block->title = $this->title;
        $tour_first_block->description = $this->description;
        $tour_first_block->btn_message_text = $this->btn_message_text;

        return ($tour_first_block->save(false));
    }
}