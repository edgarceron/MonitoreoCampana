<?php
class CampaingAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {            
        if(isset($_POST['FechaInicio']) && isset($_POST['FechaFin'])){
			$perdidas = Asterisk::getPerdidas($_POST['FechaInicio'],$_POST['FechaFin']);
		}
		
		if(isset($perdidas)){
			Asterisk::insertCalls($perdidas, $_POST['Cola']);
			$this->controller->redirect(array('index'));
		}
    }
}
?>