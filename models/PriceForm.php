<?php

namespace app\models;

use yii\base\Model;

class PriceForm extends Model
{
    public $title;
    public $description;
    public $prices;
    public $last;

    public function rules()
    {
        return [
            [['title', 'description', 'prices', 'last'], 'required'],
            [['prices', 'last'], 'number']
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Название',
            'description' => 'Описание',
            'price' => 'Цена',
            'lastprice' => 'Старая цена',
        ];
    }
}