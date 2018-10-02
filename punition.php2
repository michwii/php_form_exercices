<html>
<head>
</head>
<body>
  <?php

    if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['punition']) && isset($_GET['repetition'])){
      $nom = $_GET['nom'];
      $prenom = $_GET['prenom'];
      $punition = $_GET['punition'];
      $repetition = $_GET['repetition'];

      echo strtoupper($nom) . " ";
      echo $prenom . "<br/>";

      for($i = 0; $i < $repetition; $i++){
        echo $punition . "<br/>";
      }
    }else if ($repetition < 0){
      echo "On ne peut pas avoir de valeur négative pour le nombre de répétition.<br/>";
      echo '<a href="index.php">Revenir au formulaire</a>';
    }else{
      echo "Vous n'avez pas rempli tous les champs.<br/>";
      echo '<a href="index.php">Revenir au formulaire</a>';
    }

  ?>
</body>
</html>
