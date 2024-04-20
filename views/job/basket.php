<?php

/** @var $price */
/** @var $user */
/** @var $basket */

use app\entity\Price;
$cart = Price::find()->where(['id'  => $price->price_id])->all();
?>
<div class="containerIndex">
        <div class="textBasket">
            <div class="buy">
                    <div class="glases">
                    <?php foreach ($cart as $item): ?>
                        <div class="titlePrice">
                            <?= $item->title ?>
                        </div>
                        <div class="descPrice">
                            <?= $item->description ?>
                        </div>
                        <div class="pricePrice">
                            <?= $item->price ?>
                        </div>
                        <div class="ltPrPrice">
                            <?= $item->last ?>
                        </div>
                    <?php endforeach; ?>
            </div>
            </div>
        </div>










    </div>
</div>
