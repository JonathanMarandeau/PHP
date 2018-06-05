<!--Je crée une variable $date qui va me permettre d'afficher la date a l'instant T-->
<?php
$date = date('d/m/Y');//Le Y majuscule affiche l'année complète
//OU
$today = new DateTime();//On crée une variable dans laquelle on instancie un objet de type DateTime à l'aide du clé new
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Partie 9 Exercice 1</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>PHP Partie 9 Exercice 1</h1>
        <div class="order">
            <p>Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)</p>
        </div>
        <h2>Exercice 1</h2>
        <div class="content">
            <!--J'affiche la date à travers une phrase-->
            <p>Bonjour, nous sommes le <?= $date ?>. Bienvenu sur le site !</p>
            <!--OU-->
            <p>Bonjour, nous sommes le <?= $today->format('d/m/Y'); ?>. Bienvenu sur le site !</p>
        </div>
    </body>
</html>
