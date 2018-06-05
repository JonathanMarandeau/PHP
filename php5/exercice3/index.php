<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 5 Exercice 3</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 5 Exercice 3</h1>
      <div class="order">
        <p>Avec le tableau de l'exercice , afficher la valeur de l'index 5.</p>
      </div>
    <h2>Exercice 3</h2>
      <div class="content">
        <!--Je crée un tableau mois-->
        <?php $months = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'); ?>
        <!--J'affiche la ligne 6 du tableau-->
        <p><?php echo $months[5]; ?></p>
      </div>
  </body>
</html>
