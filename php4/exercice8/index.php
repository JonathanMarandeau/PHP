<?php
  //Création de la fonction de calcul de la somme des trois paramètres avec valeur de paramètre par defaut
  function returnCalcul($number1 = 15, $number2 = 10, $number3 = 7){
    //Création de la variable result qui est la somme des trois variable
    $result = $number1 + $number2 + $number3;
    //Renvoi le resultat
    return 'Le résultat est : ' . $result;
  }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 4 Exercice 8</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 4 Exercice 8</h1>
      <div class="order">
        <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres. Tous les paramètres doivent avoir une valeur par défaut.</p>
      </div>
    <h2>Exercice 8</h2>
      <div class="content">
        <p><?php echo returnCalcul(); ?></p>
      </div>
  </body>
</html>
