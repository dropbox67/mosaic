<?php
namespace app\components\widgets\board;

use yii\web\AssetBundle;

class BoardAsset extends AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = ['assets/main.css'];
    public $js = ['assets/main.js'];
    public $depends = [
    ];

}
