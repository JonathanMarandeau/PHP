<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 1 Exercice 2</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  </head>
  <body>
    <h1>Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher leur contenu.</h1>
    <!--Mise en place du php-->
    <p><?php
    //Je déclare mes 3 variables
      $lastName = 'Volvic';
      $firstName = 'Jojo';
      $age = 25;
      //J'affiche les variables a travers un texte
      echo "Monsieur $firstName qui a pour surnom $lastName est agé de $age ans.";
      //OU
      echo 'Monsieur ' . $firstName . ' qui a pour surnom' . $lastName . ' est agé de ' . $age . ' ans';
     ?></p>
  </body>
</html>
