<?php
/** @var $model */
/** @var $messages */

/** @var $users */

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

<?php if (Yii::$app->user->can('admin') || Yii::$app->user->can('owner')): ?>
<div class="clearMessages">
    <a href="/job/delete-chat" class="sliding-button">Очистить</a>
</div>
<?php endif; ?>
<div class="containerIndex">

    <div class="messagesChat">
        <div class="infoMessage">
            <?php foreach ($messages as $item): ?>
                <div class="messageChat"><?= $item->message ?></div><br>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<div class="messageUi">
    <?php $form = ActiveForm::begin(['fieldConfig' => [
        'template' => "\n{error}\n{input}",
        'labelOptions' => ['class' => 'label'],
        'errorOptions' => ['class' => 'error'],
        'inputOptions' => ['class' => 'input'],
    ],]) ?>

    <?= $form->field($model, 'message')->textInput() ?>
    <div class="btnChat">
        <?= Html::submitButton('📩', ['class' => 'btnSend']) ?>
    </div>


    <?php ActiveForm::end(); ?>
</div>