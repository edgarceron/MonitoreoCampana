<?php
class IndexAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {                           
        if(!isset($_GET['item']))
        {
            $model = new Rol;
        }
        else
        {
            $model = Rol::model()->findByPk($_GET['item']);
            if(empty($model))
            {
                $model = new Rol;
            }
        }
    
        
        $modelview=new Rol('search'); //Reemplaze Model por el modelo adecuado para este modulo
        $modelview->unsetAttributes();  // clear any default values
        if(isset($_GET['Rol']))//Reemplaze Model por el modelo adecuado para este modulo
                $modelview->attributes=$_GET['Rol'];//Reemplaze Model por el modelo adecuado para este modulo

        $this->controller->render('index',array(
                'model'=>$model,
                'modelview'=>$modelview,
        ));
    }
}
?>

