<?php
class ListaAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {                           
		$modelview = new Agent();
		$modelview->unsetAttributes(); //Limpica los valores por defecto 
		$breaks = Breaks::model()->findAll();
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
		$this->controller->render(
			'index',
			array(
				'modelview' => $modelview,
				'breaks'=> $breaks,
				'fecha'=>'"'.$fecha.'"',
				'hasta'=>$hasta,
			)		
		);
    }
}
?>