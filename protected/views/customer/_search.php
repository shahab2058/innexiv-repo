<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="spacing">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'logo'); ?>
		<?php echo $form->textField($model,'logo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'physical_address'); ?>
		<?php echo $form->textArea($model,'physical_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'physical_address_city'); ?>
		<?php echo $form->textField($model,'physical_address_city',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'physical_address_province_id'); ?>
		<?php echo $form->textField($model,'physical_address_province_id'); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'physical_address_country_id'); ?>
		<?php echo $form->textField($model,'physical_address_country_id'); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'physical_address_zip'); ?>
		<?php echo $form->textField($model,'physical_address_zip',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'mailing_address'); ?>
		<?php echo $form->textArea($model,'mailing_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'mailing_address_city'); ?>
		<?php echo $form->textField($model,'mailing_address_city',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'mailing_address_province_id'); ?>
		<?php echo $form->textField($model,'mailing_address_province_id'); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'mailing_address_country_id'); ?>
		<?php echo $form->textField($model,'mailing_address_country_id'); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'mailing_address_zip'); ?>
		<?php echo $form->textField($model,'mailing_address_zip',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'industry_id'); ?>
		<?php echo $form->textField($model,'industry_id'); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="spacing">
		<?php echo $form->label($model,'skype'); ?>
		<?php echo $form->textField($model,'skype',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->