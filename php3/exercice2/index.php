<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 3 Exercice 2</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 3 Exercice 2</h1>
      <div class="order">
        <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris entre 1 et 100. Tant que la première variable n'est pas supérieur à 20 :</p>
          <ul>
            <li>multiplier la première variable avec la deuxième</li>
            <li>afficher le résultat</li>
            <li>incrementer la première variable</li>
          </ul>
      </div>
    <h2>Exercice 2</h2>
      <div class="content">
        <!--Création des deux variables avec initialisation-->
        <p>Les deux variable sont <?php $number1 = 0; echo $number1 . ' '; $number2 = 7; echo $number2 ?></p>
        <p>
          <?php
            while ($number1 <= 20){//Boucle de la variable1 jusqu'à 20
            echo $number1 * $number2 . ' ';//Multiplication des deux variables
            $number1++;//Incrémentation de la variable number1 de +1
          }
          ?>
        </p>
      </div>
  </body>
</html>
