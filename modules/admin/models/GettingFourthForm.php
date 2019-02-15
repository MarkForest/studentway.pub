<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 30.09.17
 * Time: 22:34
 */

namespace app\modules\admin\models;


use app\models\GettingFourth;
use yii\base\Model;

class GettingFourthForm extends Model
{
  public $title_uk;
  public $title_ru;
  public $disc_uk;
  public $disc_ru;
  public $button_text_uk;
  public $button_text_ru;
  public $reg;

    public function rules()
    {
        return [
            [['title_uk', 'title_ru', 'disc_uk', 'disc_ru'], 'string'],
            [['title_uk', 'title_ru', 'disc_uk', 'disc_ru','button_text_ru','button_text_uk',], 'required'],
            [['button_text_uk', 'button_text_ru'], 'string', 'max' => 255],
        ];
    }

    public function saveData(){
        $gettingFourth = GettingFourth::findOne(['region_key'=>$this->reg]);

        $gettingFourth->title_uk = $this->title_uk;
        $gettingFourth->title_ru = $this->title_ru;
        $gettingFourth->disc_uk = $this->disc_uk;
        $gettingFourth->disc_ru = $this->disc_ru;
        $gettingFourth->button_text_uk = $this->button_text_uk;
        $gettingFourth->button_text_ru = $this->button_text_ru;

        return $gettingFourth->save(false);
    }
}