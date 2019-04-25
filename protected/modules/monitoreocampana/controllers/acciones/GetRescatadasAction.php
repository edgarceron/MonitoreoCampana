<?php
class GetRescatadasAction extends CAction
{
    
    public function run()
    {
		if(isset($_GET['Fecha'])){
			$fecha = $_GET['Fecha'];
		}
        else{
			$fecha = "";
		}
		
		if(isset($_GET['Hasta'])){
			$hasta = $_GET['Hasta'];
		}
        else{
			$hasta = "";
		}
		
		$id_campaign = Opciones::model()->find('Descripcion = "Campaign"')->valor;
		
		$criteria=new CDbCriteria;
		$criteria->compare('id_campaign', $id_campaign);
		if($hasta != null && $fecha != null){
			$criteria->addCondition('fecha_registrada BETWEEN "'.$fecha.'" AND DATE_ADD("'.$hasta.'", INTERVAL 1 DAY)');
		}
		else if($hasta != null){
			$criteria->addCondition('fecha_registrada<= "'.$hasta.'"');
		}
		else if($fecha != null){
			$criteria->addCondition('fecha_registrada > "'.$fecha.'"');
		}
		$criteria->order = 'fecha_registrada DESC';
		$model = new Calls;
		$modelview = new CActiveDataProvider($model, array(
			'criteria'=>$criteria,
		)); 
		
		$this->controller->render(
			'rescatadas',
			array(
				'model' => $modelview,
				'desde' => $fecha,
				'hastafin' => $hasta
			)
		);
	}
}