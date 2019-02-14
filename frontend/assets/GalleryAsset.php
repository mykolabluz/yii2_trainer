<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author mukol
 */
class GalleryAsset extends AssetBundle
{
    public $css = [
        'css/gallery/style.css',
    ];
    
    public $js = [
        'js/jquery-latest.js',
        'js/isotope/jquery.isotope.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    
    public $jsOptions = [
      'position' => View::POS_END,
    ];
    
}
