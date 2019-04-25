<?php
// SELECT a.calldate, a.src, ja.agent, ja.event, a.channel FROM cdr as a LEFT JOIN queue_log as ja ON ( a.uniqueid = ja.callid ) 
 // WHERE a.calldate >= "2016-08-19 15:11:54"
 
// Yii::import('zii.widgets.grid.CGridView');
 
// class SpecialGridView extends CGridView {
    // public $data;
// }
 
// $agentes = new Agent;
// Yii::app()->controller->widget(
	// 'SpecialGridView', array(	
		// 'id'=>'agentes-grid',//Reemplazar Model por el modelo que corresponda
		// 'dataProvider'=>$agentes->agentesActivos(),
		// 'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/bootstrap.min.css'),
		// 'cssFile' => Yii::app()->baseUrl . '/css/bootstrap.min.css',
		// 'data'=>$queue,
		// 'itemsCssClass' => 'table table-hover table-striped',
		// 'columns'=>array(
			// array(
				// 'name'=>'Agente',
				// 'value'=>'"Agente/".$data->number',
				// 'type'=>'raw',
			// ),
			// array(
				// 'name'=>'Estado',
				// 'value'=>'Cdr::estadoAgente(Cdr::ultimoEventoAgente($data->number,Cdr::datosQueue())[0])',
				// 'type'=>'raw',
			// ),
			// array(
				// 'name'=>'Telefono',
				// 'value'=>'Cdr::telefono(Cdr::ultimoEventoAgente($data->number,Cdr::datosQueue())[0],
										// Cdr::ultimoEventoAgente($data->number,Cdr::datosQueue())[1],
										// Cdr::cola())',
				// 'type'=>'raw',
			// ),
			// array(
				// 'name'=>'Troncal',
				// 'value'=>'Cdr::ultimoEventoAgente($data->number,Cdr::datosQueue())[2]',
				// 'type'=>'raw',
			// ),
			// array(
				// 'name'=>'Desde',
				// 'value'=>'Cdr::tiempoLlamadaAgente($data->number,Cdr::datosQueue())',
				// 'type'=>'raw',
			// ),
			
		// ),
	// )
// ); 
//print_r($informeAgentes);

?>

<?php if (count($informeAgentes) > 0): ?>
<table class="table table-hover table-striped">
	<thead class = "tituloTabla">
		<tr>
			<th class="tituloTablath"><?php echo implode('</th><th class= "tituloTablath">', array_keys(current($informeAgentes))); ?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($informeAgentes as $row): array_map('htmlentities', $row); ?>
		<tr>
			<td><?php echo implode('</td><td>', $row); ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php endif; ?>