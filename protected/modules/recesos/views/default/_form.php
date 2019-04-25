<?php
$gridCollums = 	array(
					array(
						'name'=>'name',
						'value'=>'CHtml::link(
							utf8_decode($data->name),array(
								"agente", 
								"id"=>"".$data->id,
								"fecha"=>'.$fecha.',
								"hasta"=>"'.$hastafin.'",
								)
						)',
						'type'=>'raw',
						'footer'=>'Total',
					)
				);

foreach($breaks as $b){

	$b['name'] = utf8_decode($b['name']);
	if($b['name']!=null){
		array_push(
			$gridCollums, 
			array(
				'name'=>''.$b['name'],
				'value'=>'Audit::getBreaks(intval($data->id),'.$b['id'].','.$fecha.', "'. $hastafin .'")',
				'footer'=>''.Audit::totalBreaks($b['id'], $fecha, $hastafin),
			)
		);
	}
} 

?>

<div class="panel-body">
	<div class="col-lg-12 container">
		<?php Yii::app()->controller->widget(
			'zii.widgets.grid.CGridView', array(	
				'id'=>'recesos-grid',//Reemplazar Model por el modelo que corresponda
				'dataProvider'=>$modelview->agentesActivos(),
				'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/bootstrap.min.css'),
				'cssFile' => Yii::app()->baseUrl . '/css/bootstrap.min.css',
				'itemsCssClass' => 'table table-hover table-striped',
				'columns'=>$gridCollums,
			)
		); ?>    
	</div>
</div>