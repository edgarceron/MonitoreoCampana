<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
        $this->module->nombre,
);

if(isset($_GET['desde'])){
	$desde = $_GET['desde'];
}
else{
	$desde = date('Y-m-d');
}

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
							<td valign="middle" colspan="2" class="moduleTitle">&nbsp;&nbsp;<img border="0" align="absmiddle" src="<?php echo Yii::app()->request->baseUrl.'/images/list.png' ?>">&nbsp;&nbsp;Monitoreo de Servicio</td>
						</tr>
						<tr>
							<td colspan="3">
								<?php 
									$form=$this->beginWidget(
										'CActiveForm', 
										array(
											'id'=>'fecha-_form-form',
											'action'=>Yii::app()->createAbsoluteUrl('/monitoreocampana'),
											'enableAjaxValidation'=>false,
											'method'=>'get',
										)
									); 
								?>
								<table width="100%">
									<tbody>
										<tr>
											<td>
												<?php echo CHtml::label('Cola', null);?>
											</td>
											<td>
												<?php $list = CHtml::listData(QueueCallEntry::model()->findAll(), 'id', 'queue');
													  array_unshift($list, 'Todas las colas');
														echo CHtml::dropDownList(	
															'queue', $queue, $list,
															array('width'=>100)
														);
												?>
											</td>
											<td>
												<?php echo CHtml::label('Desde', null);?>
											</td>
											<td>
												<?php 
													echo CHtml::dateField(
														'desde', 
														$desde,
														array(
															'id'=>'fecha', 
															'maxlength'=>10)
													); 
												?>
											</td>
											<td>
												<?php echo CHtml::label('Hasta', null);?>
											</td>
											<td>
												<?php
													echo CHtml::dateField(
														'hasta', 
														$hasta,
														array(
															'id'=>'fecha', 
															'maxlength'=>10
														)
													); 
												?>
											</td>	
										</tr>

										<tr>
											<td align="center">
												<?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-primary')); ?>
											</td>
										</tr>
									</tbody>
								</table>
								<?php $this->endWidget(); ?>
							</td>
						</tr>
						
						<tr>
							<td colspan="2">
								<div id="cabecera_div">
								
								</div>
							</td>
						</tr>
						
						<tr>
							<td valign="top"  width="50%">
								<h1>Llamadas entrantes</h1>
								
								<div id='llamadas_div'>
									<table class="table table-hover table-striped">
										<thead class="tituloTabla">
											<tr>
												<th class="tituloTablath">Estado</th><th class="tituloTablath">Num. Telf.</th><th class="tituloTablath">Troncal</th><th class="tituloTablath">Desde</th><th class="tituloTablath">Cola</th>
											</tr>
										</thead>
									</table>
								</div>
							</td>
							
							<td valign="top"  width="50%">
								<h1>Agentes</h1>
							
								<div id='agentes_div'>
									<table class="table table-hover table-striped">
										<thead class="tituloTabla">
											<tr>
												<th class="tituloTablath">Agente</th><th class="tituloTablath">Estado</th><th class="tituloTablath">Núm. Telf.</th><th class="tituloTablath">Troncal</th><th class="tituloTablath">Cola</th>
											</tr>
										</thead>
									</table>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>		
	</tbody>
</table>
<script type="text/javascript">
	//setTimeout(function() {agentesEnVivo();}, 1000);
	setTimeout(function() {cabecera();}, 1000);
	function colaEnVivo(){
		<?php echo CHtml::ajax(
			array(
				'type'=>'POST',
				'dataType'=>'html',
				'async'=>'false',
				'url' => Yii::app()->createUrl('monitoreocampana/default/llamadas'),
				'update'=>'#llamadas_div',
				'complete'=>"function() {agentesEnVivo();}",
			)
		); ?>
	}
	
	function agentesEnVivo(){
		<?php echo CHtml::ajax(
			array(
				'type'=>'POST',
				'dataType'=>'html',
				'async'=>'false',
				'url' => Yii::app()->createUrl('monitoreocampana/default/agentes'),
				'update'=>'#agentes_div',
				'complete'=>"function() {cabecera();}",
			)
		); ?>
	}
	
	function cabecera(){
		<?php echo CHtml::ajax(
			array(
				'type'=>'POST',
				'dataType'=>'html',
				'async'=>'false',
				'url' => Yii::app()->createUrl('monitoreocampana/default/cabecera'),
				'update'=>'#cabecera_div',
				'data' => array(
					'desde' => $desde,	
					'hasta' => $hasta,	
					'cola' => $queue,	
				),
				'complete'=>"function() {colaEnVivo();}",
			)
		); ?>
	}
</script>	
