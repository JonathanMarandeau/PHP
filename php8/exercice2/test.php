<!--Je fais démarrer la session avant d'écrire le moindre html-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 8 Exercice 2 Test</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="content">
      <p>Re l'artiste, tu t'appelle bien <?= $_SESSION['firstname'] ?> <?= $_SESSION['lastname'] ?>, et tu as <?= $_SESSION['age'] ?> ans</p>
    </div>
  </body>
</html>
<?php 
//Détruit toutes les variables
session_unset();
//Détruit la session
session_destroy();
?>