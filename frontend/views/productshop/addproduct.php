<?php
/* @var $this yii\web\View */
/* @var $product frontend\models\Product */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($product, 'name'); ?>

    <?php echo $form->field($product, 'isbn'); ?>

    <?php // echo $form->field($product, 'category_id'); ?>
    <?php echo $form->field($product, 'category_id')->dropDownList($product->getCategoriesList()); ?>

    <?php echo Html::submitButton('Save', [
        'class' => 'btn btn-primary',
    ]); ?>
<?php ActiveForm::end(); ?>

