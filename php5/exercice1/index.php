<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 5 Exercice 1</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 5 Exercice 1</h1>
      <div class="order">
        <p>Créer un tableau mois et l'initialiser avec les valeurs suivantes :</p>
        <ul>
          <li>janvier</li>
          <li>février</li>
          <li>mars</li>
          <li>avril</li>
          <li>mai</li>
          <li>juin</li>
          <li>juillet</li>
          <li>aout</li>
          <li>septembre</li>
          <li>octobre</li>
          <li>novembre</li>
          <li>décembre</li>
        </ul>
      </div>
    <h2>Exercice 1</h2>
      <div class="content">
        <p>
          <?php
          //Je crée un tableau mois
          $months = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
          //Foreach va passer en revue chaque ligne du tableau, et lors de chaque passage, elle va mettre la valeur de cette ligne dans une variable temporaire ($months)
          foreach ($months as $month) {
            //Affichage de chaque ligne du tableau
            echo $month . ' ';
          }
          ?>
        </p>
      </div>
  </body>
</html>
