<?php
class QuitAction extends CAction
{
    public function run()
    {        
        $item = $_GET['item'];
        TipoCurso::model()->deleteByPk($item);//Reemplazar Model por Modelo trabajado
        $this->controller->redirect(array('index'));
    }
}
?>

