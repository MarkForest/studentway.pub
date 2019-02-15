<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MobiExploreList".
 *
 * @property integer $id
 * @property string $content_ru
 * @property string $content_uk
 * @property integer $MobiExplore_id
 *
 * @property MobiExplore $mobiExplore
 */
class MobiExploreList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mobiexplorelist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MobiExplore_id'], 'required'],
            [['MobiExplore_id'], 'integer'],
            [['content_ru', 'content_uk'], 'string', 'max' => 255],
            [['MobiExplore_id'], 'exist', 'skipOnError' => true, 'targetClass' => MobiExplore::className(), 'targetAttribute' => ['MobiExplore_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content_ru' => 'Content Ru',
            'content_uk' => 'Content Uk',
            'MobiExplore_id' => 'Mobi Explore ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMobiExplore()
    {
        return $this->hasOne(MobiExplore::className(), ['id' => 'MobiExplore_id']);
    }
}
