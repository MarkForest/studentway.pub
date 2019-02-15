<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 09.12.2018
 * Time: 0:16
 */

namespace app\modules\admin\models\tour;

use app\models\tour\TourPricesBlock;
use yii\base\Model;

class TourPricesBlockForm extends Model
{
    public $title_big_head;
    public $title_first;
    public $price_first;
    public $btn_rate_first;
    public $little_text_first;
    public $title_second;
    public $price_second;
    public $btn_rate_second;
    public $little_text_second;
    public $text_footer;
    public $btn_first_text;
    public $btn_second_text;

    public function rules()
    {
        return [
            [['title_big_head', 'title_first', 'price_first', 'btn_rate_first', 'little_text_first', 'title_second', 'price_second', 'btn_rate_second', 'little_text_second','text_footer', 'btn_first_text', 'btn_second_text'], 'string', 'max' => 255],
        ];
    }
    public function saveData($id=1)
    {
        $tour_prices_block = TourPricesBlock::findOne(['id' => $id]);
        $tour_prices_block->title_big_head = $this->title_big_head;
        $tour_prices_block->title_first = $this->title_first;
        $tour_prices_block->price_first = $this->price_first;
        $tour_prices_block->btn_rate_first = $this->btn_rate_first;
        $tour_prices_block->little_text_first = $this->little_text_first;
        $tour_prices_block->title_second = $this->title_second;
        $tour_prices_block->price_second = $this->price_second;
        $tour_prices_block->btn_rate_second = $this->btn_rate_second;
        $tour_prices_block->little_text_second = $this->little_text_second;
        $tour_prices_block->text_footer = $this->text_footer;

        $tour_prices_block->btn_first_text = $this->btn_first_text;
        $tour_prices_block->btn_second_text = $this->btn_second_text;

        return $tour_prices_block->save(false);
    }
}