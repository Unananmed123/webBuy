<?php
/** @var $price */

use yii\widgets\ActiveForm;

?>
<div class="containerIndex">
    <div class="formInd">
            <?php if ($price):?>

                <?php foreach ($price as $item): ?>

                <div class="bgCart">

                <div class="textPrice">
                    <div class="titlePrice"><?= $item->title ?></div>
                    <div class="descPrice"><?= $item->description ?></div>
                    <div class="pricePrice"><?=  '₽' . ' ' . $item->price  ?></div>
                    <div class="lastPricePrice lastPrice"><?= '₽' . ' ' . $item->last ?></div>
                    <?php if (!Yii::$app->user->isGuest): ?>
                        <a href="/job/create-basket?id=<?= $item->id ?>" class="forbasket double-border-button">В корзину</a>
                    <?php endif; ?>
                </div>


                    <span class="basket">
                        <?php if (!Yii::$app->user->isGuest): ?>
                        <?php else:?>
                            <a href="/user/login" class="loginToBuy double-border-button">Войдите чтобы купить</a>
                    </span>
                        <?php endif; ?>
                </div>







            <?php endforeach; ?>
            <?php else: ?>
                <div class="empty">Здесь пока пусто</div>
            <?php endif; ?>
    </div>
</div>
<?php if (Yii::$app->user->can('admin') || Yii::$app->user->can('owner')): ?>
<div class="adminBtn">
    <a href="/job/create-price" class="sliding-button">Создать карточку</a>
    <?php foreach ($price as $item): ?>

        <a href="/job/delete-price?id=<?= $item->id ?>" class="sliding-button">Удалить карточку <?= $item->title ?></a>

    <?php endforeach; ?>
    <?php endif; ?>

</div>





