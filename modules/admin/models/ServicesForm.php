<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 30.09.17
 * Time: 21:02
 */

namespace app\modules\admin\models;


use app\models\ListServices;
use app\models\Services;
use yii\base\Model;

class ServicesForm extends Model
{
    public $header_title_ua;
    public $header_title_ru;
    public $disc_uk;
    public $disc_ru;
    public $reg;
    public $listServices=[];

    public function rules()
    {
        return [
            [['header_title_ua', 'header_title_ru', 'disc_uk', 'disc_ru'], 'string'],
            [['header_title_ua', 'header_title_ru', 'disc_uk', 'disc_ru'], 'required'],
        ];
    }

    public function saveData(){
        $services = Services::findOne(['region_key'=>$this->reg]);

        $services->header_title_ua = $this->header_title_ua;
        $services->header_title_ru = $this->header_title_ru;
        $services->disc_uk = $this->disc_uk;
        $services->disc_ru = $this->disc_ru;

        $isSaved=false;
        foreach (array_keys($this->listServices) as $id){
            $list = ListServices::findOne(['id'=>$id]);
            $list->block_title_uk = $this->listServices[$id]['block_title_uk'];
            $list->block_title_ru = $this->listServices[$id]['block_title_ru'];
            $list->text_uk = $this->listServices[$id]['text_uk'];
            $list->text_ru = $this->listServices[$id]['text_ru'];
            $isSaved = $list->save();
        }

        return ($services->save(false) && $isSaved);

    }
}