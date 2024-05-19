<?php
/** @var $model */


use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<body>
<div class="center">
    <div class="containerProfile">


        <div class="profile">

            <div class="infoBlock">

                <div class="changeAva">
                    <a href="/job/change-image?id=<?= Yii::$app->user->id ?>" class="double-border-button">Сменить аватар</a>
                </div>
                <?php if (Yii::$app->user->can('admin') || Yii::$app->user->can('owner')): ?>
                    <div class="adminPanel">
                        <a href="/admin/admin" class="double-border-button">Панель Admin</a>
                    </div>

                <?php endif; ?>
                <div class="changeUserData">
                    <a href="/user/change-login?id=<?= Yii::$app->user->id ?>" class="double-border-button data">Сменить имя</a><br>
                    <a href="/user/change-password?id=<?= Yii::$app->user->id ?>" class="double-border-button data">Сменить пароль</a>
                </div>
            </div>


            <div class="ava">
                <img src="/uploads/<?= Yii::$app->user->id ?>.png" alt="" class="avaAva">
            </div>
            <div class="underAva">
                <div class="loginUser">
                    <span class="loginText">Your nickname:</span><br>
                    <div class="textName">
                        <span><?= Yii::$app->user->identity->login ?></span>
                    </div>
                </div>
                <div class="urlProfile">
                    <div class="basketProfile">
                        <a href="/job/basket" class="double-border-button">Корзина</a>
                    </div>
                    <div class="logout">
                        <?= Html::beginForm('/user/logout') . Html::submitButton('Выход из аккаунта', ['class' => 'sliding-button backAcc']) . Html::endForm() ?>
                    </div>
                    <div class="deleteUser">
                        <a href="/user/delete-user?id=<?= Yii::$app->user->identity->getId(); ?>"
                           class="sliding-button backAcc">Удалить аккаунт</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</body>


