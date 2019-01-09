<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
setcookie('login', $_POST['login'], time() + 365*24*3600, '/', null, false, true);  // '/' permet d'être accessible sur tout le Vhost
setcookie('password', $_POST['passe'], time() + 365*24*3600, '/', null, false, true);
// SYNTHAX => setcookie(name,value,expire,path,domain,secure,httponly); name is required, others are optional. !!! SETCOOKIE DOIT TJS ÊTRE PLACE AVANT LE HTML !!!
// les trois premiers paramètres sont: 'nom', 'valeur', 'date d'expiration du cookie (sous forme de timestamp) = fonction 'time() + 365*24*3600 veut dire timestamp actuel $ + $ nombre de secondes dans une année' ici le cookie sera supprimé dans une année
// l'option httpOnly sécurise le cookie, le dernier paramètre 'true' permet d'activer le mode httpOnly sur le cookie, en diminuant risque de vol du cookie du visiteur => cookie inaccessible en JavaScript sur tous les navigateurs qui supportent cette option au cas où oubli d'utiliser htmlspecialchars
// nous utilisons la valeur par défaut pour le chemin du serveur sur lequel le serveur est accessible, c’est à dire la valeur / qui signifie que le cookie sera accessible dans tous les dossiers d’un certain domaine.
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice3</title>
  <h1>PHP - Partie 8 - Exercice 5</h1>
</head>
<body>
  <b style="font-size:15px">Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</b>
<form method="POST">
  <p><label>Login : <input type="text" name="login" value="" placeholder="Entrez votre identifiant"/></label></p>
  <p><label>Mot de passe : <input type="password" name="passe" value="" placeholder="Entrez votre mot de passe"/></label></p>
<input type="submit" name="valider" value="Valider">
<p>Login : <?php echo htmlspecialchars($_COOKIE['login']);?></p>
<p>Passe : <?php echo htmlspecialchars($_COOKIE['password']);?></p>
</form>
  </body>
</html>
