<!--Démarrage de la session-->
<?php
session_start();
//On vérifie que les valeurs sont présentes
if(isset($_POST['pseudo']) && isset($_POST['password'])){
//Je lance mon premier cookie pour garder le pseudo (nom du cookie,valeur du cookie, durée de rétention du cookie)
setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);
//Cookie pour le mot de passe
setcookie('password', $_POST['password'], time() + 365*24*3600, null, null, false, true);
}?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 8 Exercice 4</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 8 Exercice 4</h1>
      <div class="order">
        <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>
      </div>
    <h2>Exercice 4</h2>
      <div class="content">
        <fieldset>
          <h3>Identifiez-vous</h3>
            <form class="userId" action="idConnect.php" method="post">
              <label>Pseudo : </label><input type="text" name="pseudo" placeholder="Votre pseudo" required /><br />
              <label>Mot de passe : </label><input type="password" name="password" placeholder="Votre de mot de passe" required /><br />
              <input type="submit" name="Valider" />
            </form>
        </fieldset>
      </div>
  </body>
</html>
