<?php
class IndexAction extends CAction
{
    public function run()
    {        
         $empresa = Empresa::getDatosempresa(1);

                // uncomment the following code to enable ajax-based validation
                /*
                if(isset($_POST['ajax']) && $_POST['ajax']==='sofint-config-_form-form')
                {
                    echo CActiveForm::validate($model);
                    Yii::app()->end();
                }
                */

                if(isset($_POST['Empresa']))
                {
                    $model->attributes=$_POST['Empresa'];
                    if($model->validate())
                    {
                        // form inputs are valid, do something here
                        return;
                    }
                }
               
                
		$this->controller->render('index', array(
                    'empresa'=>$empresa,
                ));
    }
}
?>


