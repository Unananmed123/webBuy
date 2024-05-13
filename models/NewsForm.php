<?php

namespace app\models;

use yii\base\Model;

class NewsForm extends Model
{
    public $user_id;
    public $message;

    public function rules()
    {
        return [
            ['message', 'required']

        ];
    }

    public function attributeLabels()
    {
        return [
            'message' => 'Сообщение',
        ];
    }
}