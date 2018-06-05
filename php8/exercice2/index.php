<!--Je fais démarrer la session avant d'écrire le moindre html-->
<?php
session_start();
//Je crée des variables de session pour faire le test
$_SESSION['lastname'] = 'Marandeau';
$_SESSION['firstname'] = 'Jonathan';
$_SESSION['age'] = '25';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 8 Exercice 2</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 8 Exercice 2</h1>
      <div class="order">
        <p>
            Sur la page index, faire un liens vers une autre page.
            Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions.
            Ces variables auront été définies directement dans le code.
            Il faudra afficher le contenu de ces variables sur la deuxième page.
        </p>
      </div>
    <h2>Exercice 2</h2>
      <div class="content">
        <p>Salut <?php echo $_SESSION['firstname']; ?></p><br />
        <p>Tu es à l'accueil de ce superbe site. Visite donc l'autre page !</p>
        <p><a href="test.php">Test</a></p>
      </div>
  </body>
</html>
<?php 
//Fermeture de la session
session_write_close();
?>