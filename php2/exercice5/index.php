<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 2 Exercice 5</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 2 Exercice 5</h1>
      <h2>Traduire ce code avec des if et des else :
          &lt;?php
            echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
          ?&gt;
      </h2>
      <!--Ce qui veut dire si la variable est différente de homme alors c'est une developpeuse sinon un developpeur-->
      <p>
      <?php
      //Création de la variable genre
        $gender = 'femme';
        if ($gender != 'homme')//Si gender est différent de homme alors
        {
          echo 'C\'est une développeuse !!!';
        }
        else//Sinon
        {
          echo 'C\'est un développeur !!!';
        }
      ?>
      </p>
  </body>
</html>
