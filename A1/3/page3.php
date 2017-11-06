<?php
    session_start();
    
    $total=$_SESSION['quantity'];
    //variables per comprobar les caixes utilitzades, etc.
    $util=0;
    $repetides=0;
    $array = array();//array per afegir els valors emprats
    for($i=1;$i<=$total;$i++){
        $valorCaixa=$_SESSION['caixa'][$i];
        if($valorCaixa!=='null')//en cas de que en la caixa hi hagi un numero emprat, s'afegirá a l'array i contabilitzará en la variable de caixes utilitzades.
            {
            $array[$util]=$_SESSION['caixa'][$i];
            $util++;
            }
    }
    //var_dump($array);
    //comprobar si hi ha numeros repetits:
    for($i=0;$i<$util;$i++){
        $caixaActual=$array[$i];//caixa que es comprobará en aquest moment
        $cont=0;
        $flagRepetida=0;//variable que indica si s'ha trobat repetició
        while ($cont!=$util){//bucle per comprobar tots els numeros de l'array
            if($flagRepetida==0){//en cas de que no s'hagi comprobat encara si está repetit o no:
                if($cont!=$i){//<- Per que no comprobi la mateixa caixa de l'array, si no tots contarien com repetits per comprobarse a si mateixes.
                    $caixaComprobar=$array[$cont];
                    if($caixaComprobar==$caixaActual){//en cas de que hi hagi un altre numero similar:
                        $repetides++;//contabilitza que aquest numero está repetit
                        $flagRepetida=1;//indica que esta repetit, així que no ho comprobará més.
                    }
                    
                }
                
            }
                
                $cont++;
            }
        
    }
    if($repetides > 0){
        $repeText = "Hi ha un total de $repetides numeros repetits";
    }else{
        $repeText = "No hi ha numeros repetits";
    }
    echo "<h3>S'han emplenat un total de $util caixes de $total. $repeText.</h3>"
    
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Repetits</title>
  </head>
  <body>
    

  </body>
</html>
