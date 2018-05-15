<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 2 Exercice 3</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 2 Exercice 3</h1>
      <h2>
        Créer deux variables age et genre. La variable genre peut prendre comme valeur :

          Homme
          Femme

          En fonction de l'âge et du genre afficher la phrase correspondante :

          Vous êtes un homme et vous êtes majeur
          Vous êtes un homme et vous êtes mineur
          Vous êtes une femme et vous êtes majeur
          Vous êtes une femme et vous êtes mineur

          Gérer tous les cas.
      </h2>
      <p>
        <?php
          //Création des deux variables age et genre
          $age = 16;
          $gender = 'femme';
          //Je crée les différentes conditions d'affichage
          if ($age < 18 && $gender == 'homme'){//Si inférieur a 18 ET(&&) homme alors
            echo 'Vous êtes un homme et vous êtes mineur';
          } else if ($age < 18 && $gender != 'homme'){//Si inférieur a 18 ET(&&) Différent de homme alors
            echo 'Vous êtes une femme et vous êtes mineur';
          } else if ($age >= 18 && $gender == 'homme'){//Si supérieur ou égal a 18 ET(&&) homme alors
            echo 'Vous êtes un homme et vous êtes majeur';
          } else {//Sinon
            echo 'Vous êtes une femme et vous êtes majeur';
          }
        ?>
      </p>
  </body>
</html>
