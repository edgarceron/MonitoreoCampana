<?php
class AgenteAction extends CAction
{
    public function run()
    {        
        $model = Audit::model()->findAll('id_agent ='.$_GET['id']);//Reemplazar con el modelo que corresponda con el modulo
		$nombre = Agent::model()->find('id ='.$_GET['id'])->name;
		$modelview = new Audit();
		
        $this->controller->render('agente',array(
                'modelview'=>$modelview,
				'nombre'=>$nombre,
				'id'=>$_GET['id'],
				'fecha'=>'"'.$_GET['fecha'].'"',
				'hasta'=>'"'.$_GET['hasta'].'"',
        ));
    }
}
?>