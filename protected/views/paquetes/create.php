<?php
/* @var $this PaquetesController */
/* @var $model Paquetes */

$this->breadcrumbs=array(
	'Paquetes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Paquetes', 'url'=>array('index')),
	array('label'=>'Manage Paquetes', 'url'=>array('admin')),
);
?>

<h1>Create Paquetes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>