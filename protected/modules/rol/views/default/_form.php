<?php
/* @var $this RolController */
/* @var $model Rol */
/* @var $form CActiveForm */
?>

<div class="row">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rol-_form-form',
        'action'=>Yii::app()->createAbsoluteUrl('/rol/default/set'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->hiddenField($model,'id'); ?>

	<?php echo $form->errorSummary($model); ?>

    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'nombre',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'nombre',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'descripcion',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'descripcion',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'padre',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'padre',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'padre'); ?>
	</div>
    </div>
    <div class="col-lg-12">
	<div class="form-group">
		<?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary')); ?>
	</div>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->