<?php

namespace app\models;

use yii\base\Model;

class JobModel extends Model
{
    public $file;

    public function rules()
    {
        return [
          ['file', 'required'],
            [['file'], 'file', 'skipOnEmpty' => false],
        ];
    }
}