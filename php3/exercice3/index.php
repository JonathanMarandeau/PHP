<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 3 Exercice 3</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 3 Exercice 3</h1>
      <div class="order">
        <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris entre 1 et 100. Tant que la première variable n'est pas inférieur ou égale à 10 :</p>
          <ul>
            <li>multiplier la première variable avec la deuxième</li>
            <li>afficher le résultat</li>
            <li>décrémenter la première variable</li>
          </ul>
      </div>
      <h2>Exercice 3</h2>
        <div class="content">
          <!--Création des deux variables avec initialisation-->
          <p>Les deux variables sont : <?php $number1 = 100; echo $number1 . ' '; $number2 = 2; echo $number2; ?></p>
          <p>
            <?php
              while ($number1 >=10){//Boucle de la variable jusqu'à arriver a 10
              echo $number1 * $number2 . ' ';//Multiplication des deux variables
              $number1--;//Décrémentation de -1
            }?>
          </p>
        </div>
  </body>
</html>
