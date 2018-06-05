<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 5 Exercice 5</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 5 Exercice 5</h1>
      <div class="order">
        <p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>
      </div>
    <h2>Exercice 5</h2>
      <div class="content">
        <!-- Création d'un tableau associatif-->
        <?php $hautDeFranceList = array ('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas de Calais', '80' => 'Somme');?>
        <!-- print_r pour vérifier que la fonction array est good -->
        <p><?php print_r($hautDeFranceList); ?></p>
      </div>
  </body>
</html>
