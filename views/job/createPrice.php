<?php
/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="containerIndex">
    <div class="form">
        <div class="form__wrapper">
            <div class="glasesLog glCreate">
                <h1 class="title"><?= $this->title ?></h1>
                <?php $form = ActiveForm::begin([
                    'class' => 'form',
                    'fieldConfig' => [
                        'template' => "{label}\n{input}\n{error}",
                        'labelOptions' => ['class' => 'label'],
                        'inputOptions' => ['class' => 'input'],
                        'errorOptions' => ['class' => 'error']
                    ]
                ]) ?>

                <?= $form->field($model, 'title')->textInput() ?>
                <?= $form->field($model, 'description')->textInput() ?>
                <?= $form->field($model, 'prices')->textInput() ?>
                <?= $form->field($model, 'last')->textInput() ?>
                <?= Html::submitButton("Создать", ['class' => 'pressed-button']) ?>

                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
</div>

