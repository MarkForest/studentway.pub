<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 09.12.2018
 * Time: 0:16
 */

namespace app\modules\admin\models\tour;


use app\models\tour\TourHead;
use app\models\tour\TourHeadMenus;
use yii\base\Model;

class TourHeadForm extends Model
{
    public $key_id; //это будет ключь по которому мы будим понимать в будущем с каким мы списком работаем
    public $logo_text;
    public $phone_number;

    public $tour_menus = []; // нет ссылки мы чуть ниже ебанем в saveData

    public function rules()
    {
        return [
            [['logo_text', 'phone_number'], 'string', 'max' => 250],
        ];
    }
    public function saveData()
    {
        $tour_head = TourHead::findOne(['id' => $this->key_id]);

        $tour_head->logo_text = $this->logo_text;
        $tour_head->phone_number = $this->phone_number;
        $isSaved = false;

        foreach (array_keys($this->tour_menus) as $id) {
            $menus = TourHeadMenus::findOne(['id' => $id]);
            $menus->menu_text = $this->tour_menus[$id]['menu_text'];
            $isSaved = $menus->save(true);
        }

        return ($tour_head->save(false) && $isSaved);
    }
}