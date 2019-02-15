<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 29.09.17
 * Time: 17:46
 */

namespace app\modules\admin\models;


use app\models\Assurance;
use app\models\ListAssurance;
use yii\base\Model;

class AssuranceForm extends Model
{

    public $main_title_uk;
    public $main_title_ru;
    public $disc_title_uk;
    public $disc_title_ru;
    public $disc_text_uk;
    public $disc_text_ru;
    public $reg;
    public $listAssurance=[];

    public function rules()
    {
        return [
            [['main_title_uk', 'main_title_ru', 'disc_title_uk', 'disc_title_ru', 'disc_text_uk', 'disc_text_ru'], 'string'],
            [['main_title_uk', 'listAssurance','reg','main_title_ru', 'disc_title_uk', 'disc_title_ru', 'disc_text_uk', 'disc_text_ru'], 'required'],
        ];

    }

    public function saveData(){
        $assurance = Assurance::findOne(['region_key'=>$this->reg]);

        $assurance->main_title_uk = $this->main_title_uk;
        $assurance->main_title_ru = $this->main_title_ru;
        $assurance->disc_title_uk = $this->disc_title_uk;
        $assurance->disc_title_ru = $this->disc_title_ru;
        $assurance->disc_text_uk = $this->disc_text_uk;
        $assurance->disc_text_ru = $this->disc_text_ru;

        $isSaved = false;

        foreach (array_keys($this->listAssurance) as $id){
            $list = ListAssurance::findOne(['id'=>$id]);
            $list->text_ru = $this->listAssurance[$id]['text_ru'];
            $list->text_uk = $this->listAssurance[$id]['text_uk'];
            $isSaved = $list->save();
        }


        return ($assurance->save(false)&&$isSaved);

    }
}