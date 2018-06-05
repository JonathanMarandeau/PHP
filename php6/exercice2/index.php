<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 6 Exercice 2</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 6 Exercice 2</h1>
      <div class="order">
        <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean</p>
      </div>
    <h2>Exercice 2</h2>
      <div class="content">
        <!--Création du lien URL avec rajout de l'age-->
        <a href="index.php?nom=Nemare&amp;prenom=Jean">Jean Nemare</a>
        <!--Vérification du paramètre age et l'afficher si il existe-->
        <p><?php
            if(isset($_GET['age'])){//Si la variable age existe alors
              echo 'Tu as ' . $_GET['age'] . '.';
            } else {//Sinon
              echo 'Il faut mettre un age !';
            }?>
        </p>
      </div>
  </body>
</html>
