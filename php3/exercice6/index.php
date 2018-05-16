<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 3 Exercice 6</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 3 Exercice 6</h1>
      <div class="order">
        <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
      </div>
    <h2>Exercice 6</h2>
    <div class="content">
      <!--Création de la variable et de son initialistation-->
        <p>La variable commence à : <?php $textStart = 20; echo $textStart; ?></p>
        <p><?php
            while ($textStart >=0){
            echo 'c\'est presque bon.<br />';
            $textStart--;
            }?></p>
    </div>
  </body>
</html>
