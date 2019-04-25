<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
        $this->module->nombre,
);
?>
<div class="row">
    <div class="col-lg-3">
        <div class="list-group">
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-info-sign"></span> Informacion de la Empresa</a>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="row">
            <form>                
                <?php echo $this->renderPartial('_form', array('model'=>$empresa)); ?>                   
            </form>
        </div>        
    </div>
</div>