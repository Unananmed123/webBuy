<?php
/** @var $price */

use yii\widgets\ActiveForm;

?>
<div class="containerIndex">
    <div class="formInd">
        <?php if (Yii::$app->user->isGuest): ?>
        <?php else: ?>

            <a href="/job/create-price" class="delCart pressed-button">Создать карточку</a>
        <?php endif; ?>
                <?php if ($price):?>
                    <?php foreach ($price as $item): ?>
                        <div class="glases priceGlass">
                            <div class="textPrice">
                                <span class="titlePrice">
                            <?= $item->title ?>
                        </span>
                                <span class="descPrice">
                            <?= $item->description ?>
                        </span>
                                <span class="pricePrice">
                            <?=  '₽' . ' ' . $item->price  ?>
                        </span>
                                <span class="lastPrice ltPrPrice">
                                    <?= '₽' . ' ' . $item->last ?>
                                </span>
                                <span class="basket">
                                    <a href="/job/create-basket?id=<?= $item->id ?>" class="pressed-button prsdBtnBasket">В корзину</a>
                                </span>
                                <?php if (!Yii::$app->user->isGuest): ?>
                                    <a href="/job/delete-price?id=<?= $item->id ?>" class="createCart pressed-button">Удалить карточку <?= $item->title ?></a>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                            <?php else: ?>
                                <div class="empty">Здесь пока пусто</div>
                            <?php endif; ?>
                            </div>


        </div>
    </div>









</div>
