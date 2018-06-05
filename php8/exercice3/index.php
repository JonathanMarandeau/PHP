<?php
//On vérifie que les valeurs sont présentes
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
    <title>PHP Partie 8 Exercice 3</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 8 Exercice 3</h1>
      <div class="order">
        <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.
           A la validation du formulaire, stocker les informations dans un cookie.</p>
      </div>
    <h2>Exercice 3</h2>
      <div class="content">
        <fieldset>
          <h3>Identifiez-vous</h3>
            <form class="userId" action="index.php" method="POST">
              <label for="login">Pseudo : </label><input type="text" name="login" placeholder="Votre pseudo" id="login" required />
              <label for="password">Mot de passe : </label><input type="password" name="password" placeholder="Votre de mot de passe" id="password" required />
              <input type="submit" name="Valider" />
            </form>
        </fieldset>
      </div>
  </body>
</html>
