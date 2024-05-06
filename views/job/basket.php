<?php

/** @var $cart */
/** @var $price */

//var_dump($price);
//foreach ($cart as $item) {
//    var_dump($item);
//}

var_dump($price);
use app\entity\Price;



//var_dump($cart);
?>
<div class="containerIndex">
    <div class="">
        <div class="textBasket">
            <div class="buy">
                <?php if ($cart): ?>
                    <?php foreach ($cart as $item): ?>
                        <div class="glases">
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
                            <?= $item->last; ?>
                        </div>
                        <div class="delBas">
                            <a href="/job/delete-basket?id=<?=  ?>">Удалить</a>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    </div>
                <?php else: ?>
                    <span>
                        Вы не добавили ничего в корзину
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </div>


</div>
</div>
