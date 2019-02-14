<?php
/* @var $this yii\web\View */
/* @var $productlist[] frontend\models\Product */

?>

<?php foreach ($productlist as $product): ?>
<div class="col-md-10d">
    <h3><?php echo $product->name; ?></h3>
    <h4><?php echo $product->getCategoryName(); ?></h4>
        <?php foreach($product->getFabricators() as $fabricator): ?>
    <hr><p><?php echo $fabricator->getName(); ?></p>
        <?php endforeach; ?>
    <hr>
</div>
<?php endforeach; ?>
