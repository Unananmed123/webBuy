<?php

namespace app\repository;




use app\entity\Price;

class JobRepository
{
    public static function getPrices()
    {
        return Price::find()->all();
    }

    public static function createPrice($title, $description, $price)
    {
        $price = new Price();
        $price->title = $title;
        $price->description = $description;
        $price->price = $price;
        $price->save();
        return $price->id;
    }
}