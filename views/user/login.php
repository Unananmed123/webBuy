<?php
/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="containerIndex">
    <div class="form">
        <div class="form__wrapper">
            <div class="glasesLog">
<!--                <h1 class="title">--><?php //= $this->title ?><!--</h1>-->
                <?php $form = ActiveForm::begin([
                    'class' => 'form',
                    'fieldConfig' => [
                        'template' => "{label}\n{input}\n{error}",
                        'labelOptions' => ['class' => 'label'],
                        'inputOptions' => ['class' => 'input'],
                        'errorOptions' => ['class' => 'error']
                    ]
                ]) ?>

                <?= $form->field($model, 'login')->textInput() ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <div class="textLogin">
                    <span class="regTextLog">Нет аккаунта ? - <a href="/user/registration" class="textUrlReg">Зарегестрируйтесь</a></span><br>
                    <?= Html::submitButton("Войти", ['class' => 'sliding-button backAcc loginBtn']) ?>
                </div>



                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
</div>

