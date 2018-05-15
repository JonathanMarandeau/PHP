<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 2 Exercice 2</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 2 Exercice 2</h1>
      <h2>Créer une variable IsEasy de type booléan et l'initialiser avec une valeur.
          Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
          Bonus : L'écrire de deux manières différentes.
      </h2>
      <p>
        <?php
        //J'initialise ma variable booléan avec true ou false
          $isEasy = false;
        //Je mets en place les conditions pour l'affichage
        if ($isEasy == true){//ou if ($isEasy),php comprend qu'il faut vérifié true en priorité
          echo 'C\'est facile l\'artiste';
        } else {
          echo 'C\'est difficile Morray';
        }
        ?>
      </p>
  </body>
</html>
