<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 6 Exercice 6</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 6 Exercice 6</h1>
      <div class="order">
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?batiment=12&salle=101</p>
      </div>
    <h2>Exercice 6</h2>
      <div class="content">
        <!--Création du lien URL-->
        <a href="index.php?batiment=12&salle=101">CLIQUEZ</a>
        <?php
        //SI les paramètres existent alors
            if(isset($_GET['batiment']) && isset($_GET['salle'])){?>
              <p><?= 'J\'ai cours dans le batiment ' . $_GET['batiment'] . ' dans la salle numéro ' . $_GET['salle'];?></p>
            <?php } ?>
      </div>
  </body>
</html>
