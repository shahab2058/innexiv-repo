<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'), //important when using filefields
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

        
        
        <div class="col-md-6">
	<div class="spacing">

            <?php echo $form->labelEx($model, 'logo'); ?> 
            <div class="col-md-4" style="padding: 0px"><?php if(trim($model->logo) != ''){ ?><img style="width: 150px;" src="upload/<?php echo $model->logo; ?>" /> <?php } ?></div>
            <div class="col-md-8"><?php echo $form->fileField($model, 'logo',array('class'=>'form-control')); ?></div>
            <?php echo $form->error($model, 'logo'); ?>
        
        </div>
            <div class="spacing" style="clear: both;"></div>
	<div class="spacing">
		<?php echo $form->labelEx($model, 'name');
		 echo $form->textField($model,'name',array('class'=>'form-control','placeholder'=>'Company Name')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

            <div id="physical_address" class="col-md-12" style="background-color: #f9f9f9; margin: 25px 0px;">
            <h4>Physical Address</h4>
	<div class="spacing">
		<?php echo $form->labelEx($model,'physical_address'); ?>
		<?php echo $form->textArea($model,'physical_address',array('class'=>'form-control','placeholder'=>'Address')); ?>
		<?php echo $form->error($model,'physical_address'); ?>
	</div>



            <div class="col-md-4" style="padding: 5px 0px">
            
            <div class="spacing">

<?php 

    
      echo $form->labelEx($model,'Select Country'); ?>
<?php echo $form->dropDownList($model,'physical_address_country_id',$country->loadallcountries(),array(

'options' => $province->selected($model->physical_address_province_id),
    'prompt'=>'Select Country',
	'class'=>'form-control',
    'ajax' => array(
    'type'=>'POST', 
    'url'=>Yii::app()->createUrl('province/loadprovinces'), //or $this->createUrl('loadprojects') if '$this' extends CController
    'update'=>'#provinces', //or 'success' => 'function(data){...handle the data in the way you want...}',
  'data'=>array('physical_address_country_id'=>'js:this.value'),
  ))); ?>

<?php echo $form->error($model,'physical_address_country_id'); ?>

</div>

            </div>
            
            <div class="col-md-4" style="padding: 5px 0px">

	<div class="spacing">
		<?php echo $form->labelEx($model,'Select Province'); ?>
		<?php echo $form->dropDownList($model,'physical_address_province_id', $province->loadallprovinces($model->physical_address_country_id), array('prompt'=>'Select Province','class'=>'form-control','id'=>'provinces')); ?>
		<?php echo $form->error($model,'physical_address_province_id'); ?>
	</div>
            </div>
            
            
            
            
            <div class="col-md-4" style="padding: 5px 0px">
            	<div class="spacing">
		<?php echo $form->labelEx($model,'physical_address_city'); ?>
		<?php echo $form->textField($model,'physical_address_city',array('class'=>'form-control','placeholder'=>'City')); ?>
		<?php echo $form->error($model,'physical_address_city'); ?>
                </div></div>
            
            

            
            

	<div class="spacing">
		<?php echo $form->labelEx($model,'physical_address_zip'); ?>
		<?php echo $form->textField($model,'physical_address_zip',array('class'=>'form-control','placeholder'=>'Zipcode')); ?>
		<?php echo $form->error($model,'physical_address_zip'); ?>
	</div>

            </div>
            <div class="spacing">
                <input type="checkbox" name="is_mailing_address"  class="is_mailing_address" value="1" />&nbsp;&nbsp;Physical Address is the Mailing Address?

            </div>    
        
            <div id="mail_address" class="col-md-12" style="background-color: #f9f9f9; margin: 25px 0px;">
        <h4>Mailing Address</h4>
            
            
	<div class="spacing">
		<?php echo $form->labelEx($model,'mailing_address'); ?>
		<?php echo $form->textArea($model,'mailing_address',array('class'=>'form-control','placeholder'=>'Address')); ?>
		<?php echo $form->error($model,'mailing_address'); ?>
	</div>
<div class="col-md-4" style="padding: 5px 0px">
	<div class="spacing">

<?php 

    
      echo $form->labelEx($model,'Select Country'); ?>
<?php echo $form->dropDownList($model,'mailing_address_country_id',$country->loadallcountries(),array(

'options' => $province->selected($model->mailing_address_province_id),
    'prompt'=>'Select Country',
	'class'=>'form-control',
    'ajax' => array(
    'type'=>'POST', 
    'url'=>Yii::app()->createUrl('province/loadprovinces'), //or $this->createUrl('loadprojects') if '$this' extends CController
    'update'=>'#provinces_mail', //or 'success' => 'function(data){...handle the data in the way you want...}',
  'data'=>array('mailing_address_country_id'=>'js:this.value'),
  ))); ?>

<?php echo $form->error($model,'mailing_address_country_id'); ?>

</div>

            </div>
            
            <div class="col-md-4" style="padding: 5px 0px">

	<div class="spacing">
		<?php echo $form->labelEx($model,'Select Province'); ?>
		<?php echo $form->dropDownList($model,'mailing_address_province_id', $province->loadallprovinces($model->mailing_address_country_id), array('prompt'=>'Select Province','class'=>'form-control','id'=>'provinces_mail')); ?>
		<?php echo $form->error($model,'mailing_address_province_id'); ?>
	</div>
            </div>
            
            
            
            
            <div class="col-md-4" style="padding: 5px 0px">
            	<div class="spacing">
		<?php echo $form->labelEx($model,'mailing_address_city'); ?>
		<?php echo $form->textField($model,'mailing_address_city',array('class'=>'form-control','placeholder'=>'City')); ?>
		<?php echo $form->error($model,'mailing_address_city'); ?>
                </div></div>
            
            
            

	<div class="spacing">
		<?php echo $form->labelEx($model,'mailing_address_zip'); ?>
		<?php echo $form->textField($model,'mailing_address_zip',array('class'=>'form-control','placeholder'=>'Zipcode')); ?>
		<?php echo $form->error($model,'mailing_address_zip'); ?>
	</div>
        
            </div>


        </div>
        
        <div class="col-md-6">
            
            
            	<div class="spacing">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('class'=>'form-control','placeholder'=>'Website')); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>
	<div class="spacing">
		<?php echo $form->labelEx($model,'industry_id'); ?>
		<?php //echo $form->textField($model,'industry_id',array('class'=>'form-control')); ?>
 <?php echo $form->dropDownList($model,'industry_id', $industry->loadallindustries(), array('prompt'=>'Select Industry','class'=>'form-control','id'=>'industry')); ?>
		<?php echo $form->error($model,'industry_id'); ?>
	</div>

	<div class="spacing">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('class'=>'form-control','placeholder'=>'Phone')); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="spacing">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('class'=>'form-control','placeholder'=>'Mobile')); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="spacing">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('class'=>'form-control','placeholder'=>'Email')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="spacing">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('class'=>'form-control','placeholder'=>'Fax')); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="spacing">
		<?php echo $form->labelEx($model,'skype'); ?>
		<?php echo $form->textField($model,'skype',array('class'=>'form-control','placeholder'=>'Skype')); ?>
		<?php echo $form->error($model,'skype'); ?>
	</div>

	<div class="spacing">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>
            
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<script type="text/javascript">


$(".is_mailing_address").change(function() {
    if(this.checked) {
        $('#mail_address').hide();
    }
    else{
        $('#mail_address').show();    
    }
});



</script>