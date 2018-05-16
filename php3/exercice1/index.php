<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 3 Exercice 1</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 3 Exercice 1</h1>
    <div class="order">
      <p>Créer une variable et l'initialiser à 0. Tant que cette variable n'atteint pas 10, il faut :</p>
        <ul>
          <li>l'afficher</li>
          <li>l'incrementer</li>
        </ul>
    </div>
    <h2>Exercice 1</h2>
    <div class="content">
    <!--Création de la variable number initialiser à 0-->
      <p>La variable est initialiser à <?php $number = 0; echo $number; ?></p>
      <p><?php while ($number <= 10) {//Boucle simple avec while dans laquel elle va se répéter jusqu'à atteindre 10
          echo $number . ' ';//Affichage de la boucle
          $number++;//Incrémentation de la boucle en +1
         }?>
      </p>
    </div>
  </body>
</html>
