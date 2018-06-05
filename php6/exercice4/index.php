<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 6 Exercice 4</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 6 Exercice 4</h1>
      <div class="order">
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?langage=PHP&serveur=LAMP</p>
      </div>
    <h2>Exercice 4</h2>
      <div class="content">
        <!--Création du lien URL-->
        <a href="index.php?langage=PHP&amp;serveur=LAMP">CLIQUEZ</a>
        <p>
            <?php
            //On verifie si les parametre existent avec isset et si c'est le cas on affiche |
            //!empty vérifie que la valeur du paramètre n'est pas vide
              if(isset($_GET['langage']) && isset($_GET['serveur']) && !empty($_GET['langage']) && !empty($_GET['serveur'])){
                echo 'C\'est du ' . $_GET['langage'] . ' qui est interprété par un serveur ' . $_GET['serveur'];
              } else {//Sinon
                echo 'Il manque des informations';
            }?>
        </p>
      </div>
  </body>
</html>
