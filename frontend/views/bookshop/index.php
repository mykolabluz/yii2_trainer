<?php
/* @var $this yii\web\View */
/* @var $booklist[] frontend\models\Book */

use yii\helpers\Url;

?>
<h1>Books!</h1>

<a href="<?php echo Url::to(['create']); ?>" class="btn btn-primary">
Create new book</a>
<br><br>

<?php foreach ($booklist as $book): ?>
<div class="col-md-10">
    <h3><?php echo $book->name; ?></h3>
    <p><?php echo $book->getDatePublished(); ?></p>    
    <p><?php echo $book->getPublisherName(); ?></p>
    
    
    
    <?php 
    
//    Логику перенесли в модель
//    $publisher = $book->getPublisher();
//    
//    if ($publisher) {
//        echo $publisher->name;
//    }
    
//    echo '<pre>';
//    print_r($author);
//    echo '</pre>';
//    
?>
    
    
    
    <?php foreach ($book->getAuthors() as $author) : ?>
    
<!--    
    логика должна быть в моделе, напримере метода getFullName();
<hr><p><?php echo $author->first_name. ' '.$author->last_name; ?></p>-->
    <hr><p><?php echo $author->getFullName(); ?></p>
    <?php endforeach; ?>
    

</div>
    <hr>
<?php endforeach; ?>



