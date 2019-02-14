<?php
/* @var $this yii\web\View */
/* @var $fabricator frontend\models\Fabricator */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($fabricator, 'name'); ?>

    <?php echo Html::submitButton('Save', [
        'class' => 'btn btn-primary',
    ]); ?>
<?php ActiveForm::end(); ?>

