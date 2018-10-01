<html>
<head>
</head>
<body>

  <h1>Exercices de PHP</h1>

  <h3>Exercice 1 : Punition en php</h3>

  <p>
    Voici une petite application qui vous permettra de ne plus vous fatiguer à écrire des punitions.
    Il vous suffit d'entreer votre nom/prenom, le texte à écrire et le nombre de fois qu'il faudra le répéter.
  </p>
  <form action="punition.php" method="GET">
    Entrez votre nom : <br/><input type="text" name="nom" /><br/>
    Entrez votre prenom : <br/><input type="text" name="prenom" /><br/>
    Phrase de la punition : <br/><textarea name="punition"></textarea><br/>
    Nombre de fois : <br/><input type="text" name="repetition" /><br/><br/>
    <input type="submit" text="valider"/>
  </form>

  <hr/>

  <h3>Exercice 2 : login verification php</h3>

  <p>
    Faites une page PHP qui controle que le login / password est correct.<br/>
    Login = admin, password : mot_de_passe_secure<br/>
    Ne pas faire transiter le password dans l'URL.<br/>
    La page devra affiché une vidéo youtube si le login / password est correct et un lien pour revenir en arrière.<br/>
    Si le login / password est incorrect, afficher un un gros message d'erreur et rediriger automatiquement vers la page d'acceuil.<br/>
  </p>
  <form action="login.php" method="POST">
    Entrez votre login : <br/><input type="text" name="login" /><br/>
    Entrez votre password : <br/><input type="password" name="password" /><br/>
    <input type="submit" text="valider"/>
  </form>

  <hr/>

  <h3>Exercice 3 : Créer une session </h3>

  <p>
    Créer trois pages <br/>
    <ol>
      <li>une qui s'appelle <a href="./createSession.php">createSession.php</a></li>
      <li>une qui s'appelle <a href="./commander.php">commander.php</a></li>
      <li>une qui s'appelle <a href="./deconnexion.php">deconnexion.php</a></li>
    </ol>

    Dans la page createSession, il faudra initier une session php et stocker 3 variables de session.<br/>
    <ol>
      <li>panierTotal qui vaudra <strong>50</strong></li>
      <li>articles qui vaudra <strong>10 Kebabs</strong></li>
      <li>deliveryAddress qui vaudra <strong>10 avenue du père noël, Groënland</strong></li>
    </ol>
    Une fois initialiser, proposer un lien pour revenir vers la page principale.
    Dans la page commander, il suffira de récuperer les variables de session et de les afficher proprement comme si j'allais commander sur un site comme Amazon.<br/>
    Dans la page deconnexion, il faudra détruire la session actuelle et proposer de revenir à la page principale.
  </p>

</body>
</html>
