<h1>Llamadas rescatadas</h1>

<?php 
	$form=$this->beginWidget(
		'CActiveForm', 
		array(
			'id'=>'cargosescuelas-_form-form',
			'action'=>Yii::app()->createAbsoluteUrl('/monitoreocampana/default/rescatadas'),
			'enableAjaxValidation'=>false,
			'method'=>'get', 
		)
	); 
?>
	
<div class="panel-body">
	<div class="col-lg-12 container" width="100%">
		<div class="form-group">
			<?php echo CHtml::label('Fecha', null);?>
			<?php 
				echo CHtml::dateField(
					'Fecha', 
					$desde,
					array(
						'id'=>'fecha', 
						'maxlength'=>10)
					); ?>
		</div>
		
		<div class="form-group">
			<?php echo CHtml::label('Hasta', null);?>
			<?php 
				echo CHtml::dateField(
					'Hasta', 
					$hastafin,
					array(
						'id'=>'fechafin', 
						'maxlength'=>10)
					); ?>
		<?php $this->endWidget(); ?>
		</div>
		
		<div class="form-group">
			<?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-primary')); ?>
		</div>
	</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rescatadas-grid',
	'dataProvider'=>$model,
	//'filter'=>$model,
	'columns'=>array(
		'fecha_registrada',
		'phone',
		'status',
		'fecha_llamada',
	),
));
//print_r($cuenta);
?>
</div>


