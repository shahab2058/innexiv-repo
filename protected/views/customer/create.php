<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Manage Customer', 'url'=>array('admin')),
);
?>

<h4 style="background-color: #f9f9f9; text-align: center; padding: 5px 0px; ">Create Customer</h4>

<?php $this->renderPartial('_form', array(
			'model'=>$model,
                    'country'=>$country,
                    'province'=>$province,
                    'industry'=>$industry,
		)); ?>