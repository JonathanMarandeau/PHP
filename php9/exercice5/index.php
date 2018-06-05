<?php 
//Variable d'une date donnée
$dateDefined = new DateTime('16-05-2016');
//Variable d'une date (en timestamp) du jour
$dateDay = new DateTime();
//Variable interval qui est égale à la différence entre la dateDefined et dateDay
$interval = $dateDefined->diff($dateDay);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Partie 9 Exercice 5</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>PHP Partie 9 Exercice 5</h1>
        <div class="order">
            <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>            
        </div>
        <h2>Exercice 5</h2>
        <div class="content">
            <?= 'Il y a ' . $interval->format('%a') . ' jours entre le 16/05/2016 et aujourd\'hui.'; ?><!-- %a: nombre total de jours -->
        </div>
    </body>
</html>

