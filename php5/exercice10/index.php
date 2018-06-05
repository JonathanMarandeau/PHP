<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 5 Exercice 10</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 5 Exercice 10</h1>
      <div class="order">
        <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.</p>
        <p>Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement</p>
      </div>
    <h2>Exercice 10</h2>
      <div class="content">
        <!--Récupération du tableau de l'exercice 5-->
        <?php $hautDeFrance = array ('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas de Calais', '80' => 'Somme'); ?>
        <!--Affichage de toutes les valeurs ainsi que les clés-->
        <p><?php foreach ($hautDeFrance as $numDpt => $nameDpt) {
            echo 'Le département ' . $nameDpt . ' a le numéro ' . $numDpt . ' ';
            } ?></p>
      </div>
  </body>
</html>
