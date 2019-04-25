<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
        $this->module->nombre,
);

if(!isset($_GET['Fecha'])){
	$desde = date('Y-m-d');
}
else{
	$desde = $_GET['Fecha'];
}

if(!isset($_GET['Hasta'])){
	$hastafin = date('Y-m-d');
}
else{
	$hastafin = $_GET['Hasta'];
}

?>

<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
        $this->module->nombre,
);

// if(isset($_GET['desde'])){
	// $desde = $_GET['desde'];
// }
// else{
	// $desde = date('Y-m-d');
// }

if(isset($_GET['hasta'])){
	$hasta = $_GET['hasta'];
}
else{
	$hasta = date('Y-m-d');
}

if(isset($_GET['queue'])){
	$queue = $_GET['queue'];
}
else{
	$queue = 0;
}

$fp = fopen("/var/www/html/sofint_new_original/protected/data/config.txt", "r");
$linea = fgets($fp);
$datos = explode(';', $linea);
$servidor = $datos[0];
$puerto = $datos[1];
$usuario = $datos[2];
$contra = $datos[3];
fclose($fp);
$ruta = "https://$servidor:$puerto/";
?>

<table width="100%">
	<tbody>
		<tr>
			<td id="tdMenuIzq" width="200px" valign="top" bgcolor="#f6f6f6" align="left">
				<table width="100%" cellspacing="0" cellpadding="0" align="left" class="">
                    <tbody>
						<tr><td class="menuiz_botonoff" title=""><a href="<?php echo $ruta; ?>index.php?menu=reports_break">Reporte de Recesos</a></td></tr>
						<tr><td class="menuiz_botonoff" title=""><a href="<?php echo $ruta; ?>index.php?menu=calls_detail">Detalle de Llamadas</a></td></tr>
						<tr><td class="menuiz_botonoff" title=""><a href="<?php echo $ruta; ?>index.php?menu=calls_per_hour">Llamadas por hora</a></td></tr>
						<tr><td class="menuiz_botonoff" title=""><a href="<?php echo $ruta; ?>index.php?menu=calls_per_agent">Llamadas por Agente</a></td></tr>
						<tr><td class="menuiz_botonoff" title=""><a href="<?php echo $ruta; ?>index.php?menu=hold_time">Tiempo de Espera</a></td></tr>
						<tr><td class="menuiz_botonoff" title=""><a href="<?php echo $ruta; ?>index.php?menu=login_logout">Tiempo de Sesión</a></td></tr>
						<tr><td class="menuiz_botonoff" title=""><a href="<?php echo $ruta; ?>index.php?menu=ingoings_calls_success">Éxito de Llamadas Entrantes</a></td></tr>
						<tr><td class="menuiz_botonoff" title=""><a href="<?php echo $ruta; ?>index.php?menu=graphic_calls">Gráfico Llamadas por hora</a></td></tr>
						<tr><td class="menuiz_botonoff" title=""><a href="<?php echo $ruta; ?>index.php?menu=rep_agent_information">Información de Agentes</a></td></tr>
						<tr><td class="menuiz_botonoff" title=""><a href="<?php echo $ruta; ?>index.php?menu=rep_agents_monitoring">Monitoreo de Agentes</a></td></tr>
						<tr><td class="menuiz_botonoff" title=""><a href="<?php echo $ruta; ?>index.php?menu=rep_trunks_used_per_hour">Troncales por hora</a></td></tr>
						<tr><td class="menuiz_botonoff" title=""><a href="<?php echo $ruta; ?>index.php?menu=rep_incoming_calls_monitoring">Monitoreo Llamadas Entrantes</a></td></tr>
						<tr><td class="menuiz_botonoff" title=""><a href="<?php echo $ruta; ?>index.php?menu=campaign_monitoring">Monitoreo de Campaña</a></td></tr>	
						<tr><td class="menuiz_botonoff" title=""><a href="/sofint_new_original/index.php/monitoreocampana">Monitoreo de servicio</a></td></tr>	
						<tr><td class="menuiz_botonoff" title=""><a href="/sofint_new_original/index.php/recesos">Reporte de Recesos Avanzado</a></td></tr>	
					</tbody>
				</table>
			</td>
			
			<td valign="top" align="left">
				<table width="100%" cellpadding="6" border="0">
					<tbody>
						<tr class="moduleTitle">
							<td valign="middle" colspan="2" class="moduleTitle">&nbsp;&nbsp;<img border="0" align="absmiddle" src="<?php echo Yii::app()->request->baseUrl.'/images/list.png' ?>">&nbsp;&nbsp;Monitoreo Avanzado de Recesos</td>
						</tr>
						<tr>
							<td>
							

								<div class="panel panel-default">
									
									<?php 
										$form=$this->beginWidget(
											'CActiveForm', 
											array(
												'id'=>'cargosescuelas-_form-form',
												'action'=>Yii::app()->createAbsoluteUrl('/recesos/default/lista'),
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
									
									<?php  if(isset($modelview)) echo $this->renderPartial('_form', array('modelview'=>$modelview, 'fecha'=>$fecha, 'hastafin'=>$hastafin,'breaks'=>$breaks)) ?>
								</div>

								<div>
									<?php //print_r(Audit::getBreaks2(1,2)->num);?>
								</div>


							
							




							
							</td>
						</tr>
						</tbody>
				</table>
			</td>
		</tr>		
	</tbody>
</table>
	





