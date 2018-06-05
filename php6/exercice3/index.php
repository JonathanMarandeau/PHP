<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 6 Exercice 3</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 6 Exercice 3</h1>
      <div class="order">
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016</p>
      </div>
    <h2>Exercice 3</h2>
      <div class="content">
        <!--Création du liens URL-->
        <a href="index.php?dateDebut=2/05/2016&amp;dateFin=27/11/2016">Date</a>
        <!--Vérification des paramètres si ils existent et on les affiches-->
        <p>
            <?php
            if(isset($_GET['dateDebut']) && isset($_GET['dateFin'])){
              echo 'Le stage aura lieu du ' . $_GET['dateDebut'] . ' au ' . $_GET['dateFin'];
            } else {
              echo 'Il faut renseigner les dates';
            }?>
        </p>
      </div>
  </body>
</html>
