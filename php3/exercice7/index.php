<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 3 Exercice 7</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 3 Exercice 7</h1>
      <div class="order">
        <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
      </div>
      <h2>Exercice 7</h2>
        <div class="content">
          <!--Création de la variable avec initialisation a 1;jusqu'a 100; incrémente +15-->
          <p><?php for ($textStart = 1; $textStart <= 100; $textStart += 15){//Devra aller jusqu'à 100
              echo 'On tient le bon bout.' . '|';//Affichage
              }?>
          </p>
        </div>
  </body>
</html>
