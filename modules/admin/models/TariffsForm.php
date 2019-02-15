<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 30.09.17
 * Time: 1:25
 */

namespace app\modules\admin\models;


use app\models\ListListTariffs;
use app\models\ListTariffs;
use app\models\Tariffs;
use yii\base\Model;

class TariffsForm extends Model
{
    public $title_uk;
    public $title_ru;
    public $disc_uk;
    public $disc_ru;
    public $reg;
    public $listTariffs=[];
    public $listListTariffs=[];
    public $period_uk;
    public $period_ru;

    public function rules()
    {
        return [
            [['title_uk', 'title_ru', 'disc_uk', 'disc_ru'], 'string'],
            [['title_uk', 'title_ru', 'disc_uk', 'disc_ru'], 'required'],
        ];
    }

    public function saveData(){
        $tariffs = Tariffs::findOne(['region_key'=>$this->reg]);

        $tariffs->title_uk = $this->title_uk;
        $tariffs->title_ru = $this->title_ru;
        $tariffs->disc_uk = $this->disc_uk;
        $tariffs->disc_ru = $this->disc_ru;


        $isSaved = false;

        foreach (array_keys($this->listTariffs) as $id){

            $list = ListTariffs::findOne(['id'=>$id]);
            $list->title_uk = $this->listTariffs[$id]['title_uk'];
            $list->title_ru = $this->listTariffs[$id]['title_ru'];
            $list->cost = $this->listTariffs[$id]['cost'];
            $this->period_uk = $this->listTariffs[$id]['period_uk'];
            $list->period_ru = $this->listTariffs[$id]['period_ru'];

            $isSaved = $list->save(false);
        }

        foreach (array_keys($this->listListTariffs) as $id){

            $list = ListListTariffs::findOne(['id'=>$id]);
            $list->text_uk = $this->listListTariffs[$id]['text_uk'];
            $list->text_ru = $this->listListTariffs[$id]['text_ru'];

            $isSaved = $list->save(false);
        }


         return ($tariffs->save(false)&&$isSaved);
    }

}