<?php

class DefaultController extends Controller
{
        public function beforeAction() 
        {
            
             $acciones = Yii::app()->getController()->actions();
             

                foreach($acciones as $clave => $valor)    
                {
                    $cri_val = new CDbCriteria();
                    $cri_val->compare('modulo', $this->module->id);
                    $cri_val->compare('accion', $clave);
                    $verificar = Acciones::model()->find($cri_val);
                    if(empty($verificar))
                    {
                        $validacion = new Acciones;
                        $validacion->modulo = $this->module->id;
                        $validacion->accion = $clave;
                        $validacion->ruta = $valor;
                        $validacion->save();
                    }                    
                    
                }
                return true;
        }
        
        public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
	
        
	public function actions()
	{
		return array(
			'index'=>'application.modules.'.$this->module->id.'.controllers.acciones.IndexAction', 
			'campaing'=>'application.modules.'.$this->module->id.'.controllers.acciones.CampaingAction', 
			 	
		);
	}
        
    public function accessRules()
	{
		return array(	
                        				
			array('allow', // allow only the owner to perform 'view' 'update' 'delete' actions
                                'actions' => array('index'),
                                'expression' => array(__CLASS__,'allowIndex'),
                            ),      
			array('allow', // allow only the owner to perform 'view' 'update' 'delete' actions
                                'actions' => array('campaing'),
                                'expression' => array(__CLASS__,'allowCampaing'),
                            ), 						
			array('deny',  // deny all users
				'users'=>array('*'),
			),
			
		);
	}
    
	public function init(){
		//load core framework scripts once, but stop them from being loaded later
		//fixes big problem that many jui and related widgets cause
		Yii::app()->clientScript->registerCoreScript('jquery');
		Yii::app()->clientScript->registerCoreScript('jquery.ui');
	} 

    
    public function allowIndex()
	{
            /* //Descomentar esta parte cuando ya hayan agregado el modulo
            if(Yii::app()->user->name != "Guest"){
                $usuario = SofintUsers::model()->findByPk(Yii::app()->user->id);
                $criteria = new CDbCriteria();            
                $modulo = '//aqui va el nombre del modulo//';
                $criteria->compare('perfil', $usuario->perfil);
                $criteria->compare('modulo', $modulo);
                $criteria->compare('accion', 'index');
                $permisos = PerfilContenido::model()->find($criteria);
                if(count($permisos) == 1)
                {
                    $criteria_log = new CDbCriteria();
                    $criteria_log->compare('modulo', $modulo);
                    $criteria_log->compare('accion', 'index'); //Cambiar esto cada ves que lo copie para una accion diferente
                    $accion_log = Acciones::model()->find($criteria_log);
                    $log = new Logs;
                    $log->accion = $accion_log->id;
                    $log->usuario = Yii::app()->user->id;
                    $log->save();
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
            */
            return true;
    }
	
	public function allowCampaing()
	{
            /* //Descomentar esta parte cuando ya hayan agregado el modulo
            if(Yii::app()->user->name != "Guest"){
                $usuario = SofintUsers::model()->findByPk(Yii::app()->user->id);
                $criteria = new CDbCriteria();            
                $modulo = '//aqui va el nombre del modulo//';
                $criteria->compare('perfil', $usuario->perfil);
                $criteria->compare('modulo', $modulo);
                $criteria->compare('accion', 'index');
                $permisos = PerfilContenido::model()->find($criteria);
                if(count($permisos) == 1)
                {
                    $criteria_log = new CDbCriteria();
                    $criteria_log->compare('modulo', $modulo);
                    $criteria_log->compare('accion', 'index'); //Cambiar esto cada ves que lo copie para una accion diferente
                    $accion_log = Acciones::model()->find($criteria_log);
                    $log = new Logs;
                    $log->accion = $accion_log->id;
                    $log->usuario = Yii::app()->user->id;
                    $log->save();
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
            */
            return true;
    }
             
	
}