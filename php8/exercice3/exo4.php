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
          <p><?= $_COOKIE['login']; ?></p>
      </div>
  </body>
</html>


