<?php
/* @var $this IndustryController */
/* @var $model Industry */

$this->breadcrumbs=array(
	'Industries'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Industry', 'url'=>array('index')),
	array('label'=>'Create Industry', 'url'=>array('create')),
	array('label'=>'View Industry', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Industry', 'url'=>array('admin')),
);
?>

<h1>Update Industry <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>