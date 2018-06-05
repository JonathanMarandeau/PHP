<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 5 Exercice 2</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 5 Exercice 2</h1>
      <div class="order">
        <p>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.</p>
      </div>
    <h2>Exercice 2</h2>
      <div class="content">
        <!--Je crée un tableau mois-->
        <?php $months = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'); ?>
        <!--J'affiche la 3 ligne du tableau-->
        <p><?php echo $months[2]; ?></p>
      </div>
  </body>
</html>
