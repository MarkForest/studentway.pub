<?php
/**
 * Created by PhpStorm.
 * User: march
 * Date: 01.01.2018
 * Time: 12:50
 */

namespace app\modules\admin\models;


use app\models\IHome;
use app\models\IHomeList;
use app\models\IMenu;
use yii\base\Model;

class IHomeForm extends Model
{
    //Menu
    public $home_uk;
    public $home_ru;
    public $wedo_uk;
    public $wedo_ru;
    public $level_uk;
    public $level_ru;
    public $portfolio_uk;
    public $portfolio_ru;
    public $sent_uk;
    public $sent_ru;
    public $price_uk;
    public $price_ru;
    public $contact_uk;
    public $contact_ru;

    //Home
    public $logo_title_uk;
    public $top_description_uk;
    public $top_description_ru;
    public $main_description_uk;
    public $main_description_ru;
    public $header_uk;
    public $header_ru;
    public $city_uk;
    public $city_ru;
    public $logo_title_ru;
    public $homeList = [];

    public $itoken;

    public function rules(){
        return[
            [['top_description_uk', 'top_description_ru'], 'string'],
            [['logo_title_uk', 'main_description_uk', 'main_description_ru', 'header_uk', 'header_ru', 'city_uk', 'city_ru', 'logo_title_ru'], 'string', 'max' => 255],
            [['home_uk', 'home_ru', 'wedo_uk', 'wedo_ru', 'level_uk', 'level_ru', 'portfolio_uk', 'portfolio_ru', 'sent_uk', 'sent_ru', 'price_uk', 'price_ru', 'contact_uk', 'contact_ru'], 'string', 'max' => 25],
        ];
    }


    public function saveData(){
        $home = IHome::findOne(['itoken'=>$this->itoken]);
        $menu = IMenu::findOne(['itoken'=>$this->itoken]);

        $home->logo_title_uk = $this->logo_title_uk;
        $home->logo_title_ru = $this->logo_title_ru;
        $home->top_description_uk=$this->top_description_uk;
        $home->top_description_ru=$this->top_description_ru;
        $home->main_description_uk=$this->main_description_uk;
        $home->main_description_ru=$this->main_description_ru;
        $home->header_uk=$this->header_uk;
        $home->header_ru=$this->header_ru;
        $home->city_uk=$this->city_uk;
        $home->city_ru=$this->city_ru;

        $menu->home_uk=$this->home_uk;
        $menu->home_ru=$this->home_ru;
        $menu->wedo_uk=$this->wedo_uk;
        $menu->wedo_ru=$this->wedo_ru;
        $menu->level_uk=$this->level_uk;
        $menu->level_ru=$this->level_ru;
        $menu->portfolio_uk=$this->portfolio_uk;
        $menu->portfolio_ru=$this->portfolio_ru;
        $menu->sent_uk=$this->sent_uk;
        $menu->sent_ru=$this->sent_ru;
        $menu->price_uk=$this->price_uk;
        $menu->price_ru=$this->price_ru;
        $menu->contact_uk=$this->contact_uk;
        $menu->contact_ru=$this->contact_ru;

        $isSaved = false;

        foreach (array_keys($this->homeList) as $id) {
            $list = IHomeList::findOne(['id'=>$id]);
            $list->title_uk = $this->homeList[$id]['title_uk'];
            $list->title_ru = $this->homeList[$id]['title_ru'];
            $list->content_uk = $this->homeList[$id]['content_uk'];
            $list->content_ru = $this->homeList[$id]['content_ru'];
            $list->consult_uk = $this->homeList[$id]['consult_uk'];
            $list->consult_ru = $this->homeList[$id]['consult_ru'];
            $isSaved=$list->save(false);
        }

        return($home->save(false)&&$menu->save(false)&&$isSaved);

    }
}