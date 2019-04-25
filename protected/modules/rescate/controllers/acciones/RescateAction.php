<?php
class RescateAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {    
		$criteria = new CDbCriteria;
		$criteria->select = "numero_telefonico, id";
		$criteria->compare('estado', 0);
		$criteria->order = 'numero_telefonico DESC';
		$rescatadas = Rescatadas::model()->findAll($criteria);
		$id_campaign = Opciones::model()->find('Descripcion = "Campaign"')->valor;
		$ultimo = "";
		foreach($rescatadas as $llamada){
			if( strcmp ($llamada->numero_telefonico, $ultimo)){
				$call = new Calls;
				$call->id_campaign = $id_campaign;
				$call->phone = $llamada->numero_telefonico;
				$call->fecha_registrada = date('Y-m-d H:i:s');
				$call->save();
				$call = null;
				$ultimo = $llamada->numero_telefonico;
				//print_r($llamada);
			}
			$model = Rescatadas::model()->findByPk($llamada->id);
			$model->estado = 1;
			$model->save();
			$model = null;
		}
		
		$campaign = Campaign::model()->findByPk($id_campaign);
		$campaign->estatus = 'A';
		$campaign->save();
		
		echo 'Se enviaron las llamadas rescatadas a la campaña';
    }
}
?>