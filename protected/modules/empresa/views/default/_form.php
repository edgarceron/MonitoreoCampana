<?php
/* @var $this SofintConfigController */
/* @var $model SofintConfig */
/* @var $form CActiveForm */
?>

<div class="row">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sofint-config-_form-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>	

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
		<?php echo $form->labelEx($model,'nit',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'nit',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'nit'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'direccion',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'direccion',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'telefono',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'telefono',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'movil',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'movil',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'movil'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'web',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'web',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'web'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'logo',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'logo',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'logo'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'gcalid',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'gcalid',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'gcalid'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'gmailuser',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'gmailuser',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'gmailuser'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'gmailclave',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'gmailclave',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'gmailclave'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'asterurl',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'asterurl',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'asterurl'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'asteruser',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'asteruser',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'asteruser'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'asterclave',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'asterclave',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'asterclave'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'dat1',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'dat1',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'dat1'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'dat2',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'dat2',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'dat2'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'dat3',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'dat3',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'dat3'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'dat4',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'dat4',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'dat4'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'dat5',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'dat5',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'dat5'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'dat6',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'dat6',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'dat6'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'dat7',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'dat7',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'dat7'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'dat8',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'dat8',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'dat8'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'dat9',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'dat9',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'dat9'); ?>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="form-group">
		<?php echo $form->labelEx($model,'dat10',array('class'=>'label label-success')); ?>
		<?php echo $form->textField($model,'dat10',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'dat10'); ?>
	</div>
    </div>
    <div class="col-lg-12">
	<div class="form-group">
		<?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary')); ?>
	</div>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->