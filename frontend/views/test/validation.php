<?php
/* @var $model frontend\models/example\ExampleValidation */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>

<h1>Test</h1>

<form method="post">
    <p><input name="options[]" type="checkbox" value="1" /> Wifi:</p>
    <br>
    
    <p><input name="options[]" type="checkbox" value="2" /> Big window:</p>
    <br>
    
    <p><input name="options[]" type="checkbox" value="3" /> Ice cream:</p>
    <br>
    
    <input type="submit" />
    
</form>



<!--<form method="post">
    <p>Site:</p>
    <input name="siteAddress" type="text" />
    <br><br>
    
    
    <input type="submit" />
    
</form>-->


<!--<form method="POST">
    <p>Start value:</p>
    <input name="startValue" type="text" />
    <br><br>
    
    <p>End value:</p>
    <input name="endValue" type="text" />
    <br><br>
    
    <input type="submit" />
    
</form>-->

<!--<h1>Test</h1>

<form method="POST">
    <p>Test attribute:</p>
    <input name="testAttribute" type="text" />
    <br><br>
    
    <input type="submit" />
    
</form>-->
