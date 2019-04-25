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
?>


<?php 
	$form=$this->beginWidget(
		'CActiveForm', 
		array(
			'id'=>'fecha-_form-form',
			'action'=>Yii::app()->createAbsoluteUrl('ReporteDiario/default/reporte'),
			'enableAjaxValidation'=>false,
			'method'=>'get',
		)
	); 
?>
<table width="100%">
	<tbody>
		<tr>
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

<?php
if(isset($reporte)){
Yii::app()->controller->widget(
	'zii.widgets.grid.CGridView', array(	
		'id'=>'reporte-grid',//Reemplazar Model por el modelo que corresponda
		'dataProvider'=>$reporte,
		'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/bootstrap.min.css'),
		'cssFile' => Yii::app()->baseUrl . '/css/bootstrap.min.css',
		//'data'=>$queue,
		'itemsCssClass' => 'table table-hover table-striped',
		'columns'=>array(
			array(
				'name'=>'referencia',
			),
			array(
				'name'=>'referencia1.descripcion',
			),
			array(
				'name'=>'subtotal',
			),
			array(
				'name'=>'referencia1.costo',
			),
			array(
				'name'=>'referencia1.precio',
			),
			array(
				'name'=>'referencia1.diferencia',
			),
			array(
				'name'=>'Ganancia',
				'value'=>'$data->subtotal * $data->referencia1["diferencia"]',
			),
			
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
		),
	)
);

echo "<br>"; 
echo "Total ganancia: ".number_format($total, 0, ",", ".");
echo "<br>"; 
echo "Total venta: ".number_format($totalVenta, 0, ",", ".");
echo "<br>"; 
echo "Descuentos: ".number_format($descuentos, 0, ",", ".");
}

//print_r($parray);
?>
						