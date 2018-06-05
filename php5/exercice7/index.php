<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 5 Exercice 7</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 5 Exercice 7</h1>
      <div class="order">
        <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
      </div>
    <h2>Exercice 7</h2>
      <div class="content">
        <!--Création du tableau associatif hautDeFrance-->
        <?php $hautDeFrance = array ('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas de Calais', '80' => 'Somme');?>
        <!--Rajout d'une ligne dans le tableau avec le numero et le nom du departement-->
        <p><?php $hautDeFrance['51'] = 'Marne'; ?></p>
      </div>
  </body>
</html>
