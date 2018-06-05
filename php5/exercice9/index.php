<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 5 Exercice 9</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 5 Exercice 9</h1>
      <div class="order">
        <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
      </div>
    <h2>Exercice 9</h2>
      <div class="content">
        <!-- Création d'un tableau associatif-->
        <?php $hautDeFrance = array ('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas de Calais', '80' => 'Somme');?>
        <!--Affichage de toutes les valeurs du tableau-->
        <p><?php print_r($hautDeFrance); ?></p>
      </div>
  </body>
</html>
