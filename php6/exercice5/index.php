<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 6 Exercice 5</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 6 Exercice 5</h1>
      <div class="order">
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?semaine=12</p>
      </div>
    <h2>Exercice 5</h2>
      <div class="content">
        <!--Création du lien URL-->
        <a href="index.php?semaine=12">CLIQUEZ</a>
        <p><?php
        //SI le paramètre existe alors
            if(isset($_GET['semaine'])){
              echo 'Nous sommes en semaine ' . $_GET['semaine'];
            }else {
              echo 'La donnée n\'est pas renseignée';
            }?>
        </p>
      </div>
  </body>
</html>
