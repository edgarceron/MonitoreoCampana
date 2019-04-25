<?php
/* @var $this PaquetesController */
/* @var $model Paquetes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paquetes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textArea($model,'observacion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dat1'); ?>
		<?php echo $form->textField($model,'dat1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dat1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dat2'); ?>
		<?php echo $form->textField($model,'dat2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dat2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dat3'); ?>
		<?php echo $form->textField($model,'dat3',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dat3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dat4'); ?>
		<?php echo $form->textField($model,'dat4',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dat4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dat5'); ?>
		<?php echo $form->textField($model,'dat5',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dat5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dat6'); ?>
		<?php echo $form->textField($model,'dat6',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dat6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dat7'); ?>
		<?php echo $form->textField($model,'dat7',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dat7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dat8'); ?>
		<?php echo $form->textField($model,'dat8',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dat8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dat9'); ?>
		<?php echo $form->textField($model,'dat9',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dat9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dat10'); ?>
		<?php echo $form->textField($model,'dat10',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dat10'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->