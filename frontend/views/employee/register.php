<?php
/* @var $model fronted\models\Employee */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>

<h1>Welcome to our company!</h1>

<?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'firstName'); ?>

    <?php echo $form->field($model, 'lastName'); ?>

    <?php echo $form->field($model, 'middleName')->passwordInput(); ?>

    <?php echo $form->field($model, 'email')->hint('Help me? brother'); ?>

    <?php echo $form->field($model, 'birth'); ?>

    <?php echo $form->field($model, 'startedWork'); ?>

    <?php echo $form->field($model, 'position'); ?>

    <?php echo $form->field($model, 'code'); ?>

    <?php echo $form->field($model, 'city')->dropDownList($model->getCitiesList()); ?>

    <?php echo Html::submitButton('Send', ['class' => 'btn btn-primary']); ?>

<?php ActiveForm::end(); ?>


<?php /*
<form method="POST">
    <p>First name:</p>
    <input name="firstName" type="text" />
    <br><br>
    
    <p>Last name:</p>
    <input name="lastName" type="text" />
    <br><br>
    
    <p>Middle name:</p>
    <input name="middleName" type="text" />
    <br><br>
    
    <p>Email:</p>
    <input name="email" type="text" />
    <br><br>
    
    <p>Date of Birth:</p>
    <input name="birth" type="text" />
    <br><br>
    
    <p>Date of started work:</p>
    <input name="startedWork" type="text" />
    <br><br>
    
    <p>City</p>
    <select name="city">
        <option value="1">Kyiv</option>
        <option value="2">Moskov</option>
        <option value="3">Odessa</option>
        <option value="4">LasVegas</option>
    </select>
    <br><br>
    
    <p>Position:</p>
    <input name="position" type="text" />
    <br><br>
    
    <p>Identification code:</p>
    <input name="code" type="text" />
    <br><br>
    
    
    
    <input type="submit" />
    
</form> */ ?>

