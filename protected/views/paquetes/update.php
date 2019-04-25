<?php
/* @var $this PaquetesController */
/* @var $model Paquetes */

$this->breadcrumbs=array(
	'Paquetes'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Paquetes', 'url'=>array('index')),
	array('label'=>'Create Paquetes', 'url'=>array('create')),
	array('label'=>'View Paquetes', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Paquetes', 'url'=>array('admin')),
);
?>

<h1>Update Paquetes <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>