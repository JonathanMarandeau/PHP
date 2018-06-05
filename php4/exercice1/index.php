<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 4 Exercice 1</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 4 Exercice 1</h1>
    <div class="order">
      <p>Faire une fonction qui retourne true.</p>
    </div>
    <h2>Exercice 1</h2>
      <div class="content">
        <p>
          <?php
          //Je crée une fonction returnTrue
            function returnTrue() {
            //Je demande de retourner true
            return true;
          }
            //J'appelle (ou 'j'instancie') ma fonction
            echo returnTrue();
          ?>
        </p>
      </div>
  </body>
</html>
