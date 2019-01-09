<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice1</title>
  <h1>PHP - Partie 8 - Exercice 1</h1>
</head>
<body>
  <b style="font-size:15px">Faire une page HTML permettant de donner à l'utilisateur : </b>
  <ul>

  </ul>
  <li>son User Agent</li>
  <li>son adresse ip</li>
  <li>le nom du serveur</li>
</ul>
<!-- $_SERVER est une variable d'environnement qui est accessible partout -->
<!-- adresse ip du client -->
<h3>Adresse ip</h3>
<p><?php echo $_SERVER['REMOTE_ADDR']?></p>
<!-- User Agent du client -->
<h3>User Agent</h3>
<p><?php echo $_SERVER['HTTP_USER_AGENT']?></p>
<!-- Nom de serveur -->
<h3>Nom du serveur</h3>
<p><?php echo $_SERVER['SERVER_NAME']?></p>
</body>
</html>
