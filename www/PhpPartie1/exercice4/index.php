<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 1 Exercice 4</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
        Les afficher.</h1>
        <!--Variable type string-->
        <?php
          $name = 'je m\'appelle jonathan';
          echo $name;
        ?><br />
        <!--Variable de type int-->
        <?php
          $age = 25;
          echo $age;
        ?><br />
        <!--Variable de type float-->
        <?php
          $weight = 85.4;
          echo $weight;
        ?><br />
        <!--Variable de type booléan-->
        <?php
          $imChinese = false;
          echo $imChinese;
        ?>
  </body>
</html>
