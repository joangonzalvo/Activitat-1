<?php
    session_start();
    //Si s'ha afegit un numero, s'executará:
    if(isset($_POST)&&
    !empty($_POST['factor']))
    {
        $array = array();//es crea l'array que mostrará els divisors
        $num=$_POST['factor'];//recull el numero escollit
        $comprobar = $num % 2;
        //comprobem que el numero te al menys un divisor, si en té al menys un s'anirán afegint a l'array, si no en te es mostrará un missatge per indicar-ho.
        
        if($comprobar == 0){
            $array[0]=$num/2;//com hem comprobat que el numero al menys té un divisor, s'afegeix directament aquell numero a l'array
            $i=1;//variable per comprobar el bucle
            
            while ($comprobar == 0){//si el "resto" del numero segueix en 0 (es a dir, que el numero es divisor), es mantindrá el bucle
                $c=$i-1;
                $comprobar = $array[$c] % 2;//comprobar un altre vegada si te divisor
                if($comprobar == 0){//si hi ha un altre divisor s'afegirá a l'array
                    $array[$i]= $array[$c]/2;
                }
                $i++; 
            }
            //var_dump($array); <- per comprobar que s'han afegit bé
            echo "<h3>Els divisors per ".$num." son: <br>";//presenta el resultat si hi ha trobat divisors, en un bucle for per afegir tots els valors trobats.
            for ($y = 0; $y <= $c; $y++) {
                echo " ".$array[$y];
                if($y!=$c){
                    echo ",";
                }else{
                    echo ".</h3>";
                }
            }
            
        }else{//en cas de no trobar divisors afegirá també un missatge.
            echo "<h3>El numero ".$num." no te divisors</h3>";
        }
        
    }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Divisor</title>
  </head>
  <body>
    <h1>Exercici 1 - Divisors</h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
      <p>Numero a buscar divisors: <input type="number" name="factor"></p>
      <input type="submit" name="" value="Calcular">
    </form>

  </body>
</html>
