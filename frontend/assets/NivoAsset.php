<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author mukol
 */

class NivoAsset extends AssetBundle
{
    public $css = [
        'css/nivo/nivo-slider.css',
        'css/nivo/default/default.css',
    ];
    
    public $js = [
        'js/nivo/jquery.nivo.slider.pack.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
