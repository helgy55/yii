<?php
/* * @link http://www.yiiframework.com/ */
namespace app\assets;

use yii\web\AssetBundle;

/* Main application asset bundle. <qiang.xue@gmail.com>  */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
