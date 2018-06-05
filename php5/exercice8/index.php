<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 5 Exercice 8</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 5 Exercice 8</h1>
      <div class="order">
        <p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
      </div>
    <h2>Exercice 8</h2>
    <div class="content">
      <!--Reprise tu tableau de l'exercice 1-->
      <?php $monthsList = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'); ?>
      <!--Affichage du tableau avec la boucle foreach-->
      <p><?php foreach ($monthsList as $month){
            echo $month . ' ';
        }?>
      </p>
    </div>
  </body>
</html>
