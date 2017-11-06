<?php
    session_start();
    
    //recollir els valors de les caixes en session
    if(isset($_POST)&&
    !empty($_POST['caixa1']))
    {
        //$_SESSION['']=htmlspecialchars($_POST['']);
        $caixes2=$_SESSION['quantity'];
        for($i=1;$i<=$caixes2;$i++)
        {
            $numCaixa='caixa'.$i;
            if(!empty($_POST[$numCaixa])){
                $_SESSION['caixa'][$i]=htmlspecialchars($_POST[$numCaixa]);//Recull dintre de la variable de sessio 'caixa' com un array per cada numero emprat.
            }
            else{
                $_SESSION['caixa'][$i]="null";//En cas de que no hi hagi ningún valor, es posará null.
            }
            
        }
        //echo $_SESSION['caixa'][2]; //<- per comprobar que recull bé les variables.
        header('Location: page3.php');//reenviem a la pagina 3
        
        
    }
    
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Repetits</title>
  </head>
  <body>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">  
    <table style="width:100%">  
    
        <?php

        $flag=0;
        //afegeixo una variable "bandera" per que no repeteixi la creació de la taula.
            if($flag==0){
                $flag=1;
                $caixes=$_SESSION['quantity'];//variable que recull el numero de caixes que vol l'usuari i que utilitzarem per imprimir les caixes.
                for($i=1;$i<=$caixes;$i++){
                    echo "<tr><th><p><input type='number' name='caixa$i'></p></th></tr>";
                }


            }
        ?>
      <tr><th><input type="submit" name="" value="Enviar"></th></tr>
      
      </table>
        </form>
    

  </body>
</html>
