<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 01.10.17
 * Time: 0:29
 */

namespace app\modules\admin\models;


use app\models\ListTeam;
use app\models\Team;
use yii\base\Model;

class TeamForm extends Model
{
      public $header_title_uk;
      public $header_title_ru;
      public $disc_uk;
      public $disc_ru;
      public $reg;
      public $listTeam=[];

    public function rules()
    {
        return [
            [['header_title_uk', 'header_title_ru', 'disc_uk', 'disc_ru'], 'string', 'max' => 255],
            [['header_title_uk', 'header_title_ru', 'disc_uk', 'disc_ru'], 'required'],
        ];
    }

    public function saveData(){
        $team = Team::findOne(['region_key'=>$this->reg]);

        $team->header_title_uk = $this->header_title_uk;
        $team->header_title_ru = $this->header_title_ru;
        $team->disc_uk = $this->disc_uk;
        $team->disc_ru = $this->disc_ru;

        $isSaved = false;

        foreach(array_keys($this->listTeam) as $id){
            $list = ListTeam::findOne(['id'=>$id]);
            $list->full_name_uk = $this->listTeam[$id]['full_name_uk'];
            $list->full_name_ru = $this->listTeam[$id]['full_name_ru'];
            $list->post_uk = $this->listTeam[$id]['post_uk'];
            $list->post_ru = $this->listTeam[$id]['post_ru'];
            $list->text_uk = $this->listTeam[$id]['text_uk'];
            $list->text_ru = $this->listTeam[$id]['text_ru'];
            $isSaved = $list->save(false);
        }

        return ($team->save(false) && $isSaved);
    }
}