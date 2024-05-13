<?php
/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
    <div class="containerIndex">
        <div class="form">
            <div class="form__wrapper">
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
                <?= $form->field($model, 'message')->textInput() ?>
                <div class="btnPrice">
                    <?= Html::submitButton("Создать", ['class' => 'sliding-button createPrice']) ?>
                </div>


                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>

<?php
