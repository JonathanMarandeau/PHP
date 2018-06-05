<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 8 Exercice 4</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Que contient le cookie ?</h1>
      <div class="content">
        <p>Votre identifiant de connexion est <?php echo $_COOKIE['pseudo']; ?>.</p>
        <p>Votre mot de passe est <?php echo $_COOKIE['password']; ?>, ne le perdez pas !</p>
      </div>
  </body>
</html>
