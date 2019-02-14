<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model frontend\models\forms\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <P>Please fill out the following fields to login:</P>
    
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-signup']); ?>
                
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
            
                <?= $form->field($model, 'password')->passwordInput() ?>
            
            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
            
            <?php ActiveForm::end(); ?>
            
        </div>
    </div>
</div>

