<!--Je crée une variable $dateToday qui va me permettre d'afficher la date a l'instant T-->
<?php
//Variable pour définir la date du jour
$dateToday = new DateTime();
//sub va sosutraire une durée à un objet
$dateToday -> sub(new DateInterval('P22D'));
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>PHP Partie 9 Exercice 8</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1 class="text-right">PHP Partie 9 Exercice 8</h1>
        <div class="container-fluid">
            <div class="order">
                <h2>Consigne : </h2>
                <p>Afficher la date du jour - 22 jours</p>
            </div>
        </div>
        <h3 class="text-left">EXERCICE 8</h3>
        <div class="container-fluid">
            <div class="content text-center">
                <!--J'affiche le resultat dans le format j/m/a -->
            <p>Il y a 22 jours, nous étions le <?= $dateToday ->format('d/m/Y'); ?>.</p>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
