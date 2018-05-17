<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 4 Exercice 6</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 4 Exercice 6</h1>
      <div class="order">
        <p>Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme :</p>
        <p>"Bonjour" + nom + prenom + ",tu as" + age + "ans".</p>
      </div>
    <h2>Exercice 6</h2>
      <div class="content">
        <p>
        <?php
        //Création de mes 3 variables
        $lastname = 'Marandeau';
        $firstname = 'Jonathan';
        $age = 25;
        //Création de la function qui retourne mes variables
        function returnThisString($lastname, $firstname, $age){
          return 'Bonjour ' . $firstname . ' ' . $lastname . ',' . ' tu as ' . $age . ' ans';
        }
        echo returnThisString($lastname, $firstname, $age);
        ?>
      </p>
      </div>
  </body>
</html>
