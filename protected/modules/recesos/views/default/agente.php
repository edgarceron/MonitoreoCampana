<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
        $this->module->nombre,
);

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
							<td valign="middle" colspan="2" class="moduleTitle">&nbsp;&nbsp;<img border="0" align="absmiddle" src="<?php echo Yii::app()->request->baseUrl.'/images/list.png' ?>">&nbsp;&nbsp;Recesos del agente <?php echo $nombre ?></td>
						</tr>
						<tr>
							<td>
							

		

								<div class="panel panel-default">
									<div class="panel-body">
										<div class="col-lg-12 container">
											<?php $this->widget(
												'zii.widgets.grid.CGridView', array(	
													'id'=>'recesos-grid',//Reemplazar Model por el modelo que corresponda
													'dataProvider'=>$modelview->searchAgentBreaks($fecha, $id, $hasta),
													'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/bootstrap.min.css'),
													'cssFile' => Yii::app()->baseUrl . '/css/bootstrap.min.css',
													'itemsCssClass' => 'table table-hover table-striped',
													'columns'=>array(
														array(
															'name'=>'Receso',
															'value'=>'Breaks::model()->findByPk($data->id_break)->name',
															'type'=>'raw',
														),
														'datetime_init',
														'datetime_end',
														'duration',
													),
												)
											); ?>    
										</div>
									</div>
								</div>							




							
							</td>
						</tr>
						</tbody>
				</table>
			</td>
		</tr>		
	</tbody>
</table>


