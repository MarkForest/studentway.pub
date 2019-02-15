<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "privilege".
 *
 * @property integer $id
 * @property string $main_title_uk
 * @property string $main_title_ru
 * @property string $disc_uk
 * @property string $disk_ru
 * @property string $title_list_uk
 * @property string $title_list_ru
 * @property string $region_key
 *
 * @property ListPrivilege[] $listPrivileges
 */
class Privilege extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'privilege';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['main_title_uk', 'main_title_ru', 'disc_uk', 'disc_ru', 'title_list_uk', 'title_list_ru'], 'string'],
            [['region_key'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'main_title_uk' => 'Main Title Uk',
            'main_title_ru' => 'Main Title Ru',
            'disc_uk' => 'Disc Uk',
            'disc_ru' => 'Disk Ru',
            'title_list_uk' => 'Title List Uk',
            'title_list_ru' => 'Title List Ru',
            'region_key' => 'Region Key',
            'image'=>'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListPrivileges()
    {
        return $this->hasMany(ListPrivilege::className(), ['privilege_id' => 'id']);
    }
}
