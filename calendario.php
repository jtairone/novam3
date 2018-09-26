<?php

//echo date('Y');
//$ano = date('Y');
//$mes_ini = date('m');
//$mes_fin = date('m');

function diasmes($ano, $mes){
    
    $diassemana = 7;
    $primeiro_dia_mes = date('d', mktime(0, 0, 0, $mes, 1, $ano));
    $ultimo_dia_mes = date('d', mktime(0, 0, 0, $mes+1, 0, $ano));
    $semana = 0;
    echo "Ano e Mês <br>";
    echo $mes."/", $ano." <br>";
    echo "<br>";
    for($i=0;$i < $ultimo_dia_mes; $i++){
        
        if($semana == 6){
          //  $diasema_num = date('w', strtotime($primeiro_dia_mes+$i));
        //    echo $diasemana_
            echo $primeiro_dia_mes+$i." <br>";
            $semana = 0;
        }else{
            echo $primeiro_dia_mes+$i." ";
            $semana++;
        }
        //$semana++;
        //echo $semana;    
        //echo $primeiro_dia_mes+$i." ";
        
        //echo $primeiro_dia_mes+$i."<br>";
        //echo $primeiro_dia_mes+$i."<br>";
    }
}    

diasmes(2018, 9);

?>