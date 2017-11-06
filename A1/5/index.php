<?php
    session_start();
    //echo 'Hello ' . htmlspecialchars($_GET["pag"]) . '!';//per comprobar
    //^ al fer http://localhost/php.dev/A1/5/index.php?pag=1 imprimeix per pantalla Hello 1!, ya hem recollit el numero, només fa falta redireccionar.
    

     if(isset($_GET["pag"])){//en cas de que obtingui una pagina, redireccionará a aquella página.
         $pagina=htmlspecialchars($_GET["pag"]); //<- per evitar que ens posin codi, afegim htmlspecialchars.
         header('Location: src/'.$pagina.'.php');
     }else{//en cas de que no s'hagi indicat ninguna página, redireccionará al fitxer d'error 404.
         header('Location: src/404.php');
     }
    
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Navegador!</title>
  </head>
  <body>

  </body>
</html>
