<?php
/** @var $model */


use yii\helpers\Html;
?>
<body >
<div class="containerIndex">
        <div class="profile">
            <div class="loginUser">
                <span class="loginText" style="font-size: 30px;">Your nickname:</span><br>
                <div class="textName">
                    <?= Html::submitButton(' ' . Yii::$app->user->identity->login . ' ', ['class' => 'textName'])  ?>
                </div>
            </div>
            <div class="logout">
                <?= Html::beginForm('/user/logout') . Html::submitButton('Выход из аккаунта', ['class' => 'sliding-button backAcc']) . Html::endForm() ?>
            </div>
            <div class="deleteUser">
                    <a href="/user/delete-user?id=<?= Yii::$app->user->identity->getId(); ?>" class="pressed-button">Удалить аккаунт</a>
            </div>
            <div class="basketProfile">
                <a href="/job/basket">Корзина</a>
            </div>
        </div>
</div>
</body>


