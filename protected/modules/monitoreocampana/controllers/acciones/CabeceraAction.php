<?php
class CabeceraAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run(){   
		$desde = $_POST['desde'];
		$hasta = $_POST['hasta'];
		$campaign = $_POST['cola'];
		$model = new CallEntry;
		
		$llamadasConectadas = $this->llamadasConectadas($model, $campaign, $desde, $hasta);
		$llamadasAbandonadas = $this->llamadasAbandonadas($model, $campaign, $desde, $hasta);
		$contestadasAntes = $this->contestadasAntes($model, $campaign, $desde, $hasta);
		$duracionMaxima = $this->duracionMaxima($model, $campaign, $desde, $hasta);
		$promedioLlamadas = $this->promedioLlamadas($model, $campaign, $desde, $hasta); 
		$totalLlamadas = ($llamadasAbandonadas + $llamadasConectadas);
		$rescatadas = $this->getRescatadas();
		if($totalLlamadas > 0){
			$efectividad = round($llamadasConectadas/$totalLlamadas * 100, 2);
		}
		else{
			$efectividad = 'No aplica';
		}
		
		if($llamadasConectadas > 0){
			$servicio = round($contestadasAntes/$llamadasConectadas * 100, 5);
		}
		else{
			$servicio = 'No aplica';
		}
		
		$this->controller->renderPartial(
			'_cabecera',
			array(
				'totalLlamadas' => $totalLlamadas,
				'promedioLlamadas' => $promedioLlamadas,
				'duracionMaxima' => $duracionMaxima,
				'llamadasAbandonadas' => $llamadasAbandonadas,
				'llamadasConectadas' => $llamadasConectadas,
				'contestadasAntes' => $contestadasAntes,
				'efectividad' => $efectividad.'%',
				'servicio' => $servicio.'%',	
				'rescatadas' => $rescatadas,
			)
		);
    }
	
	function llamadasConectadas($model, $campaign, $desde, $hasta){
		$criteriaBase = new CDbCriteria;
		if($campaign != 0) $criteriaBase->compare('id_queue_call_entry', $campaign);
		$criteriaBase->addCondition('datetime_entry_queue BETWEEN "'.$desde.'" AND DATE_ADD("'.$hasta.'", INTERVAL 1 DAY)');
		$criteriaBase->compare('status', 'terminada');
		$criteriaBase->select = 'count(*) as cuenta';
		return $model->find($criteriaBase)['cuenta'];
	}
	
	function llamadasAbandonadas($model, $campaign, $desde, $hasta){
		$criteriaBase = new CDbCriteria;
		if($campaign != 0) $criteriaBase->compare('id_queue_call_entry', $campaign);
		$criteriaBase->addCondition('datetime_entry_queue BETWEEN "'.$desde.'" AND DATE_ADD("'.$hasta.'", INTERVAL 1 DAY)');
		$criteriaBase->compare('status', 'abandonada');
		$criteriaBase->select = 'count(*) as cuenta';
		return $model->find($criteriaBase)['cuenta'];
	}
	
	function contestadasAntes($model, $campaign, $desde, $hasta){
		$criteriaBase = new CDbCriteria;
		if($campaign != 0) $criteriaBase->compare('id_queue_call_entry', $campaign);
		$criteriaBase->addCondition('datetime_entry_queue BETWEEN "'.$desde.'" AND DATE_ADD("'.$hasta.'", INTERVAL 1 DAY)');
		$criteriaBase->compare('status', 'terminada');
		$criteriaBase->compare('duration_wait', '<= 20');
		$criteriaBase->select = 'count(*) as cuenta';
		return $model->find($criteriaBase)['cuenta'];
	}
	
	function duracionMaxima( $model, $campaign, $desde, $hasta){
		$criteriaBase = new CDbCriteria;
		if($campaign != 0) $criteriaBase->compare('id_queue_call_entry', $campaign);
		$criteriaBase->addCondition('datetime_entry_queue BETWEEN "'.$desde.'" AND DATE_ADD("'.$hasta.'", INTERVAL 1 DAY)');
		$criteriaBase->select = 'MAX(duration) as cuenta';
		return $this->conversorSegundosHoras($model->find($criteriaBase)['cuenta']);
	}
	
	function promedioLlamadas($model, $campaign, $desde, $hasta){
		$criteriaBase = new CDbCriteria;
		if($campaign != 0) $criteriaBase->compare('id_queue_call_entry', $campaign);
		$criteriaBase->addCondition('datetime_entry_queue BETWEEN "'.$desde.'" AND DATE_ADD("'.$hasta.'", INTERVAL 1 DAY)');
		$criteriaBase->compare('status', 'terminada');
		$criteriaBase->select = '(SUM(duration)/COUNT(*)) as cuenta';
		return $this->conversorSegundosHoras($model->find($criteriaBase)['cuenta']);
	}
	
	function conversorSegundosHoras($tiempo_en_segundos) {
		$horas = floor($tiempo_en_segundos / 3600);
		$minutos = floor(($tiempo_en_segundos - ($horas * 3600)) / 60);
		$segundos = $tiempo_en_segundos - ($horas * 3600) - ($minutos * 60);
	 
		$hora_texto = "";
		if ($horas > 0 ) {
			$hora_texto .= $horas . ":";
		}
	 
		if ($minutos > 0 ) {
			if($minutos < 10){
				$hora_texto .= '0'.$minutos . ":";
			}
			else{
				$hora_texto .= $minutos . ":";
			}
		}
	 
		if ($segundos > 0 ) {
			if($segundos < 10){
				$hora_texto .= '0'.intval($segundos) . "";
			}
			else{
				$hora_texto .= intval($segundos) . "";
			}
		}
	 
		return $hora_texto;
	}
	
	function getRescatadas(){
		//$rescatadas = Rescatadas::model()->findAll('estado = 0');
		$id_campaign = Opciones::model()->find('Descripcion = "Campaign"')->valor;
		$criteria = new CDbCriteria;
		$criteria->addCondition('status is null');
		$criteria->compare('id_campaign', $id_campaign);
		$rescatadas = Calls::model()->findAll($criteria);
		return count($rescatadas);
	}	
}
?>