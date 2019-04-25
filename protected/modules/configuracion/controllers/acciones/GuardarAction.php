<?php
class GuardarAction extends CAction
{
    public function run()
    {       
		$fp = fopen(Yii::app()->basePath."/data/config.txt", "r");
		
		$servidor = $_POST['servidor'];
		$puerto = $_POST['puerto'];
		$usuario = $_POST['usuario'];
		$contra = $_POST['contra'];
		
		fputs($fp,$servidor.";".$puerto.";".$usuario.";".$contra);
		fclose($fp);
		$this->controller->render('index', 
			array(
				'usuario' => $usuario,
				'puerto' => $puerto,
				'servidor' => $servidor,
				'contra' => $contra,
				'mensaje' => 'Guardado exitosamente', 
			)
		);
    }
}
?>