<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 3 Exercice 8</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 3 Exercice 8</h1>
    <div class="order">
      <p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
    </div>
    <h2>Exercice 8</h2>
      <div class="content">
        <!--Création de la variable initialisé a 200;juqu'a 0; décremente de 12-->
        <p><?php for ($textStart = 200; $textStart >= 0; $textStart -= 12){
            echo 'Enfin !!!!.' . '|';//Affichage
            }?>
        </p>
      </div>
  </body>
</html>
