<?php
class IndexAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {                           
		//$modelCdr = new Cdr;
		$modelAgents = new Agent;
		$modelCampaign = new CampaignEntry;
		
		$this->controller->render(
			'index',
			array(
				'campaigns'=>$modelCampaign,
				//'calls'=>$modelCallsEntry,
				//'agents'=>$modelAgents,
				//'cdr'=>$modelCdr,
			)
		);
    }
}
?>