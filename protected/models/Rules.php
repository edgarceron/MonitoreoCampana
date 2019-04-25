<?php 
/*
 * Created By Juan Manuel Ruiz Lozano Grupo Ingenieros Solutions 2016
 * http://www.grupoingsolutions.com
 * 
Todas las reglas deben conservar este patron
 * public function RuleExample($customer, $city, $people, $children, $package, $nationality, $payment, $date){                     
        $salida = "";
        return $salida;
    }
 * siempre debe tener esos parametros de entrada y un solo parametro de salida (no array)
 * 
 * licencia MIT
*/
class Rules{
   
    public function Rule1($customer, $city, $people, $children, $package, $nationality, $payment, $date){
        
        $salida = "";
        /*$package_contenido = PaquetesContenido::model()->findAll('id_paquete = '.$package);
        
        foreach($package_contenido as $packinfo)
        {
            
        }*/
        
        if($payment == 1 && $city == "Brisbane" && $people == 1){
            $salida = 190;
        }
        else{
            $salida = 150;
        }
            
        
        return $salida;
    }
   
     
}

?>