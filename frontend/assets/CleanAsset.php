<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CleanAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/clean/bootstrap/css/bootstrap.min.css',
        'css/clean/bootstrap/css/all.min.css',
        'css/clean/bootstrap/css/font-1.css',
        'css/clean/bootstrap/css/font-2.css',
        'css/clean/bootstrap/css/clean-blog.min.css',
        
    ];
    public $js = [
        'js/clean/jquery/jquery.min.js',
        'js/clean/bootstrap/js/bootstrap.bundle.min.js',
        'js/clean/js/clean-blog.min.js',
    ];
    public $depends = [
        
    ];
}
