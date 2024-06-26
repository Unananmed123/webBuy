<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       'css/layout.css',
       'css/all.css',
       'css/index.css',
       'css/price.css',
       'css/login.css',
       'css/profile.css',
       'css/reg.css',
       'css/news.css',
       'css/basket.css',
       'css/snow.min.css',
       'css/music.css',
       'css/load.css',
       'css/admin.css',
       'css/chat.css',
    ];
    public $js = [
        'js/index.js',
        'js/Snow.js',
        'js/music.js',
        'js/load.js',
        'js/admin.js',
        'js/fire.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
