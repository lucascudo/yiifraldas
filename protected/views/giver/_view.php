<?php
/* @var $this GiverController */
/* @var $data Giver */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gift_id')); ?>:</b>
	<?php echo CHtml::encode($data->gift_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gift_other')); ?>:</b>
	<?php echo CHtml::encode($data->gift_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('paid')); ?>:</b>
	<?php echo CHtml::encode($data->paid); ?>
	<br />

	*/ ?>

</div>