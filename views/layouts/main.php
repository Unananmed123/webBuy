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
    <title><?=$this->title?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <div class="container">
        <a href="/" class="logo floating-button">Orent</a>
    <nav>
        <ul>
            <li class="liLayout  floating-button"><a href="/job/aboutus">About Us</a></li>
            <li class="liLayout  floating-button"><a href="/job/price">Price</a></li>
            <li class="liLayout  floating-button"><a href="/job/photo">Photo</a></li>
            <?php if (Yii::$app->user->isGuest):?>
                    <li class="btn floating-button"><a href="/user/login">Sign in</a></li>
    </div>
            <?php else:?>
                <li class="liLayout Profile floating-button"><a href="/user/profile">Profile</a></li>
            <?php endif;?>
        </ul>
    </nav>
    </div>
</header>

<main>
    <div>
        <?= $content ?>
    </div>
</main>

<footer>
    <div class="container">
        ©Orent <?= date('Y') ?>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
