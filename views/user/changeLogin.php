<?php

/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
    <div class="back">
        <div class="btnBack">
            <button onclick="window.history.back()" class="double-border-button">Назад</button>
        </div>
    </div>




<div class="containerIndex">

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
        <div class="textLogin">
            <?= Html::submitButton('Сменить логин', ['class' => 'sliding-button backAcc changeBtn']) ?>
        </div>


        <?php ActiveForm::end(); ?>
    </div>



