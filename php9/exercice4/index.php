<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Partie 9 Exercice 4</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>PHP Partie 9 Exercice 4</h1>
        <div class="order">
            <p>Afficher le timestamp du jour.</p>
            <p>Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
        </div>
        <h2>Exercice 4</h2>
        <div class="content">
            <!--Affichage du timestamp depuis le debut-->
            <p>Le timestamp d'aujourd'hui : <?= time(); ?></p>
            <!--Affichage du timestamp depuis jusqu'à une date donnée-->
            <p>Le timestamp du mardi 2 août 2016 : <?= strtotime('tuesday 2 august 2016 15:00'); ?></p><!--OU '2016-08-02 15:00'-->
            <!--strtotime: transforme un texte anglais en timestamp-->
        </div>
    </body>
</html>

