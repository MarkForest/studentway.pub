<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload($path)
    {
        $fileName = strtolower(md5(uniqid($this->imageFile->baseName))) . '.' . $this->imageFile->extension;
        if ($this->validate()) {
            $this->imageFile->saveAs($path . $fileName);
            return $fileName;
        } else {
            return false;
        }
    }
}