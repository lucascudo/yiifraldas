<?php
/* @var $this GiverController */
/* @var $model Giver */

$this->breadcrumbs=array(
	'Givers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Giver', 'url'=>array('index')),
	array('label'=>'Manage Giver', 'url'=>array('admin')),
);
?>

<h1>Presentear</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'giftModel'=>$giftModel)); ?>