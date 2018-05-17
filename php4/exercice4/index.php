<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 4 Exercice 4</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 4 Exercice 4</h1>
      <div class="order">
        <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
          <ul>
            <li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
            <li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
            <li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
          </ul>
      </div>
    <h2>Exercice 4</h2>
      <div class="content">
        <p>
          <?php
          //Je crée mes deux variables nombres
          $number1 = 15;
          $number2 = 15;
          //Je crée une fonction returnNumber avec deux paramètres nombre
          function returnNumber($number1, $number2){
            //Si nombre1 plus grand que nombre 2
            if ($number1 > $number2){
              //Alors affiche ça
              echo 'Le premier nombre' . ' ' . $number1 . ' ' . 'est plus grand que le deuxième' . ' ' . $number2;
              //Mais si nombre1 plus petit que nombre2
            } else if ($number1 < $number2){
              //Alors affiche ça
              echo 'le premier nombre' . ' ' . $number1 . ' ' . 'est plus petit que le deuxième' . ' ' . $number2;
              //Sinon (nombre1 = nombre2)
            } else {
              //Affiche ça
              echo 'le premier nombre' . ' ' . $number1 . ' ' . 'est identique au deuxième' . ' ' . $number2;
            }
          }
          returnNumber($number1, $number2);
          ?>
        </p>
      </div>
  </body>
</html>
