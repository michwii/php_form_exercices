<?php

  session_start();

  $_SESSION['panierTotal'] = 50;
  $_SESSION['articles'] = '10 Kebab';
  $_SESSION['deliveryAddress'] = '10 avenue du père noël, Groënland';

?>
<html>
<head>
</head>
<body>
  Vos variables de session ont bien été créées.<br/>
  <a href="index.php">Revenir au formulaire</a>
</body>
</html>
