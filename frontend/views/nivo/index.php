<?php /*var $this yii\web\View */

use frontend\assets\NivoAsset;

NivoAsset::register($this);

$this->registerJsFile('@web/js/nivo/scripts.js', ['depends' => [
        NivoAsset::className()
]]);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Nivo Slider Example</title>      
    </head>
    <body>        
        <div class="theme-default">
        <div id="slider" class="nivoSlider">     
            <img src="/files/images/nemo.jpg" alt="" />    
            <img src="/files/images/toystory.jpg" alt="" title="#htmlcaption" /></a>     
            <img src="/files/images/up.jpg" alt="" title="This is an example of a caption" />     
            <img src="/files/images/walle.jpg" alt="" /> 
        </div> 
        </div>
        <div id="htmlcaption" class="nivo-html-caption">     
            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
        </div>             
    </body>
</html>