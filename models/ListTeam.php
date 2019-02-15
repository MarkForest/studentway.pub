<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_team".
 *
 * @property integer $id
 * @property string $image
 * @property string $full_name_uk
 * @property string $full_name_ru
 * @property string $post_uk
 * @property string $post_ru
 * @property string $text_uk
 * @property string $text_ru
 * @property integer $team_id
 *
 * @property Team $team
 */
class ListTeam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_uk', 'post_ru', 'text_uk', 'text_ru'], 'string'],
            [['team_id'], 'required'],
            [['team_id'], 'integer'],
            [['image', 'full_name_uk', 'full_name_ru'], 'string', 'max' => 256],
            [['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['team_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'full_name_uk' => 'Full Name Uk',
            'full_name_ru' => 'Full Name Ru',
            'post_uk' => 'Post Uk',
            'post_ru' => 'Post Ru',
            'text_uk' => 'Text Uk',
            'text_ru' => 'Text Ru',
            'team_id' => 'Team ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam()
    {
        return $this->hasOne(Team::className(), ['id' => 'team_id']);
    }
}
