<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 8 Exercice 1</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 8 Exercice 1</h1>
      <div class="order">
        <p>Faire une page HTML permettant de donner à l'utilisateur :</p>
        <ul>
          <li>son User Agent</li>
          <li>son adresse ip</li>
          <li>le nom du serveur</li>
        </ul>
      </div>
    <h2>Exercice 1</h2>
      <div class="content">
        <p>Votre User Agent est : <br />
            <?php echo $_SERVER['HTTP_USER_AGENT']; ?><br />
            Votre adresse IP est : 
            <?php echo $_SERVER['REMOTE_ADDR']; ?><br />
            Le nom de votre serveur est : 
            <?php echo $_SERVER['SERVER_NAME'] ?></p>
      </div>
  </body>
</html>
