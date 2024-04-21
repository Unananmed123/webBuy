<?php

/** @var $price */
/** @var $user */


use app\entity\Price;


?>
<div class="containerIndex">
    <div class="formInd">
        <div class="textBasket">
            <div class="buy">
                <?php if ($price): ?>
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
                            <div class="delBas">
                                <a href="/job/delete-basket?id=<?= $price->id ?>">Удалить</a>
                            </div>
                        <?php endforeach; ?>
                </div>
                <?php else:?>
                    <span>
                        Вы не добавили ничего в корзину
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </div>











    </div>
</div>
