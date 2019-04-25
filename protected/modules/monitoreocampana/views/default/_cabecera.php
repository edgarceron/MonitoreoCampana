<?php
//print_r($llamadasCola);
?>

<table width="100%">
	<tbody>
		<tr>
			<td>
				<?php echo CHtml::label('Total llamadas:', null);?>
			</td>
			<td>
				<?php echo CHtml::label($totalLlamadas, null, array("class"=>"labelData"));?>
			</td>
			<td>
				<?php echo CHtml::label('Llamadas conectadas:', null);?>
			</td>
			<td>
				<?php echo CHtml::label($llamadasConectadas, null, array("class"=>"labelData"));?>
			</td>
			<td>
				<?php echo CHtml::label('Llamadas abandonadas:', null);?>
			</td>
			<td>
				<?php echo CHtml::label($llamadasAbandonadas, null, array("class"=>"labelData"));?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo CHtml::label('Contestadas antes de 20 segundos:', null);?>
			</td>
			<td>
				<?php echo CHtml::label($contestadasAntes, null, array("class"=>"labelData"));?>
			</td>
			<td>
				<?php echo CHtml::label('TMO:', null);?>
			</td>
			<td>
				<?php echo CHtml::label($promedioLlamadas, null, array("class"=>"labelData"));?>
			</td>
			<td>
				<?php echo CHtml::label('Duración maxima de llamada:', null);?>
			</td>
			<td>
				<?php echo CHtml::label($duracionMaxima, null, array("class"=>"labelData"));?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo CHtml::label('Nivel de efectividad:', null);?>
			</td>
			<td>
				<?php echo CHtml::label($efectividad, null, array("class"=>"labelData"));?>
			</td>
			<td>
				<?php echo CHtml::label('Nivel de servicio:', null);?>
			</td>
			<td>
				<?php echo CHtml::label($servicio, null, array("class"=>"labelData"));?>
			</td>
			<td>
				<?php echo CHtml::label('Llamadas capturadas:', null);?>
			</td>
			<td>
				<?php echo CHtml::link($rescatadas, array('rescatadas'));?>
			</td>
		</tr>
	</tbody>
</table>
