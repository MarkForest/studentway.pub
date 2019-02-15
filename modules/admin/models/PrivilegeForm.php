<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 29.09.17
 * Time: 4:52
 */

namespace app\modules\admin\models;


use app\models\ListPrivilege;
use app\models\Privilege;
use yii\base\Model;

class PrivilegeForm extends Model
{

    public $main_title_uk;
    public $main_title_ru;
    public $disc_uk;
    public $disc_ru;
    public $title_list_uk;
    public $title_list_ru;
    public $listPrivilege=[];
    public $reg;

    public function rules()
    {
        return [
            [['main_title_uk',
                'main_title_ru',
                'disc_uk',
                'disc_ru',
                'title_list_uk',
                'title_list_ru'], 'string'],
        ];
    }

    public function saveData(){
        $privilege = Privilege::findOne(['region_key'=>$this->reg]);

        $privilege->main_title_uk = $this->main_title_uk;
        $privilege->main_title_ru = $this->main_title_ru;
        $privilege->disc_uk = $this->disc_uk;
        $privilege->disc_ru = $this->disc_ru;
        $privilege->title_list_uk = $this->title_list_uk;
        $privilege->title_list_ru = $this->title_list_ru;

        $isSaved = false;

        foreach (array_keys($this->listPrivilege) as $id){
            $list = ListPrivilege::findOne(['id'=>$id]);
            $list->text_ru = $this->listPrivilege[$id]['text_ru'];
            $list->text_uk = $this->listPrivilege[$id]['text_uk'];
            $isSaved = $list->save();
        }


        return ($privilege->save(false)&&$isSaved);

    }

}