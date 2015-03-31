<?php
/* @var $this CustomerController */
/* @var $data Customer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logo')); ?>:</b>
	<?php echo CHtml::encode($data->logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('physical_address')); ?>:</b>
	<?php echo CHtml::encode($data->physical_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('physical_address_city')); ?>:</b>
	<?php echo CHtml::encode($data->physical_address_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('physical_address_province_id')); ?>:</b>
	<?php echo CHtml::encode($data->physical_address_province_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('physical_address_country_id')); ?>:</b>
	<?php echo CHtml::encode($data->physical_address_country_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('physical_address_zip')); ?>:</b>
	<?php echo CHtml::encode($data->physical_address_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mailing_address')); ?>:</b>
	<?php echo CHtml::encode($data->mailing_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mailing_address_city')); ?>:</b>
	<?php echo CHtml::encode($data->mailing_address_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mailing_address_province_id')); ?>:</b>
	<?php echo CHtml::encode($data->mailing_address_province_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mailing_address_country_id')); ?>:</b>
	<?php echo CHtml::encode($data->mailing_address_country_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mailing_address_zip')); ?>:</b>
	<?php echo CHtml::encode($data->mailing_address_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('industry_id')); ?>:</b>
	<?php echo CHtml::encode($data->industry_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skype')); ?>:</b>
	<?php echo CHtml::encode($data->skype); ?>
	<br />

	*/ ?>

</div>