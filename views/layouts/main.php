<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="bgAll">
    <div class="loader" id="loader">
        <div class="loadingio-spinner-dual-ring-nq4q5u6dq7r">
            <div class="ldio-x2uulkbinbj">
                <div></div>
                <div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>


    <header class="header">

        <div class="container">


            <nav>

                <div class="navig">
                    <a href="/" class="orent ltText">Orent</a>
                    <ul class="ulMain">
                        <li class="href ltText"><a href="/job/price">Price</a></li>
                        <li class="href ltText"><a href="/job/music">Music</a></li>
                        <li class="href ltText"><a href="/job/news">News</a></li>
                        <?php if (Yii::$app->user->isGuest): ?>
                        <li class="href ltText"><a href="/user/login">Sign in</a></li>
                    </ul>

                </div>
                <ul>
                    <?php else: ?>
                    <li class="href ltText"><a href="/user/profile">
                            <img class="profileImgUrl" src="/uploads/<?= Yii::$app->user->id ?>.png" alt=""> </a></li>
                </ul>
                <?php endif; ?>

            </nav>
        </div>

    </header>


    <main>
        <div>
            <?= $content ?>
        </div>
    </main>


    <footer>
        <div class="container fotCont">
            ©Orent <?= date('Y') ?>
        </div>
    </footer>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
