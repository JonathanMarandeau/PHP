<?php
//Je déclare mes trois variables nom prenom age
  $lastname = 'Marandeau';
  $firstname = 'Jonathan';
  $age = 25;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 1 Exercice 7</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Php Partie 1 Exercice 7</h1>
    <h2>Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
            Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans".</h2>
          <!--Je concatène les variables a travers une phrase-->
    <p><?php echo 'Bonjour ' . $firstname . ' ' . $lastname . ', tu as ' . $age . ' ans.' ?></p>
  </body>
</html>
