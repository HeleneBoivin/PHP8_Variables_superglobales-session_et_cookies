<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// Création des variables de session, pour conserver les infos d'une page à l'autre, dans $_SESSION
$_SESSION['prenom'] = 'Jean';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = '24';
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice2</title>
  <h1>PHP - Partie 8 - Exercice 2</h1>
</head>
<body>
  <p>Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
    Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
    <p>Bonjour, tu es <?php echo htmlspecialchars ( $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' et tu as ' . $_SESSION['age'] . ' ans');?></p>
    <a href="information.php">Lien vers la page information</a>
  </body>
  </html>
