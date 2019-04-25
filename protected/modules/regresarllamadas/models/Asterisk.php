<?php
class Asterisk{
    public function conectar(){
		$host="localhost";
		$user="root";
		$password="CLINICASIGMA..admin64107";
		$db="asteriskcdrdb";
		$link=mysql_connect($host,$user,$password) or die(mysql_error());
		mysql_select_db($db,$link);	
	} 
	
	public function getTroncales(){
		//$this->conectar();
		$host="localhost";
		$user="root";
		$password="";//"CLINICASIGMA..admin64107";
		$db="asteriskcdrdb";
		$link=mysql_connect($host,$user,$password) or die(mysql_error());
		mysql_select_db($db,$link);	
		$consulta = "SELECT a.trunkid, a.tech,a.channelid from asterisk.trunks as a";
		$resultado = mysql_query($consulta);
		$rows = [];
		if (!$resultado) {
			die('Consulta no válida: '. mysql_error());
		}		
		while($row = mysql_fetch_assoc($resultado))
		{
			$rows[$row['trunkid']] = $row['tech']."/".$row['channelid'];
		}
        return $rows;

    }

	public function getCampaign(){
		//$this->conectar();
		$host="localhost";
		$user="root";
		$password="";//"CLINICASIGMA..admin64107";
		$db="call_center";
		$link=mysql_connect($host,$user,$password) or die(mysql_error());
		mysql_select_db($db,$link);	
		$consulta = "SELECT a.name,a.id from call_center.campaign as a";
		$resultado = mysql_query($consulta);
		$rows = [];
		while($row = mysql_fetch_assoc($resultado))
		{
			$rows[$row['id']] = $row['name'];
		}
        return $rows;
    }
	
	public function getPerdidas($fecha_ini,$fecha_fin){
		//$this->conectar();
		$host="localhost";
		$user="root";
		$password="";//"CLINICASIGMA..admin64107";
		$db="asteriskcbrbd";
		$link=mysql_connect($host,$user,$password) or die(mysql_error());
		$conecto = mysql_select_db($db,$link);
		
		$consulta = "SELECT a.src FROM cdr as a
				LEFT JOIN asteriskcbrbd.queue_log as ja ON ( a.uniqueid = ja.callid
				AND ja.event
				IN ('BANDON',  'COMPLETEAGENT',  'COMPLETECALLER',  'EXITWITHTIMEOUT',  'ENTERQUEUE') ) 
				WHERE ja.event IS NOT NULL 
				AND CAST( a.calldate AS DATE ) >=  '".$fecha_ini."'
				AND CAST( a.calldate AS DATE ) <=  '".$fecha_fin."'";
		$gestor = fopen(Yii::app()->basePath."fichero.txt", "w");
		
		
		$resultado = mysql_query($consulta);
		if (!$resultado) {
			die('Consulta no válida: '. mysql_error());
		}		
		$rows = [];
		while($row = mysql_fetch_assoc($resultado))
		{
			$rows[] = $row['src'];
			$fwrite = fwrite($gestor,"".$row['src']."-");
		}
		fclose($gestor);
        return $rows;
    }
	
	public function insertCalls($numeros, $campaing){
		//$this->conectar();
		$host="localhost";
		$user="root";
		$password="";//"CLINICASIGMA..admin64107";
		$db="call_center";
		$link=mysql_connect($host,$user,$password) or die(mysql_error());
		mysql_select_db($db,$link);	
		$i = 0;
		for($i;$i < count($numeros);$i++){
			$consulta = "INSERT INTO call_center.calls (id_campaign, phone, dnc) VALUES (".$campaing.",".$numeros[$i].",0)";
			$resultado = mysql_query($consulta);
			if (!$resultado) {
				die('Consulta no válida: '. mysql_error());
			}
		}
    }	
}
?>