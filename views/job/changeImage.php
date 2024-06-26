<?php

/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>

<div class="containerIndex">
    <div class="changeImageForm">

        <h1><?= $this->title ?></h1>
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
            <?= $form->field($model, 'file')->fileInput() ?>
        </div>
        <?= Html::submitButton('Сменить аватар', ['class' => 'sliding-button backAcc regBtn']) ?>


        <?php ActiveForm::end(); ?>
    </div>
</div>
