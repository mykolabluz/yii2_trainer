<?php
/* @var $this yii\web\View */
/* @var $category frontend\models\Category */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($category, 'name'); ?>

    <?php echo Html::submitButton('Save', [
        'class' => 'btn btn-primary',
    ]); ?>
<?php ActiveForm::end(); ?>

