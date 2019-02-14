<?php
/* @var $model fronted\models\Comments */
/* @var $this yii\web\View */

use frontend\widgets\comments\Com;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;


if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>

<?php echo Com::widget(); ?>

<?php 
$listData = ArrayHelper::map($comments, 'name', 'comments');

foreach ($comments as $comment) {
     echo Html::tag('h3',  Html::encode($comment['name'])); 
     echo Html::tag('p', Html::encode($comment['comments'])); 
}
?>

<form method="post">
    <p>Имя:</p>
    <input name="name" type="text" />
    <br><br>
    
    <p>Email:</p>
    <input name="email" type="text" />
    <br><br>
    
    <p>Комментарий:</p>
    <textarea name="comments"></textarea>
    <br><br>
    
    <input type="submit" />
</form>