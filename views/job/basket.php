<?php

/** @var $model */
/** @var $cart */
?>
<div class="containerIndex">
        <div class="textBasket">
            <div class="basketTitle">
                <?=  'Название: '. $cart->title ?>
            </div>
            <div class="basketDesc">
                <?= 'Описание: '.$cart->description ?>
            </div>
            <div class="basketPrice">
                <?= 'Цена: '.$cart->price ?>
            </div>
            <div class="basketPriceLast">
                <?= 'Старая цена: '.$cart->last ?>
            </div>
        </div>










    </div>
</div>
