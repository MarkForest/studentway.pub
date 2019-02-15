<?php
/**
 * Created by PhpStorm.
 * User: march
 * Date: 04.01.2018
 * Time: 20:07
 */

namespace app\modules\admin\models;


use app\models\IEighth;
use yii\base\Model;

class IEighthForm extends Model
{
    public $itoken;
    public $title_uk;
    public $title_ru;
    public $info_title_uk;
    public $info_title_ru;
    public $info_content_uk;
    public $info_content_ru;
    public $email_title_uk;
    public $email_title_ru;
    public $phone_title_uk;
    public $phone_title_ru;
    public $email_content;
    public $phone_content;
    public $copyright_uk;
    public $copyright_ru;

    public function rules()
    {
        return [
            [['itoken'], 'required'],
            [['info_content_uk', 'info_content_ru'], 'string'],
            [['itoken'], 'string', 'max' => 25],
            [['title_uk', 'title_ru', 'email_title_uk', 'email_title_ru', 'email_content', 'phone_content', 'copyright_uk', 'copyright_ru',], 'string', 'max' => 255],
            [['info_title_uk', 'info_title_ru', 'phone_title_uk', 'phone_title_ru'], 'string', 'max' => 50],
        ];
    }

    public function saveData(){
        $iEighth = IEighth::findOne(['itoken'=>$this->itoken]);
        $iEighth->title_uk = $this->title_uk;
        $iEighth->title_ru = $this->title_ru;
        $iEighth->info_title_uk = $this->info_title_uk;
        $iEighth->info_title_ru = $this->info_title_ru;
        $iEighth->info_content_uk = $this->info_content_uk;
        $iEighth->info_content_ru = $this->info_content_ru;
        $iEighth->email_title_uk = $this->email_title_uk;
        $iEighth->email_title_ru = $this->email_title_ru;
        $iEighth->phone_title_uk = $this->phone_title_uk;
        $iEighth->phone_title_ru = $this->phone_title_ru;
        $iEighth->email_content = $this->email_content;
        $iEighth->phone_content = $this->phone_content;
        $iEighth->copyright_uk = $this->copyright_uk;
        $iEighth->copyright_ru = $this->copyright_ru;

        return $iEighth->save(false);
    }
}