<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'View Customer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Customer', 'url'=>array('admin')),
);
?>

<h4 style="background-color: #f9f9f9; text-align: center; padding: 5px 0px; ">Update Customer <?php echo $model->name; ?></h4>

<?php $this->renderPartial('_form_update', array(
			'model'=>$model,
                    'country'=>$country,
                    'province'=>$province,
                    'industry'=>$industry,
		)); ?>