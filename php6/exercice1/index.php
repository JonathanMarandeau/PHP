<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 6 Exercice 1</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 6 Exercice 1</h1>
      <div class="order">
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean</p>
      </div>
    <h2>Exercice 1</h2>
      <div class="content">
        <!--Création du lien URL-->
        <a href="index.php?nom=Nemare&amp;prenom=Jean">Jean Nemare</a>
        <!--Mise en place de la partie php-->
        <!--FONCTION ISSET (Test si une variable existe)-->
        <!--SI variable nom et prenom existent alors affiche le echo-->
        <?php
              if (isset($_GET['nom']) && isset($_GET['prenom'])){?>
          <p><?='Bonjour, ' . $_GET['prenom'].' '.$_GET['nom'].'!'; ?></p>
        <?php }
              else {?>
            <!--Sinon on affiche un message d'erreur-->
          <p><?='Il manque un nom ou un prénom ou les deux !';?></p>
        <?php } ?>
      </div>
  </body>
</html>
