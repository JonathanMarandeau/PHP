<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 1 Exercice 8</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie Exercice 8</h1>
      <h2>Créer 3 variables.
          Dans la première mettre le résultat de l'opération 3 + 4.
          Dans la deuxième mettre le résultat de l'opération 5 * 20.
          Dans la troisième mettre le résultat de l'opération 45 / 5.
          Afficher le contenu des variables
      </h2>
      <!--Je declare mes variables d'opération-->
      <?php
        $firstCalculation = 3 + 4;
        $secondCalculation = 5 * 20;
        $thirdCalculation = 45 / 5;
      ?>
      <p><?php echo 'Résultat Première Opération : ' . $firstCalculation . ' Résultat Seconde Opération : ' . $secondCalculation . ' Résultat Troisième Opération : ' . $thirdCalculation; ?></p>
  </body>
</html>
