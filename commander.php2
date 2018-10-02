<?php

  session_start();
?>
<html>
<head>
</head>
<body>

  <?php
    if(isset ($_SESSION['panierTotal']) && $_SESSION['articles'] && $_SESSION['deliveryAddress']  ){
      echo "Voici les valeurs de vos sessions.<br/>";
      echo $_SESSION['panierTotal']."<br/>";
      echo $_SESSION['articles']."<br/>";
      echo $_SESSION['deliveryAddress']."<br/>";
    }else{
      echo "Vous devez d'abord créer la session<br/>";
    }

  ?>
  <a href="index.php">Revenir au formulaire</a>
</body>
</html>
