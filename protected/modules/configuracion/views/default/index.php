<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
        $this->module->nombre,
);

if(isset($mensaje)) echo '<h1> '.$mensaje.'</h1>';
?>

<div class="col-lg-12 container">
	<?php 
		$form=$this->beginWidget(
			'CActiveForm', 
			array(
				'id'=>'config-_form-form',
				'action'=>Yii::app()->createAbsoluteUrl('/configuracion/default/guardar'),
				'enableAjaxValidation'=>false,
			)
		); 
	?>
	
	<div class="form-group">
		<?php echo CHtml::label('Direccion IP del servidor', null);?>
		<?php
			/*Direccion ip del servidor al cual apuntara el sofint */
			echo CHtml::textField(
				'servidor', 
				$servidor,
				array(
					'id'=>'servidor',)
				); ?>
		
	</div>
	
	<div class="form-group">
		<?php echo CHtml::label('Puerto del servidor', null);?>
		<?php
			/*Puerto de la base de datos del servidor*/
			echo CHtml::textField(
				'puerto', 
				$puerto,
				array(
					'id'=>'puerto',)
				); ?>
		
	</div>
	
	<div class="form-group">
		<?php echo CHtml::label('Usuario SQL', null);?>
		<?php
			/*Usuario de la base de datos*/
			echo CHtml::textField(
				'usuario', 
				$usuario,
				array(
					'id'=>'usuario', 
				)); ?>	
	</div>
	
	<div class="form-group">
		<?php echo CHtml::label('Contraseña SQL', null);?>
		<?php
			/*Contraseña de la base de datos*/
			echo CHtml::textField(
				'contra', 
				$contra,
				array(
					'id'=>'contra', 
				)); ?>	
	</div>
	
	<div class="form-group">
		<?php echo CHtml::submitButton('Guardar',array('class'=>'btn btn-primary')); ?>
	</div>
	<?php $this->endWidget(); ?>
</div>