<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 3 Exercice 6</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 3 Exercice 6</h1>
      <div class="order">
        <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
      </div>
    <h2>Exercice 6</h2>
    <div class="content">
      <!--Création de la variable et de son initialistation; jusqu'a 0; décrémente de 1-->
        <p><?php for ($textStart = 20; $textStart >= 0; $textStart--){
            echo 'c\'est presque bon.' . '|';//Affichage
            }?>
        </p>
    </div>
  </body>
</html>
