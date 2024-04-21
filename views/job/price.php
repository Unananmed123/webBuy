<?php
/** @var $price */

use yii\widgets\ActiveForm;

?>
<div class="containerInd">
    <?php if (Yii::$app->user->isGuest): ?>
    <?php else: ?>
    <div class="adminBtn">
        <a href="/job/create-price" class="crCartBtn pressed-button">Создать карточку</a>

        <?php foreach ($price as $item): ?>

            <a href="/job/delete-price?id=<?= $item->id ?>" class=" pressed-button crCartBtn">Удалить карточку <?= $item->title ?></a>

        <?php endforeach; ?>

        <?php endif; ?>
    </div>

    <div class="formInd">
            <?php if ($price):?>

                <?php foreach ($price as $item): ?>

                <div class="glases priceGlases">

                <div class="textPrice">
                    <div class="titlePrice"><?= $item->title ?></div>
                    <div class="descPrice"><?= $item->description ?></div>
                    <div class="pricePrice"><?=  '₽' . ' ' . $item->price  ?></div>
                    <div class="lastPricePrice lastPrice"><?= '₽' . ' ' . $item->last ?></div>
                    <?php if (!Yii::$app->user->isGuest): ?>
                        <a href="/job/create-basket?id=<?= $item->id ?>" class="pressed-button BtnBasket">В корзину</a>
                    <?php endif; ?>
                </div>


                    <span class="basket">
                        <?php if (!Yii::$app->user->isGuest): ?>
                        <?php else:?>
                            <a href="/user/login" class="pressed-button BtnBasket">Войдите чтобы купить</a>
                    </span>
                        <?php endif; ?>
                </div>







            <?php endforeach; ?>
            <?php else: ?>
                <div class="empty">Здесь пока пусто</div>
            <?php endif; ?>
    </div>
</div>






