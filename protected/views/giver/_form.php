<?php
/* @var $this GiverController */
/* @var $model Giver */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'giver-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php $form->widget('CMaskedTextField', array(
			'model'=>$model,
			'attribute'=>'phone',
			'mask'=>'(99)9999-9999',
			'htmlOptions'=>array('size'=>50, 'maxlength'=>13)
		)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gift_id'); ?>
		<?php
			$freeGift = (!Yii::app()->user->isGuest)
				? array_merge(array(array('id'=>$model->gift_id,'description'=>'Manter o presente original')), $giftModel->getFree())
				: $giftModel->getFree();
			$freeGiftList = CHtml::listData($freeGift, 'id', 'description');
			echo CHtml::dropDownList('Giver_gift_id', $model->gift_id, $freeGiftList);
		?>
		<?php echo $form->error($model,'gift_id'); ?>
	</div>

	<div id="Giver_gift_other_row" class="row">
		<?php echo $form->labelEx($model,'gift_other'); ?>
		<?php echo $form->textField($model,'gift_other',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'gift_other'); ?>
	</div>

	
	<?php if (!Yii::app()->user->isGuest): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textField($model,'comment',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paid'); ?>
		<?php echo $form->checkBox($model,'paid'); ?>
		<?php echo $form->error($model,'paid'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Confirmar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<?php if (Yii::app()->user->isGuest): ?>	
<script type="text/javascript">
	$("#Giver_gift_id").attr('name', 'Giver[gift_id]');
	$("#Giver_gift_id").change(function() {
		if ($(this).val() == "0") {
			$("#Giver_gift_other_row").show();
			$("#Giver_gift_other_row").prop("required", true);
		} else {
			$("#Giver_gift_other_row").hide();
			$("#Giver_gift_other_row").prop("required", false);
		}
	}); 
</script>
<?php endif; ?>

</div><!-- form -->