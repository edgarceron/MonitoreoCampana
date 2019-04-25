<?php
class IndexAction extends CAction
{
    public function run()
    {       
		$fp = fopen(Yii::app()->basePath."/data/config.txt", "r");
		$linea = fgets($fp);
		$datos = explode(';', $linea);
		$servidor = $datos[0];
		$puerto = $datos[1];
		$usuario = $datos[2];
		$contra = $datos[3];

		fclose($fp);
		$this->controller->render('index', 
			array(
				'usuario' => $usuario,
				'puerto' => $puerto,
				'servidor' => $servidor,
				'contra' => $contra,
			)
		);
    }
}
?>