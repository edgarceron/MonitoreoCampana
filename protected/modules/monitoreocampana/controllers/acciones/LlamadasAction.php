<?php
class LlamadasAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {                           
		$llamadasCola = $this->llamadasCola();
		$this->controller->renderPartial(
			'_calls',
			array(
				//'campaigns'=>$modelCampaign,
				//'calls'=>$modelCallsEntry,
				//'agents'=>$modelAgents,
				//'cdr'=>$modelCdr,
				'llamadasCola' => $llamadasCola 
			)
		);
    }
	
	
	/*
	 *@return static con la informacion de las llamadas en cola actualmente */
	private function llamadasCola(){
		$modelCalls = new CallEntry;
		$criteria=new CDbCriteria;
		$criteria->select = array('id','id_agent','id_queue_call_entry','callerid','datetime_entry_queue','status', 'trunk', 'uniqueid');
		$criteria->compare('status','en-cola');
		$llamadasCola = $modelCalls->findAll($criteria);
		
		$reporte = array();
		$acu = array();
		foreach($llamadasCola as $llamada){
			
			$criteria=new CDbCriteria;
			$criteria->compare('uniqueid', $llamada['uniqueid']);
			$criteria->order = 'id DESC';
			$ultimo_registro = $modelCalls->find($criteria);
			if(!($ultimo_registro['id'] == $llamada['id']) || strlen($llamada['callerid']) < 3){
				continue;
			}
			
			$llamada['status'] = 'En cola';
			$cola = QueueCallEntry::model()->findByPk($llamada['id_queue_call_entry'])['queue'];
			$datetime1 = new DateTime($llamada['datetime_entry_queue']);
			$datetime2 = new DateTime($this->horaServidor());
			$interval = $datetime1->diff($datetime2);
			if($interval->format('%H') > 1 || $interval->format('%D') > 1){
				continue;
			}
			$acu = array(
				"Estado" => $llamada['status'],
				"Num. Telf." => $llamada['callerid'],
				"Troncal" => $llamada['trunk'],
				"Desde" => $interval->format('%H:%I:%S'),
				"Cola" => $cola, 
			);
			array_push($reporte, $acu);
		}
		if($reporte == array()){
			$reporte = array(
				array(
					"Estado" => '',
					"Num. Telf." => '',
					"Troncal" => '',
					"Desde" => '',
					"Cola" => '', 
				)
			);
		}
		return $reporte;		
	}	
	
	public function horaServidor(){
		$criteria=new CDbCriteria;
		$criteria->select = 'UTC_TIME() as cuenta';
		$tiempo = CallEntry::model()->find($criteria)['cuenta'];
	}
}
?>