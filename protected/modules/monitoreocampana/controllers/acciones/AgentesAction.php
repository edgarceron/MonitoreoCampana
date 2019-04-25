<?php
class AgentesAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {                           
		$listaAgentes = Agent::agentesActivosArray();
		$informeAgentes = array();
		$acu = array();
		
		foreach($listaAgentes as $agente){
			$criteria=new CDbCriteria;
			$criteria->compare('id_agent',$agente['id']);
			$criteria->order = 'datetime_init DESC';
			$criteria->addCondition('id_break IS NULL');
			$auditoria = Audit::model()->find($criteria);
			
			if(count($auditoria)>0){
				$login_result = Audit::model()->find($criteria)['datetime_end'];
			}
			else{
				$login_result = 'Nunca ha logueado';
			}
			
			if($login_result == null){
				$criteriaDescanso = new CDbCriteria;
				$criteriaDescanso->compare('id_agent',$agente['id']);
				$criteriaDescanso->order = 'datetime_init DESC';
				$criteriaDescanso->addCondition('id_break IS NOT NULL');
				$descanso_result = Audit::model()->find($criteriaDescanso);
				if($descanso_result['datetime_end'] == null){
					$acu = array(
						'Agente' => utf8_decode($agente['name']),
						'Estado' => utf8_decode('En descanso: '.Breaks::model()->findByPk($descanso_result['id_break'])['name']),
						'Núm. Telf.' => '-',
						'Troncal' => '-',
						'Cola' => '-',
					);
					array_push($informeAgentes, $acu);
				}
				else{
					$criteriaLlamadas = new CDbCriteria;
					$criteriaLlamadas->compare('id_agent',$agente['id']);
					$criteriaLlamadas->order = 'datetime_init DESC';
					$llamada = CallEntry::model()->find($criteriaLlamadas);
					if($llamada['status'] == 'terminada'){
						$acu = array(
							'Agente' => utf8_decode($agente['name']),
							'Estado' => 'Libre',
							'Núm. Telf.' => '-',
							'Troncal' => '-',
							'Cola' => '-',
						);
						array_push($informeAgentes, $acu);
					}
					else if($llamada['status'] == 'activa'){
						$acu = array(
							'Agente' => utf8_decode($agente['name']),
							'Estado' => 'Ocupado',
							'Núm. Telf.' => $llamada['callerid'],
							'Troncal' => $llamada['trunk'],
							'Cola' => QueueCallEntry::model()->findByPk($llamada['id_queue_call_entry'])['queue'],
						);
						array_push($informeAgentes, $acu);
					}
					else{
						$acu = array(
							'Agente' => utf8_decode($agente['name']),
							'Estado' => $llamada['status'],
							'Núm. Telf.' => '-',
							'Troncal' => '-',
							'Cola' => '-',
						);
						array_push($informeAgentes, $acu);
					}
					// $acu = array(
						// 'Agente' => $agente['name'],
						// 'Estado' => 'No en descanso',
						// 'Núm. Telf.' => '-',
						// 'Troncal' => '-',
						// 'Cola' => '-',
					// );
					// array_push($informeAgentes, $acu);
					// foreach($listaLlamadas as $llamada){
						// if($llamada['id_agent'] == $agente['id']){
							// if($llamada['status'] == 'activa'){
								// $acu = array(
									// 'Agente' => $agente['name'],
									// 'Estado' => 'Ocupado',
									// 'Núm. Telf.' => $llamada['callerid'],
									// 'Troncal' => $llamada['trunk'],
									// 'Cola' => QueueCallEntry::model()->findByPk($llamada['id_queue_call_entry'])['queue'],
								// );
								// array_push($informeAgentes, $acu);
								// break;
							// }
							// else if($llamada['status'] == 'terminada'){
								// $acu = array(
									// 'Agente' => $agente['name'],
									// 'Estado' => 'En descanso: '.Breaks::model()->findByPk($descanso_result['id_break'])['name'],
									// 'Núm. Telf.' => '-',
									// 'Troncal' => '-',
									// 'Cola' => '-',
								// );
								// array_push($informeAgentes, $acu);
								// break;
							// }
						// }
					// }
				}
			}
			else{
				$acu = array(
					'Agente' =>  utf8_decode($agente['name']),
					'Estado' => 'No logon',
					'Núm. Telf.' => '-',
					'Troncal' => '-',
					'Cola' => '-',
				);
				array_push($informeAgentes, $acu);
			}
		}
		
		$this->controller->renderPartial(
			'_agents',
			array(
				'informeAgentes' => $informeAgentes
			)
		);
    }
}
?>