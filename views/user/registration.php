<?php
/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="containerIndex">
    <div class="form">
        <div class="form__wrapper">
            <div class="glasesReg">
                <h1><?= $this->title ?></h1>
                <?php $form = ActiveForm::begin([
                    'fieldConfig' => [
                        'template' => "{label}\n{input}\n{error}",
                        'labelOptions' => ['class' => 'label'],
                        'inputOptions' => ['class' => 'input'],
                        'errorOptions' => ['class' => 'error']
                    ]
                ]); ?>
                <div>
                    <?= $form->field($model, 'login')->textInput() ?>
                </div>
                <div>
                    <?= $form->field($model, 'password')->passwordInput() ?>
                </div>
                <div>
                    <?= $form->field($model, 'passwordRepeat')->passwordInput() ?>
                </div>
                <span class="regText">Уже есть аккаунт ? - <a href="/user/login" class="textUrlReg">Войти</a></span><br>
                <?= Html::submitButton('Регистрация', ['class' => 'pressed-button']) ?>
                <?php ActiveForm::end(); ?>
            </div>

        </div>
    </div>
</div>
