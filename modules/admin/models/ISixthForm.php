<?php
/**
 * Created by PhpStorm.
 * User: march
 * Date: 04.01.2018
 * Time: 16:45
 */

namespace app\modules\admin\models;


use app\models\ISixth;
use app\models\ISixthList;
use yii\base\Model;

class ISixthForm extends Model
{
    public $itoken;
    public $title_uk;
    public $title_ru;
    public $sixthList;

    public function rules()
    {
        return [
            [['itoken'], 'required'],
            [['itoken'], 'string', 'max' => 25],
            [['title_uk', 'title_ru'], 'string', 'max' => 255],
        ];
    }

    public function saveData(){
        $iSixth = ISixth::findOne(['itoken'=>$this->itoken]);
        $iSixth->title_uk = $this->title_uk;
        $iSixth->title_ru = $this->title_ru;

        $isSaved = false;

        foreach (array_keys($this->sixthList) as $id) {
            $list = ISixthList::findOne(['id'=>$id]);
            $list->header_uk=$this->sixthList[$id]['header_uk'];
            $list->header_ru=$this->sixthList[$id]['header_ru'];
            $list->title_uk=$this->sixthList[$id]['title_uk'];
            $list->title_ru=$this->sixthList[$id]['title_ru'];
            $list->content_uk=$this->sixthList[$id]['content_uk'];
            $list->content_ru=$this->sixthList[$id]['content_ru'];
            $isSaved=$list->save(false);
        }

        return ($iSixth->save(false)&&$isSaved);
    }
}