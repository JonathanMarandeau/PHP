<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 7 Exercice 6</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 7 Exercice 6</h1>
      <div class="order">
        <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET,
           le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être.
           Dans le cas contraire, c'est l'inverse.</p>
        <p>Utiliser qu'une seule page.</p>
      </div>
    <h2>Exercice 6</h2>
      <div class="content">
        <?php
        //Si le paramètre existe et qu'il n'est pas nul
           if (isset($_POST) && $_POST!=NULL) {
             //On utilise la boucle foreach pour ajouté le paramètre dans la clé avec sa valeur
           foreach ($_POST as $key => $value) {
             //On affiche la clé avec sa valeur
             echo htmlspecialchars($key . ' : ' . $value);
        ?>
        <br/>
        <?php
          }
        } else {//Sinon 
             ?>
        <form class="formUser" action="index.php" method="post">
          <select class="userGender" name="choiceGender">
            <option value="Monsieur">Monsieur</option>
            <option value="Madame">Madame</option>
          </select>
          <p><label>Nom : </label><input type="text" name="lastname" placeholder="Votre Nom" /></p>
          <p><label>Prénom : </label><input type="text" name="firstname" placeholder="Votre Prénom" /></p>
          <p><input type="submit" name="envoyer" /></p>
        </form>
        <?php } ?>
      </div>
  </body>
</html>
