<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/26
 * Time: 20:54
 */

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $img;

    public function rules()
    {
        return [
            [['img'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {

        if(!file_exists('uploads')){
            mkdir('uploads');
        }
        if ($this->validate()) {
            $this->img->saveAs('uploads/' . $this->img->baseName . '.' . $this->img->extension);
            $path = 'uploads/' . $this->img->baseName . '.' . $this->img->extension;

            return 'uploads/' . $this->img->baseName . '.' . $this->img->extension;
        } else {
            return false;
        }
    }
}