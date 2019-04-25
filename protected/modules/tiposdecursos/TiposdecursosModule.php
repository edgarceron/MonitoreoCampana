<?php

class TiposdecursosModule extends CWebModule
{   
    public $nombre;
    public $modulo;
    public $padre;
    public $desplegable;
    public $version;
	
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'tiposdecursos.models.*',
			'tiposdecursos.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
