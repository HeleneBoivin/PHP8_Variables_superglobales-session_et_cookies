<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice4</title>
  <h1>PHP - Partie 8 - Exercice 4</h1>
</head>
<body>
  <h3>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.</h3>
  <p>Je me souviens de toi !</p>
  <p>Login : <?php echo htmlspecialchars ($_COOKIE['login'])?></p>
  <p>Passe : <?php echo htmlspecialchars ($_COOKIE['password'])?></p>
  </body>
</html>
