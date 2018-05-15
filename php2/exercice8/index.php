<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 2 Exercice 8</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 2 Exercice 8</h1>
    <h2>Traduire ce code avec des if et des else :
      &lt;?php
      echo ($maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!';
      ?&gt;
    </h2>
    <p>
      <?php
        $itsOk = false;
        if ($itsOk){
        echo 'C\'est ok !!';
        } else {
          echo 'C\'est pas bon !!!';
        }
      ?>
    </p>
  </body>
</html>
