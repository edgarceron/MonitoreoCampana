<?php
class SetAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {                     
		$opciones = $_POST['Opciones'];
		$model = Opciones::model()->findByPk($opciones['opcion']);
		$model->attributes = $opciones;
		$model->save();
		$criteria = new CDbCriteria();
		$criteria->select = 'id, name';
		$campaigns = Campaign::model()->findAll();
		$campaignList = array();
		foreach($campaigns as $campaign){
			$campaignList[$campaign->id] = $campaign->name;
		}
        $this->controller->render(
			'OpcionesForm', array('model' => $model, 'campaignList' => $campaignList)
		);
    }
}
?>