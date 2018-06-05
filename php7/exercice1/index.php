<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 7 Exercice 1</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 7 Exercice 1</h1>
      <div class="order">
        <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
      </div>
    <h2>Exercice 1</h2>
    <div class="content">
      <!--Création du formulaire User avec la method GET-->
      <form class="formUser" action="user.php" method="GET">
        <p><label>Nom : </label><input type="text" name="lastname" placeholder="Votre Nom" /></p>
        <p><label>Prénom : </label><input type="text" name="firstname" placeholder="Votre prénom" /></p>
        <p><input type="submit" name="envoyer" /></p>
      </form>
    </div>
  </body>
</html>
