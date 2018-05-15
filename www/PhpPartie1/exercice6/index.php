<?php
  $name = 'Jonathan';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 1 Exercice 6</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Créer une variable nom et l'initialiser avec la valeur de votre choix.
        Afficher : "Bonjour" + nom + ", comment vas tu ?".</h1>
    <p><?= 'Bonjour ' . $name . ', comment vas tu ?';?></p>
</html>
