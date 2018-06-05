<!--Je crée une variable $date qui va me permettre d'afficher la date a l'instant T-->
<?php
$date = date('d-m-y');//Le y minuscule affiche seulement les deux derniers chiffres de l'année
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Partie 9 Exercice 2</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>PHP Partie 9 Exercice 2</h1>
        <div class="order">
            <p>Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)</p>
        </div>
        <h2>Exercice 2</h2>
        <div class="content">
            <!--J'affiche la date à travers une phrase-->
            <p>Bonjour, nous sommes le <?= $date ?>. Bienvenu sur le site !</p>
        </div>
    </body>
</html>
