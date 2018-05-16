<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 3 Exercice 8</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 3 Exercice 8</h1>
    <div class="order">
      <p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
    </div>
    <h2>Exercice 8</h2>
      <div class="content">
        <!--Création de la variable initialisé a 200-->
        <p>La variable sera initialisé à : <?php $textStart = 200; echo $textStart; ?></p>
        <p><?php
            while ($textStart >=0){//Boucle jusqu'à 0
            echo 'Enfin !!!!.';//Affichage
            $textStart-= 12;//Variable - 12 à chaque boucle
            }?></p>

      </div>
  </body>
</html>
