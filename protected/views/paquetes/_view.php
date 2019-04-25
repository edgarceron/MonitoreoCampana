<?php
/* @var $this PaquetesController */
/* @var $data Paquetes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dat1')); ?>:</b>
	<?php echo CHtml::encode($data->dat1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dat2')); ?>:</b>
	<?php echo CHtml::encode($data->dat2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dat3')); ?>:</b>
	<?php echo CHtml::encode($data->dat3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dat4')); ?>:</b>
	<?php echo CHtml::encode($data->dat4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dat5')); ?>:</b>
	<?php echo CHtml::encode($data->dat5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dat6')); ?>:</b>
	<?php echo CHtml::encode($data->dat6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dat7')); ?>:</b>
	<?php echo CHtml::encode($data->dat7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dat8')); ?>:</b>
	<?php echo CHtml::encode($data->dat8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dat9')); ?>:</b>
	<?php echo CHtml::encode($data->dat9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dat10')); ?>:</b>
	<?php echo CHtml::encode($data->dat10); ?>
	<br />

	*/ ?>

</div>