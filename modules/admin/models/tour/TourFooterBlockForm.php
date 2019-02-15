<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 09.12.2018
 * Time: 0:16
 */

namespace app\modules\admin\models\tour;
use app\models\tour\TourFooterBlock;
use yii\base\Model;

class TourFooterBlockForm extends Model
{
    public $title_first;
    public $description_first;
    public $title_second;
    public $name_link_first;
    public $href_link_first;
    public $name_link_second;
    public $href_link_second;
    public $name_link_third;
    public $href_link_third;
    public $name_link_four;
    public $href_link_four;
    public $title_third;
    public $description_third;
    public $link_footer;


    public function rules()
    {
        return [
            [['description_first', 'description_third'], 'string'],
            [['title_first', 'title_second', 'name_link_first', 'href_link_first', 'name_link_second', 'href_link_second', 'name_link_third', 'href_link_third', 'name_link_four', 'href_link_four', 'title_third', 'link_footer'], 'string', 'max' => 255],
        ];
    }
    public function saveData($id=1)
    {
        $tour_footer_block = TourFooterBlock::findOne(['id' => $id]);
        $tour_footer_block->title_first = $this->title_first;
        $tour_footer_block->description_first = $this->description_first;
        $tour_footer_block->title_second = $this->title_second;
        $tour_footer_block->name_link_first = $this->name_link_first;
        $tour_footer_block->href_link_first = $this->href_link_first;
        $tour_footer_block->name_link_second = $this->name_link_second;
        $tour_footer_block->href_link_second = $this->href_link_second;
        $tour_footer_block->name_link_third = $this->name_link_third;
        $tour_footer_block->href_link_third = $this->href_link_third;
        $tour_footer_block->name_link_four = $this->name_link_four;
        $tour_footer_block->href_link_four = $this->href_link_four;
        $tour_footer_block->title_third = $this->title_third;
        $tour_footer_block->description_third = $this->description_third;
        $tour_footer_block->link_footer = $this->link_footer;

        return $tour_footer_block->save(false);
    }
}