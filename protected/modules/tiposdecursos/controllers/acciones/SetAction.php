<?php
class SetAction extends CAction
{
    public function run()
    {        
        $model = TipoCurso::model()->findByPk($_POST['TipoCurso']['ID']);//Reemplazar con el modelo que corresponda con el modulo
        
        if(empty($model))
        {
            $model=new TipoCurso; //Reemplazar con el modelo que corresponda con el modulo
        }
        
        
        if(isset($_POST['TipoCurso']))//Reemplazar con el modelo que corresponda con el modulo
        {
            $model->attributes=$_POST['TipoCurso'];//Reemplazar con el modelo que corresponda con el modulo
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
