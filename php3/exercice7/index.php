<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 3 Exercice 7</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 3 Exercice 7</h1>
      <div class="order">
        <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
      </div>
      <h2>Exercice 7</h2>
        <div class="content">
          <!--Création de la variable avec initialisation a 1-->
          <p>La variable est initialisé a : <?php $textStart = 1; echo $textStart; ?></p>
          <p><?php
              while ($textStart <= 100){//Devra aller jusqu'à 100
              echo 'On tient le bon bout.<br />';//Affichage
              $textStart+= 15;//Variable + 15 a chaque boucle
              }?></p>
        </div>
  </body>
</html>
