<html>
<head>
</head>
<body>
  <?php

    if(isset($_POST['login']) && isset($_POST['password'])){
      $login = $_POST['login'];
      $password = $_POST['password'];

      if($login === "admin" && $password === "mot_de_passe_secure"){
        echo "Bienvenu super admin.<br/>";
        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/Hnj_EMDUfjY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br/>';
        echo '<a href="index.php">Revenir au formulaire</a>';
      }else{
        echo "Login ou password incorrect.<br/>";
        echo '<a href="index.php">Revenir au formulaire</a>';
      }
    }else{
      echo "Vous n'avez pas rempli tous les champs.<br/>";
      echo '<a href="index.php">Revenir au formulaire</a>';
    }

  ?>
</body>
</html>
