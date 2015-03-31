<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'Update Customer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Customer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Customer', 'url'=>array('admin')),
);
?>

<h1>View Customer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'logo',
		'name',
		'physical_address',
		'physical_address_city',
		'physical_address_province_id',
		'physical_address_country_id',
		'physical_address_zip',
		'mailing_address',
		'mailing_address_city',
		'mailing_address_province_id',
		'mailing_address_country_id',
		'mailing_address_zip',
		'website',
		'industry_id',
		'phone',
		'mobile',
		'email',
		'fax',
		'skype',
	),
)); ?>
