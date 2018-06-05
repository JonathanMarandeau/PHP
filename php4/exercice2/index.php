<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 4 Exercice 2</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 4 Exercice 2</h1>
      <div class="order">
        <p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
      </div>
    <h2>exercice 2</h2>
    <div class="content">
      <p>
        <?php
        //Je crée une variable de chaine de caractère
        $hello = 'Booonnnnjouuuuurrr Mickaeeeeeeelllll';
        //Je crée ma fonction returnString avec comme paramètre ma variable $string
        function returnString($string){
        //Je demande d'afficher ma variable
        return $string;
        }
        //J'appelle ma fonction
        echo returnString($hello);
        ?>
      </p>
    </div>
  </body>
</html>
