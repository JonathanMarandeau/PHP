<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 7 Exercice 5</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 7 Exercice 5</h1>
      <div class="order">
        <p>Créer un formulaire sur la page index.php avec :</p>
          <ul>
            <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
            <li>Un champ texte pour le nom</li>
            <li>Un champ texte pour le prénom</li>
          </ul>
        <p>Ce formulaire doit rediriger vers la page index.php. Vous avez le choix de la méthode.</p>
      </div>
    <h2>Exercice 5</h2>
      <div class="content">
        <!--Création du formulaire-->
        <form class="formUser" action="index.php" method="POST">
          <!--Liste déroulante avec deux choix possible-->
          <select class="userGender" name="choiceGender">
            <option value="0">Monsieur</option>
            <option value="1">Madame</option>
          </select>
          <!--Les inputs nom et prénom-->
          <p><label>Nom : </label><input type="text" name="lastname" placeholder="Votre Nom" /></p>
          <p><label>Prénom : </label><input type="text" name="firstname" placeholder="Votre Prénom" /></p>
          <!--Boutton-->
          <p><input type="submit" name="envoyer" /></p>
        </form>
        <!--Afficher sur l'index les données rentrés par l'utilisateur-->
        <p><?php echo 'Bonjour ' . ' ' . $_POST['choiceGender'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' comment allez vous ?' ?></p>
      </div>
  </body>
</html>
