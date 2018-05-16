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
        <!--Création de la variable,initialisé a 1-->
        <p>La variable de départ sera : <?php $textStart = 1; echo $textStart?></p>
        <p><?php while ($textStart <= 15){//Boucle de la variable jusqu'à 15
            echo 'On y arrive presque.<br />';//Affichage
            $textStart++;//Incrémentation de la variable +1
            }?>
        </p>
      </div>
  </body>
</html>
