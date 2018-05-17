<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 4 Exercice 7</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 4 Exercice 7</h1>
      <div class="order">
        <p>Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :</p>
          <ul>
            <li>Homme</li>
            <li>Femme</li>
          </ul>
        <p>La fonction doit renvoyer en fonction des paramètres :</p>
          <ul>
            <li>Vous êtes un homme et vous êtes majeur</li>
            <li>Vous êtes un homme et vous êtes mineur</li>
            <li>Vous êtes une femme et vous êtes majeur</li>
            <li>Vous êtes une femme et vous êtes mineur</li>
          </ul>
        <p>Gérer tous les cas.</p>
      </div>
    <h2>Exercice 7</h2>
      <div class="content">
        <p>
          <?php
          //Création des deux variables age et genre
          $age = 4;
          $gender = 'Homme';
          //Création de la fonction
          function returnOption($age, $gender){
            //Si majeur et homme
            if ($age >= 18 && $gender = 'Homme'){
              //Alors affiche ça
              return 'Vous êtes un homme et vous êtes majeur';
            //Si mineur et homme
          } else if ($age < 18 && $gender = 'Homme'){
              //Alors affiche ça
              return 'Vous êtes un homme et vous êtes mineur';
            //Si majeur et différent de homme
          } else if ($age >= 18 && $gender != 'Homme'){
              //Alors affiche ça
              return 'Vous êtes une femme et vous êtes majeur';
            //Sinon
          } else {
              //Affiche ça
              return 'Vous êtes une femme et vous êtes mineur';
          }
        } echo returnOption($age, $gender);
          ?>
        </p>
      </div>
  </body>
</html>
