<?php
class IndexAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {                           
        if(!isset($_GET['item']))
        {
            $model = new TipoCurso;
        }
        else
        {
            $model = TipoCurso::model()->findByPk($_GET['item']);
            if(empty($model))
            {
                $model = new TipoCurso;
            }
        }
    
        
        $modelview=new TipoCurso('search'); //Reemplaze Model por el modelo adecuado para este modulo
        $modelview->unsetAttributes();  // clear any default values
        if(isset($_GET['TipoCurso']))//Reemplaze Model por el modelo adecuado para este modulo
                $modelview->attributes=$_GET['TipoCurso'];//Reemplaze Model por el modelo adecuado para este modulo

        $this->controller->render('index',array(
                'model'=>$model,
                'modelview'=>$modelview,
        ));
    }
}
?>

