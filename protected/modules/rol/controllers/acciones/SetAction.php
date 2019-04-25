<?php
class SetAction extends CAction
{
    public function run()
    {        
        $model = Rol::model()->findByPk($_POST['Rol']['id']);//Reemplazar con el modelo que corresponda con el modulo
        
        if(empty($model))
        {
            $model=new Rol; //Reemplazar con el modelo que corresponda con el modulo
        }
        
        
        if(isset($_POST['Rol']))//Reemplazar con el modelo que corresponda con el modulo
        {
            $model->attributes=$_POST['Rol'];//Reemplazar con el modelo que corresponda con el modulo
            if($model->validate())
            {
                if($model->save())
                    {
                        $this->controller->redirect(array('index'));
                    }
            }
        }
    }
}
?>
