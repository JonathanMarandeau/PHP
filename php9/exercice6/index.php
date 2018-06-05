<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Partie 9 Exercice 6</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>PHP Partie 9 Exercice 6</h1>
        <div class="order">
            <p>Afficher le nombre de jour dans le mois de février de l'année 2016.</p>
        </div>
        <h2>Exercice 6</h2>
        <div class="content">
            <!--Création d'une variable : $numberDaysInFebruary2016-->
            <!--cal_days_in_months : permet de retourner le nombre de jour dans un mois pour une année et un calendrier donné-->
            <p><?php $numberDaysInFebruary2016 = cal_days_in_month(CAL_GREGORIAN, 2, 2016); ?></p>
            <!--On affiche la variable (ce qu'elle a dedans)-->
            <p>Le mois de février avait, <?= $numberDaysInFebruary2016; ?> jours en 2016.</p>
        </div>
    </body>
</html>
