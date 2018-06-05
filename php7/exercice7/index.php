<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 7 Exercice 7</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 7 Exercice 7</h1>
      <div class="order">
        <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>
      </div>
    <h2>Exercice 7</h2>
      <div class="content">
        <?php
        //Si le paramètre existe et qu'il n'est pas nul
           if (isset($_POST) && $_POST!=NULL) {
             //On utilise la boucle foreach pour ajouté le paramètre dans la clé avec sa valeur
           foreach ($_POST as $key => $value) {
             //On affiche la clé avec sa valeur
             echo  $key != 'submit' ? htmlspecialchars($key . ' : ' . $value) : '';
        ?>
        <br/>
        <?php
           }
           //Si le paramètre a bien une valeur alors 
           if (isset($_FILES['file'])) {
               echo 'Votre fichier : ' . $_FILES['file']['name'];
           }
       } else {
           ?>
        <form class="formUser" action="index.php" method="post" enctype="multipart/form-data">
          <select class="userGender" name="choiceGender">
            <option value="Monsieur">Monsieur</option>
            <option value="Madame">Madame</option>
          </select>
          <p><label>Nom : </label><input type="text" name="lastname" placeholder="Votre Nom" /></p>
          <p><label>Prénom : </label><input type="text" name="firstname" placeholder="Votre Prénom" /></p>
          <p><label>Votre fichier : </label><input type="file" name="sendFile" /></p>
          <p><input type="submit" name="envoyer" /></p>
        </form>
        <?php } ?>
      </div>
  </body>
</html>
