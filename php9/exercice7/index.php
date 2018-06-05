<!--Je crée une variable $dateToday qui va me permettre d'afficher la date a l'instant T-->
<?php
//Variable pour définir la date du jour
$dateToday = new DateTime();
//add va additionné une durée a un objet
$dateToday -> add(new DateInterval('P20D'));//P20D veut dire : ajoute le nombre de jour ( + 20 days)
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Partie 9 Exercice 7</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>PHP Partie9 Exercice 7</h1>
        <div class="order">
            <p>Afficher la date du jour + 20 jours.</p>
        </div>
        <h2>Exercice 7</h2>
        <div class="content">
            <!--J'affiche le resultat dans le format j/m/a -->
            <p>Dans 20 jours, nous seront le <?= $dateToday ->format('d/m/Y'); ?>.</p>
        </div>
    </body>
</html>
