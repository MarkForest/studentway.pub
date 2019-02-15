<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 09.12.2018
 * Time: 0:16
 */

namespace app\modules\admin\models\tour;
use app\models\tour\TourContactBlock;
use yii\base\Model;

class TourContactBlockForm extends Model
{
    public $title_big_head;
    public $text_head;
    public $description_first;
    public $description_second;
    public $description_third;
    public $description_four;
    public $description_five;
    public $text_footer;
    public $link_phone_first;
    public $link_phone_second;


    public function rules()
    {
        return [
            [['title_big_head', 'text_head', 'description_first', 'description_second', 'description_third', 'description_four', 'description_five', 'text_footer', 'link_phone_first', 'link_phone_second'], 'string', 'max' => 255],
        ];
    }
    public function saveData($id=1)
    {
        $tour_contact_block = TourContactBlock::findOne(['id' => $id]);
        $tour_contact_block->title_big_head = $this->title_big_head;
        $tour_contact_block->text_head = $this->text_head;
        $tour_contact_block->description_first = $this->description_first;
        $tour_contact_block->description_second = $this->description_second;
        $tour_contact_block->description_third = $this->description_third;
        $tour_contact_block->description_four = $this->description_four;
        $tour_contact_block->description_five = $this->description_five;
        $tour_contact_block->text_footer = $this->text_footer;
        $tour_contact_block->link_phone_first = $this->link_phone_first;
        $tour_contact_block->link_phone_second = $this->link_phone_second;

        return $tour_contact_block->save(false);
    }
}