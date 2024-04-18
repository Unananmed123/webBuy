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
                    <?= Html::submitButton(' ' . Yii::$app->user->identity->login . '', ['class' => 'textName'])  ?>
                </div>
            </div>
            <div class="logout">
                <?= Html::beginForm('/user/logout') . Html::submitButton('Выход из аккаунта', ['class' => 'animated-button']) . Html::endForm() ?>
            </div>
        </div>
</div>
</body>


