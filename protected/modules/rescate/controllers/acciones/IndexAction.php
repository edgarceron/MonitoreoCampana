<?php
class IndexAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {                           
		$model = Opciones::model()->find();
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