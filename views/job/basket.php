<?php

/** @var $cart */
/** @var $price */

//var_dump($price);
//foreach ($cart as $item) {
//    var_dump($item);
//}


use app\entity\Price;



//var_dump($cart);
?>
<div class="containerIndex">
    <div class="Basket">
        <div class="textBasket">
            <div class="buy">
                <?php if ($cart): ?>
                    <?php foreach ($cart as $item): ?>
                        <div class="bgCart">
                        <div class="titlePrice">
                            <?= $item->title ?>
                        </div>
                        <div class="descPrice">
                            <?= $item->description ?>
                        </div>

                            <div class="prices">
                                <div class="pricePrice">
                                    <?= $item->price ?>
                                </div>
                                <div class="ltPrPrice">
                                    <?= $item->last; ?>
                                </div>
                            </div>

                        <div class="delBas">
                            <a href="/job/delete-basket?id=<?= $item->id ?>" class="deleteBasket">Убрать из корзины</a>
                        </div>
                            <div class="buyBas">
                                <a href="/job/buy/buy-basket?id=<?= $price->id?>" class="buyBasket double-border-button">Купить</a>
                            </div>
                    </div>
                    <?php endforeach; ?>

                    </div>
                <?php else: ?>
                    <span class="NULL">
                        Вы ничего не добавили в корзину
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </div>


</div>
</div>
