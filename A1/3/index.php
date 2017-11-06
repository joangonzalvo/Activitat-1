<?php
    session_start();
    if(isset($_POST)&&
    !empty($_POST['quantity']))//<- evita que s'executi sense afegir res.
    {
        $_SESSION['quantity']=htmlspecialchars($_POST['quantity']);//afegim la quantitat de caixes que l'usuari vol, amb la variable de sessio
        header('Location: page2.php');//reenviem a la pagina 2
        //echo "<h3>".$_SESSION['quantity']."</h3>"; <- comprobar que s'ha afegit bé a la variable de sessio
        
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
    <h1>Exercici 3 - Nombres repetits</h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
      <p>Numero a buscar caixes de text:  <input type="number" name="quantity" min="1" max="10"></p>
      <input type="submit" name="" value="Calcular">
    </form>

  </body>
</html>
