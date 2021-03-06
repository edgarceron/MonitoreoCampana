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
				'agente'=>'application.modules.'.$this->module->id.'.controllers.acciones.AgenteAction',
				'lista'=>'application.modules.'.$this->module->id.'.controllers.acciones.ListaAction',
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
                                'actions' => array('agente'),
                                'expression' => array(__CLASS__,'allowAgente'),
							),
			array('allow', // allow only the owner to perform 'view' 'update' 'delete' actions
                                'actions' => array('lista'),
                                'expression' => array(__CLASS__,'allowLista'),					
							),
                           
			array('deny',  // deny all users
				'users'=>array('*'),
			),		
		);
	}
        
    public function allowIndex()
	{
		
            //Descomentar esta parte cuando ya hayan agregado el modulo
            /* $usuario = SofintUsers::model()->findByPk(Yii::app()->user->id);
            $criteria = new CDbCriteria();            
            $modulo = 'recesos';
            $criteria->compare('perfil', $usuario->perfil);
            $criteria->compare('modulo', $modulo);
            $criteria->compare('accion', 'index');
            $permisos = PerfilContenido::model()->find($criteria);
            if(count($permisos) == 1)
            {
                return true;
            }
            else
            {
                return false;
            } */
            return true;
    }
	
	public function allowAgente()
	{
		
            //Descomentar esta parte cuando ya hayan agregado el modulo
            /* $usuario = SofintUsers::model()->findByPk(Yii::app()->user->id);
            $criteria = new CDbCriteria();            
            $modulo = 'recesos';
            $criteria->compare('perfil', $usuario->perfil);
            $criteria->compare('modulo', $modulo);
            $criteria->compare('accion', 'agente');
            $permisos = PerfilContenido::model()->find($criteria);
            if(count($permisos) == 1)
            {
                return true;
            }
            else
            {
                return false;
            } */
            return true;
    }
	
	public function allowLista()
	{
		
            //Descomentar esta parte cuando ya hayan agregado el modulo
            /* $usuario = SofintUsers::model()->findByPk(Yii::app()->user->id);
            $criteria = new CDbCriteria();            
            $modulo = 'recesos';
            $criteria->compare('perfil', $usuario->perfil);
            $criteria->compare('modulo', $modulo);
            $criteria->compare('accion', 'lista');
            $permisos = PerfilContenido::model()->find($criteria);
            if(count($permisos) == 1)
            {
                return true;
            }
            else
            {
                return false;
            } */
            return true;
    }
}