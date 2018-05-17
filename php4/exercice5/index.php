<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 4 Exercice 5</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 4 Exercice 5</h1>
      <div class="order">
        <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
      </div>
    <h2>Exercice 5</h2>
      <div class="content">
        <p>
          <?php
          //Création d'une variable nombre et d'une variable string
          $number = 15;
          $string = ' est un nombre porte bonheur (sisi c\'est vrai !).';
          //Création de la fonction avec les deux paramètres
          function returnStringNumber($number, $string){
            //On renvoi a l'affichage la concaténation des deux variables
            return $number . $string;
          }
          //J'affiche la fonction
          echo returnStringNumber($number, $string);
          ?>
        </p>
      </div>
  </body>
</html>
