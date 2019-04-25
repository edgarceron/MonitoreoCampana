<?php
/* @var $this PaquetesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Paquetes',
);

$this->menu=array(
	array('label'=>'Create Paquetes', 'url'=>array('create')),
	array('label'=>'Manage Paquetes', 'url'=>array('admin')),
);
?>

<h1>Paquetes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
