<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property integer $id
 * @property string $header_title_uk
 * @property string $header_title_ru
 * @property string $disc_uk
 * @property string $disc_ru
 * @property string $region_key
 *
 * @property ListTeam[] $listTeams
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header_title_uk', 'header_title_ru', 'disc_uk', 'disc_ru'], 'string', 'max' => 255],
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
            'header_title_uk' => 'Header Title Uk',
            'header_title_ru' => 'Header Title Ru',
            'disc_uk' => 'Disc Uk',
            'disc_ru' => 'Disc Ru',
            'region_key' => 'Region Key',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListTeams()
    {
        return $this->hasMany(ListTeam::className(), ['team_id' => 'id']);
    }
}
