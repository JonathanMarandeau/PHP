<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 5 Exercice 4</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 5 Exercice 4</h1>
      <div class="order">
        <p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
      </div>
    <h2>Exercice 4</h2>
      <div class="content">
        <!--Je crée un tableau mois-->
        <?php $months = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'); ?>
        <!--Je récupère la ligne où il y'a aout pour la modifier en août-->
        <?php $months[7] = 'août'; ?>
        <!--J'affiche le tableau avec la boucle foreach-->
        <p><?php foreach ($months as $month) {
          echo $month . ' ';
        }?></p>
      </div>
  </body>
</html>
