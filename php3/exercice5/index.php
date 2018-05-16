<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 3 Exercice 5</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 3 Exercice 5</h1>
      <div class="order">
        <p>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</p>
      </div>
    <h2>Exercice 5</h2>
      <div class="content">
        <!--Boucle de la variable initialisé a 1, jusqu'a 15, s'incrémente de +1-->
        <p><?php for ($textStart = 1; $textStart <= 15; $textStart++){
            echo 'On y arrive presque.' . '|';//Affichage
            }?>
        </p>
      </div>
  </body>
</html>
