<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Partie 9 Exercice 3</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>PHP Partie 9 Exercice 3</h1>
        <div class="order">
            <p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)</p>
            <p>Bonus : Le faire en français.</p>
        </div>
        <h2>Exercice 3</h2>
        <div class="content">
            <!--J'affiche la date à travers une phrase-->
            <p>Bonjour, nous sommes le 
                <?php setlocale(LC_TIME, "fr_FR.utf8");//Je paramètre avec setlocale pour avoir les données locales
                  echo strftime('%A %d %B %Y');//%A : Nom complet du jour de la semaine, %d : jour du mois en numérique, %B : Nom complet du mois concernant la local, %Y : l'année sur 4 chiffres
                ?>. Bienvenu sur le site !</p>
        </div>
    </body>
</html>


    