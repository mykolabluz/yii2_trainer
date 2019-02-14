<?php
/* @var $model fronted\models\Employee */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>

<h1>Welcome to our company, please orders windows!</h1>

<form method="POST">
    <p>Какой ширины окно, см:</p>
    <input name="width" type="text" />
    <br><br>
    
    <p>Какой высоты окно, см:</p>
    <input name="height" type="text" />
    <br><br>
    
    <p>Количество камер:</p>
    1 <input name="numberCameras" type="radio" value="1"/><br>
    2 <input name="numberCameras" type="radio" value="2"/><br>
    3 <input name="numberCameras" type="radio" value="3"/><br>
    <br><br>
    
    <p>Общее количество створок:</p>
    <input name="numberLeaves" type="text" />
    <br><br>
    
    <p>Количество поворотных створок:</p>
    <input name="flaps" type="text" />
    <br><br>
       
    <p>Цвет</p>
    <select name="color">
        <option value="1">Зеленый</option>
        <option value="2">Оранжевый</option>
        <option value="3">Белый</option>
        <option value="4">Красный</option>
    </select>
    <br><br>
    
    <p>Наличия подоконника:</p>
    Нет <input name="windowsill" type="radio" value="0"/>
    Да <input name="windowsill" type="radio" value="1" />
    <br><br>
    
    <p>Електроная почта:</p>
    <input name="email" type="text" />
    <br><br>
    
    <p>Ваше имя:</p>
    <input name="customerName" type="text" />
    <br><br>
    
    
    
    <input type="submit" />
    
</form>

