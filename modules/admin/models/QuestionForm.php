<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 01.10.17
 * Time: 14:40
 */

namespace app\modules\admin\models;


use app\models\ListListQuestion;
use app\models\ListQuestion;
use app\models\Question;
use yii\base\Model;

class QuestionForm extends Model
{
    public $header_title_uk;
    public $header_title_ru;
    public $disc_uk;
    public $disc_ru;
    public $reg;
    public $listQuestion=[];
    public $listListQuestion=[];

    public function rules()
    {
        return [
            [['disc_uk', 'disc_ru'], 'string'],
            [['header_title_uk', 'header_title_ru'], 'string', 'max' => 255],
            [['header_title_uk', 'header_title_ru','disc_uk','disc_ru'], 'required'],
        ];
    }

    public function saveData(){
        $question = Question::findOne(['region_key'=>$this->reg]);

        $question->header_title_uk = $this->header_title_uk;
        $question->header_title_ru = $this->header_title_ru;
        $question->disc_uk = $this->disc_uk;
        $question->disc_ru = $this->disc_ru;

        $isSaved = false;

        foreach (array_keys($this->listQuestion) as $id){

            $list = ListQuestion::findOne(['id'=>$id]);
            $list->title_uk = $this->listQuestion[$id]['title_uk'];
            $list->title_ru = $this->listQuestion[$id]['title_ru'];
            $list->button_text_uk = $this->listQuestion[$id]['button_text_uk'];
            $list->button_text_ru = $this->listQuestion[$id]['button_text_ru'];


            $isSaved = $list->save(false);
        }

        foreach (array_keys($this->listListQuestion) as $id){

            $list = ListListQuestion::findOne(['id'=>$id]);
            $list->text_uk = $this->listListQuestion[$id]['text_uk'];
            $list->text_ru = $this->listListQuestion[$id]['text_ru'];

            $isSaved = $list->save(false);
        }


        return ($question->save(false)&&$isSaved);
    }



}