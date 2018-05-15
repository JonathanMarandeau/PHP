<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 2 Exercice 6</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 2 Exercice 6</h1>
      <h2>Traduire ce code avec des if et des else :
          &lt;?php
            echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
          ?&gt;
      </h2>
      <!--Si tu as 18 ou plus tu es majeur sinon mineur-->
    <p>
      <?php
      //Variable age initialisé a 18
        $age = 18;
        if ($age >= 18)//Si tu as 18 ou plus
        {
          echo 'Tu es majeur moussaillon !';
        }
        else //Sinon 
        {
          echo 'Prend des épinards, puis attends de grandir petit !';
        }
      ?>
    </p>
  </body>
</html>
