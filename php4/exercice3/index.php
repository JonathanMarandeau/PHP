<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 4 Exercice 3</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 4 Exercice 3</h1>
      <div class="order">
        <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines</p>
      </div>
    <h2>Exercice 3</h2>
      <div class="content">
        <p>
          <?php
          //Je crée mes deux variables string
          $firstStringText = 'Bonjour Mickael';
          $secondStringText = 'Aurevoir Mickael';
          //Je crée ma fonction returnString avec mes deux variables string comme parametre
          function returnString($firstStringText, $secondStringText){
            echo $firstStringText . ' ' . $secondStringText;
          }
          returnString($firstStringText, $secondStringText);
          ?>
        </p>

      </div>
  </body>
</html>
