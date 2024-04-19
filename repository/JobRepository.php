<?php

namespace app\repository;

use app\entity\Basket;
use app\entity\Price;

class JobRepository
{
    public static function getPrices()
    {
        return Price::find()->all();
    }

    public static function createPrice($title, $description, $prices, $last)
    {
        $price = new Price();
        $price->title = $title;
        $price->description = $description;
        $price->price = $prices;
        $price->last = $last;
        $price->save();
        return $price->id;
    }

    public static function getPriceById($id)
    {
        return Price::find()->where(['id' => $id])->one();
    }

    public static function createBasket($prise_id)
    {
        $basket = new Basket();
        $basket->prise_id = $prise_id;
        $basket->save();
        return $basket->id;
    }

    public static function getBasket($prise_id)
    {
        return Basket::find()->where(['prise_id' => $prise_id])->all();
    }
}