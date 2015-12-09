<?php
/* @var $this GiverController */
/* @var $model Giver */

$this->breadcrumbs=array(
	'Givers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Giver', 'url'=>array('index')),
	array('label'=>'Create Giver', 'url'=>array('create')),
	array('label'=>'Update Giver', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Giver', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Giver', 'url'=>array('admin')),
);
?>

<h1>View Giver #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'phone',
		'email',
		'gift_id',
		'gift_other',
		'comment',
		'paid',
	),
)); ?>
