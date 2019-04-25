<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
        $this->module->nombre,
);
?>

<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script>
webshims.setOptions('forms-ext', {types: 'date'});
webshims.polyfill('forms forms-ext');
$.webshims.formcfg = {
en: {
    dFormat: '-',
    dateSigns: '-',
    patterns: {
        d: "yy-mm-dd"
    }
}
};
</script>


<div class="panel panel-default">
    <div class="panel-heading">
        <div class="container row">
            <div class="col-lg-6 text-left"><img alt="Bootstrap Image Preview" src="<?php echo Yii::app()->request->baseUrl.'/images/icon.png' ?>"/></div>
            <div class="col-lg-6"></div>
        </div>
      
    </div>
    <div class="panel-body">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'Campaing-_form-form',
				'action'=>Yii::app()->createAbsoluteUrl('/regresarllamadas/default/campaing'),
			// Please note: When you enable ajax validation, make sure the corresponding
			// controller action is handling ajax validation correctly.
			// See class documentation of CActiveForm for details on this,
			// you need to use the performAjaxValidation()-method described there.
			'enableAjaxValidation'=>false,
		)); ?>
    
			<div class="form-group">
				<?php echo CHtml::label('Fecha Inicio','FechaInicio'); ?>  
				<?php echo CHtml::dateField('FechaInicio'); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('Fecha Fin','FechaFin'); ?>  
				<?php echo CHtml::dateField('FechaFin'); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('Troncal','Troncal'); ?> 
				<?php echo CHtml::dropDownList('Troncal', '1', Asterisk::getTroncales()); ?>  
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('Campaña','Cola'); ?> 
				<?php echo CHtml::dropDownList('Cola', '1', Asterisk::getCampaign()); ?>  
			</div>
			
			<div class="col-lg-12">
				<div class="form-group">
					<?php echo CHtml::submitButton('Generar',array('class'=>'btn btn-primary')); ?>
				</div>
			</div>
		<?php $this->endWidget(); ?>
    
        </div>
    </div>
</div>


