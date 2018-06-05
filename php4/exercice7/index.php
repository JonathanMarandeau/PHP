<?php
//Création de la fonction
function returnOption($age, $gender){
  if ($age > 0){
    //Si majeur et homme
    if ($age >= 18 && $gender == 'Homme'){
      //Alors affiche ça
      $result = 'Vous êtes un homme et vous êtes majeur';
      //Si mineur et homme
    } else if ($age < 18 && $gender == 'Homme'){
      //Alors affiche ça
      $result = 'Vous êtes un homme et vous êtes mineur';
      //Si majeur et différent de homme
    } else if ($age >= 18 && $gender == 'Femme'){
      //Alors affiche ça
      $result = 'Vous êtes une femme et vous êtes majeure';
      //Sinon
    } else if ($age < 18 && $gender == 'Femme'){
      //Affiche ça
      $result = 'Vous êtes une femme et vous êtes mineure';
    } else {
      $result = 'Votre Genre n\'existe pas';
    }
  } else {
    $result = 'Votre age est impossible !!!!!';
  }
  return $result;
}
?>
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
    <p><?php echo returnOption(25, 'Homme');?></p>
  </div>
</body>
</html>
