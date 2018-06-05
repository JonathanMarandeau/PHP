<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 5 Exercice 6</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 5 Exercice 6</h1>
      <div class="order">
        <p>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>
      </div>
    <h2>Exercice 6</h2>
      <div class="content">
        <!--Création du tableau associatif hautDeFrance-->
        <?php $hautDeFrance = array ('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas de Calais', '80' => 'Somme');?>
        <!--Affichage de l'index 59-->
        <p><?php echo $hautDeFrance['59']; ?></p>
      </div>
  </body>
</html>
