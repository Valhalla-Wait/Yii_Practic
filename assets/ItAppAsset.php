<?php
namespace app\assets;

use yii\web\AssetBundle;

class ItAppAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        'js/html5shiv.js',
        'js/respond.min.js'
    ];

    public $jsOptions = [
        'condition' => 'js/html5shiv.js',
        'position' => \yii\web\View::POS_HEAD
    ];
}

?>