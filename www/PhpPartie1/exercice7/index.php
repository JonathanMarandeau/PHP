<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 1 Exercice 7</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Php Partie 1 Exercice 7</h1>
        <h2>Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
            Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans".</h2>
        <?php
        //Je déclare mes trois variables nom prenom age
          $lastName = 'Marandeau';
          $firstName = 'Jonathan';
          $age = 25;
          //Je concatène les variables a travers une phrase
          echo 'Bonjour ' . $firstName . ' ' . $lastName . ', tu as ' . $age . ' ans.'?>
  </body>
</html>
