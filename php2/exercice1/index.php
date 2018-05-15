<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 2 Exercice 1</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>PHP Partie 2 Exercice 1</h1>
      <h2>Créer une variable age et l'initialiser avec une valeur.
          Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.
      </h2>
      <!--Je crée une variable age et je l'initialise avec 25-->
      <p>
        <?php
          $age = 25;
          //Je mets en place ma condition pour afficher une phrase en fonction de l'âge
          if ($age <= 18)
          {
            echo "Tu es mineur tchio père ! Va faire tes devoirs !";
          }
          else
          {
            echo "Tu es un majeur vacciné l'artiste chapeau bas !";
          }
        ?>
      </p>
  </body>
</html>
