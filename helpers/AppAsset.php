<?php

namespace app\helpers;

use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/style.css'
    ];
    public $js = [
        '/js/script.js',
        '//code.jivosite.com/script/widget/L1XgNH0fPZ'
    ];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class
    ];
}
