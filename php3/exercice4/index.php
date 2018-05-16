<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 3 Exercice 4</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 3 Exercice 4</h1>
      <div class="order">
        <p>Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10, il faut :</p>
          <ul>
            <li>l'afficher</li>
            <li>l'incrementer de la moitié de sa valeur</li>
          </ul>
      </div>
    <h2>Exercice 4</h2>
      <div class="content">
        <!--Création de la variable et initialisation a 1-->
        <p>La variable est initialisé à <?php $number = 1; echo $number; ?></p>
        <p>
          <?php
            while ($number <= 10){//Boucle de la variable jusqu'à 10
              echo $number . '|';//Affichage de la variable
              $number+= $number/2;//Variable + variable/2
          }?>
        </p>
      </div>
  </body>
</html>
