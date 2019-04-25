<?php
/* @var $this OpcionesController */
/* @var $model Opciones */
/* @var $form CActiveForm */
?>

<div class="row">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opciones-OpcionesForm-form',
        'action'=> Yii::app()->createAbsoluteUrl('/rescate/default/set') ,
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    
		<?php echo $form->hiddenField($model,'opcion',array('class'=>'form-control')); ?>

    
		<?php echo $form->hiddenField($model,'descripcion',array('class'=>'form-control')); ?>

    <div class="col-lg-4">
	<div class="form-group">
		<?php echo CHtml::label('Campaña','opciones_valor',array('class'=>'label label-success')); ?>
		<?php echo $form->dropDownList($model,'valor', $campaignList,array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>
    </div>
    <div class="col-lg-12">
	<div class="form-group">
		<?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary')); ?>
	</div>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->