<?php

/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>



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
<?= Html::submitButton('Сменить логин', ['class' => 'sliding-button backAcc regBtn']) ?>

<?php ActiveForm::end(); ?>
