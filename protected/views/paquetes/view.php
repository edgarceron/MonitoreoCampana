<?php
/* @var $this PaquetesController */
/* @var $model Paquetes */

$this->breadcrumbs=array(
	'Paquetes'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Paquetes', 'url'=>array('index')),
	array('label'=>'Create Paquetes', 'url'=>array('create')),
	array('label'=>'Update Paquetes', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Paquetes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paquetes', 'url'=>array('admin')),
);
?>

<h1>View Paquetes #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'nombre',
		'ciudad',
		'fecha_creacion',
		'estado',
		'observacion',
		'dat1',
		'dat2',
		'dat3',
		'dat4',
		'dat5',
		'dat6',
		'dat7',
		'dat8',
		'dat9',
		'dat10',
	),
)); ?>
