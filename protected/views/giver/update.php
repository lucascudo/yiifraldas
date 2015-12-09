<?php
/* @var $this GiverController */
/* @var $model Giver */

$this->breadcrumbs=array(
	'Givers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Giver', 'url'=>array('index')),
	array('label'=>'Create Giver', 'url'=>array('create')),
	array('label'=>'View Giver', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Giver', 'url'=>array('admin')),
);
?>

<h1>Update Giver <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'giftModel'=>$giftModel)); ?>