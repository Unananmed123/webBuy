<?php

namespace app\models;

use yii\base\Model;

class PriceForm extends Model
{
    public $title;
    public $description;
    public $price;

    public function rules()
    {
        return [
            [['title', 'description', 'price'], 'required'],
            ['price', 'number']
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Название',
            'description' => 'Описание',
            'Price' => 'Цена',
        ];
    }
}