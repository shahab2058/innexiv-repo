<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1 style="text-align: center; margin: 34px;">Login</h1>


<div class="container" style="width: 50%; margin: 0px auto; background: none repeat scroll 0% 0% rgb(249, 249, 249);padding:40px 0px;">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>true,
)); ?>

	

	<div class="login-fields">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="login-fields">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	<div class=" rememberMe" style="display:none;">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class=" submit login-fields">
		<?php echo CHtml::submitButton('Login',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->



<style>
    
    .login-fields{margin-top: 10px !important;}
    .container{ margin-bottom: 20px !important;}
    
    
</style>