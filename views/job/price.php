<?php
/** @var $price */

use yii\widgets\ActiveForm;


?>
<div class="containerIndex">
    <div class="formInd">
<!--        <div class="carts">-->
<!--            <div class="cart">-->
<!--                <div class="glases glasesPrice">-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="carts">-->
<!--            <div class="cart">-->
<!--                <div class="glases glasesPrice product-buttons">-->
<!--                    <a href="#">В корзину</a>-->
<!--                </div>-->
<!--                <div class="product-title">-->
<!--                    <a href="#">Low price</a>-->
<!--                    <span class="product-price">₽ 999</span>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="carts">-->
<!--            <div class="cart">-->
<!--                <div class="glases glasesPrice">-->
<!---->
<!--                </div>-->
<!--            </div>-->
        <?php if (Yii::$app->user->isGuest): ?>

        <?php else: ?>
            <a href="/job/create-price" class="createCart pressed-button">Создать карточку</a>
        <?php endif; ?>
<!--        <div class="product-wrap">-->
<!--            <div class="product-item">-->
<!--                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/US_%241_obverse.jpg/800px-US_%241_obverse.jpg" alt="доллар">-->
<!--                <div class="product-buttons">-->
<!--                    <a href="/job/basket" class="button">В корзину</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="product-title">-->
<!--                <a href="">Low price</a>-->
<!--                <span class="product-price">₽ 999</span><br>-->
<!--                <span class="product-price lastPrice">₽ 4 999</span>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="product-wrap">-->
<!--            <div class="product-item">-->
<!--                <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/US_%2420_Series_2006_Obverse.jpg" alt="доллар">-->
<!--                <div class="product-buttons">-->
<!--                    <a href="/job/basket" class="button">В корзину</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="product-title">-->
<!--                <a href="">Middle price</a>-->
<!--                <span class="product-price">₽ 1 999</span><br>-->
<!--                <span class="product-price lastPrice">₽ 9 999</span>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="product-wrap">-->
<!--            <div class="product-item">-->
<!--                <img src="https://goldenfront.ru/media/article_images/thumbs/image001_57.jpg.824x0_q85.jpg" alt="доллар">-->
<!--                <div class="product-buttons">-->
<!--                    <a href="/job/basket" class="button">В корзину</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="product-title">-->
<!--                <a href="">High price</a>-->
<!--                <span class="product-price">₽ 4 999</span><br>-->
<!--                <span class="product-price lastPrice">₽ 19 999</span>-->
<!--            </div>-->
<!--        </div>-->
                <?php if ($price):?>
                    <?php foreach ($price as $item): ?>
                        <div class="glases">
                            <span class="titlePrice">
                            <?= $item->title ?>
                        </span>
                        <span class="descPrice">
                            <?= $item->description ?>
                        </span>
                        <span class="pricePrice">
                            <?= $item->price ?>
                        </span>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div>Здесь пока пусто</div>
                <?php endif; ?>

        </div>
    </div>









</div>
