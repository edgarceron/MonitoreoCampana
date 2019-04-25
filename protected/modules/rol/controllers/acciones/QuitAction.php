<?php
class QuitAction extends CAction
{
    public function run()
    {        
        $item = $_GET['item'];
        Rol::model()->deleteByPk($item);//Reemplazar Model por Modelo trabajado
        $this->controller->redirect(array('index'));
    }
}
?>

