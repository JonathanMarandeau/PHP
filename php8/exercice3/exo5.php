<?php
//Je vérifie que les valeurs sont bien présentes
if(!empty($_POST['login']) && !empty($_POST['password'])){
//Je lance mon premier cookie pour garder le pseudo (nom du cookie,valeur du cookie, durée de rétention du cookie)
setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
//Cookie pour le mot de passe
setcookie('password', $_POST['password'], time() + 365*24*3600, null, null, false, true);
}?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 8 Exercice 5</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 8 Exercice 5</h1>
      <div class="order">
        <p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
      </div>
    <h2>Exercice 5</h2>
      <div class="content">
          <fieldset>
          <h3>Identifiez-vous</h3>
            <form class="userId" action="exo5.php" method="POST">
              <label for="login">Pseudo : </label><input type="text" name="login" placeholder="Votre pseudo" id="login" required />
              <label for="password">Mot de passe : </label><input type="password" name="password" placeholder="Votre de mot de passe" id="password" required />
              <input type="submit" name="Valider" />
            </form>
          <?= $_COOKIE['login']; ?>
        </fieldset>
      </div>
  </body>
</html>
