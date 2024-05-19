<?php

/* @var $news */
/* @var $user */

?>
<?php if (!Yii::$app->user->isGuest): ?>
    <a href="/job/message?user_id=<?= Yii::$app->user->id ?>" class="sliding-button">Создать новость</a>
<?php endif; ?>

<?php if (!empty($news)): ?>
    <div class="containerIndex">
        <div class="news">
        <?php foreach ($news as $item): ?>
        <div class="message">
            <div class="new2">
                <span>By: </span>
                <?= $user->login ?><br>
            </div>
            <div class="new">
                <?= $item->message ?>
            </div>
            <div class="new3">
                <?= $item->date ?>
            </div>
            <?php if (!Yii::$app->user->isGuest): ?>
                <div class="delMessage">
                    <a href="/job/delete-message?id=<?= $item->id ?>" class="delMes">Удалить новость</a>
                </div>
            <?php endif; ?>
        </div>


        <?php endforeach; ?>
<?php else: ?>
            <div class="NULL">Пока что нет новостей</div>
<?php endif; ?>

        </div>
    </div>

