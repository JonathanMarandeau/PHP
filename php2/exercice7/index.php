<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 2 Exercice 7</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 2 Exercice 7</h1>
      <h2>Traduire ce code avec des if et des else :
           &lt;?php
            echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
          ?&gt;
      </h2>
      <p>
      <!--Si la variable est égale a faux alors c'est bon sinon non -->
      <?php
      //Création de la variable
        $bouncer = 'true';
        if ($bouncer == 'false')
        {
          echo 'C\'est pas bon faut des filles !';
        }
        else
        {
          echo 'C\'est ok amusez-vous bien les artistes !';
        }
      ?>
      </p>
  </body>
</html>
