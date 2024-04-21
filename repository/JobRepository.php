<?php

namespace app\repository;

use app\entity\Basket;
use app\entity\Price;

class JobRepository
{
    public static function getPrices() :array
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

    public static function createBasket($price_id, $user_id)
    {
        $basket = new Basket();
        $basket->price_id = $price_id;
        $basket->user_id = $user_id;
        $basket->save();
        return $basket->id;
    }

    public static function getBasketById($id)
    {
        return Basket::find()->where(['id' => $id])->one();
    }

    public static function getBasketUsId($user_id)
    {
        return Basket::find()->where(['user_id' => $user_id])->one();
    }

    public static function getPriceByPriceId($price)
    {
        return Price::find()->where(['id'  => $price->price_id])->all();
    }
}