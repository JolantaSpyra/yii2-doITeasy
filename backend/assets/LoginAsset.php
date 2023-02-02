<?php
namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/bootstrap.min.css',
        // 'font-awesome/css/font-awesome.css',
        // 'css/animate.css',
        // 'css/style.css',
        // 'css/site.css',
    ];
    public $js = [
//         'js/jquery-2.1.1.js',
        // 'js/bootstrap.min.js',
       
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}