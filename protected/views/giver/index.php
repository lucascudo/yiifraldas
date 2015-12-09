<?php
/* @var $this GiverController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Givers',
);

$this->menu=array(
	array('label'=>'Create Giver', 'url'=>array('create')),
	array('label'=>'Manage Giver', 'url'=>array('admin')),
);
?>

<h1>Givers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
