<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Create Customer', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#customer-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h4 style="background-color: #f9f9f9; text-align: center; padding: 5px 0px; ">Manage Customer</h4>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php  $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
	'id'=>'show-grid',
	'dataProvider'=>$model->search(),
	
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
                                                         "header" => "",
                                                         "type" => "raw",
                                                         'value' => 'CHtml::link("<img width=\'100px\' src=\'upload/$data->logo\' />","",array("id"=>"logo"))',
                                                     ),
		'name',
		array(
			'name'=>'industry_id',
			'value'=>'$data->industry->name',
			'filter'=>CHtml::listData(Industry::model()->findAll(), 'id', 'name'),
		),
            
            
                /*'physical_address',
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
		
		'phone',
		'mobile',
		'email',
		'fax',
		'skype',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
