<?php
/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="containerIndex">
    <div class="form">
        <div class="form__wrapper">
            <div class="glasesReg">
<!--                <h1>--><?php //= $this->title ?><!--</h1>-->
                <?php $form = ActiveForm::begin([
                    'fieldConfig' => [
                        'template' => "{label}\n{input}\n{error}",
                        'labelOptions' => ['class' => 'label'],
                        'inputOptions' => ['class' => 'input'],
                        'errorOptions' => ['class' => 'error'],
                    ],
                    'options' => ['enctype' => 'multipart/form-data']

                ]); ?>
                <div>
                    <?= $form->field($model, 'login')->textInput() ?>
                </div>
                <div class="file">
                    <label>
                        <?= $form->field($model, 'file')->fileInput() ?>
                        <div class="btnFile double-border-button">Загрузить файл</div>
                    </label>



                </div>

                <div>
                    <?= $form->field($model, 'password')->passwordInput() ?>
                </div>
                <div>
                    <?= $form->field($model, 'passwordRepeat')->passwordInput() ?>
                </div>
                <div class="regTextAndBtn">
                    <span class="regText">Уже есть аккаунт ? - <a href="/user/login" class="textUrlReg">Войти</a></span><br>
                <?= Html::submitButton('Регистрация', ['class' => 'sliding-button backAcc regBtn']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>

        </div>
    </div>
</div>
