<?php
class IndexAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {                           
		$breaks = Breaks::model()->findAll();
        $this->controller->render(
			'index'	
		);
    }
}
?>