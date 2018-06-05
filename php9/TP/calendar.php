<?php
//Je crée un tableau associatif pour les mois de l'année avec leur numéro associés
$months = array(1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Aout', 9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre');
//On vérifie que la sélection du mois et de l'année à bien été faite
if (isset($_POST['month']) && isset($_POST['year'])) {
//Si le mois et l'année ont bien sélectionnés, on les attribue chacun à une variable $month et $year
    $month = $_POST['month'];
    $year = $_POST['year'];
} else {
    //sinon on attribue à $month et $year la date courrante
    $month = date('n');//n = numéro du mois sans les 0 initiaux
    $year = date('Y');//Y = Année sur 4 chiffres
}
//Je récupère le nombre de jours dans le mois grâce à la fonction date qui prend en paramettre un format et un timestamp que l'on crée
//mktime va retourner un timestamp d'une date
$numberDaysInMonth = date('t', mktime(0, 0, 0, $month, 1, $year));//t = nombre de jours dans le mois (de 28 à 31)
//Je récupère le premier jour de la semaine dans le mois grâce à la fonction date qui prend en paramettre un format et un timestamp que l'on crée
$firstDayInMonth = date('N', mktime(0, 0, 0, $month, 1, $year));//N = Représentation numérique du jour de la semaine (lundi=1 dimanche=7)
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>TP Calendrier</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>TP Calendrier</h1>
        <div class="container-fluid">
            <div class="order">
                <p>Faire un formulaire avec deux listes déroulantes.</p>
                <ul>
                    <li>La première sert à choisir le mois</li>
                    <li>le deuxième permet d'avoir l'année</li>
                </ul>
                <p>En fonction des choix, afficher un calendrier comme celui ci :</p>
            </div>
        </div>
        <h2 class="text-center">Début du TP</h2>
        <p class="text-center order_exo">Choisissez un mois et une année pour afficher un calendrier avec les dates sélectionnés.</p>
           <div class="container-fluid">
                  <form class="text-center" method="POST" action="calendar.php">
                        <select name="month">
                            <?php
                            //On parcours le tableau $months afin de créer les variables temporaires
                            foreach ($months as $monthNumber => $monthName) {
                                //si notre mois sélectionné est egal au mois crée par la variable on lui affecte l'attribut selected
                                ?>
                                              <!--Numéro du mois-->                                              <!--affiche le nom du mois-->
                                <option value="<?= $monthNumber ?>" <?= $month == $monthNumber ? 'selected' : ''; ?>><?= $monthName ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <select name="year">
                            <?php
                            //Je crée une boucle qui va permettre de générer une liste d'années compris entre les valeurs 1900 et 2100
                            //La liste commence a 1900
                            //Va jusqu'a 2100
                            //S'incrémente de +1 a chaque boucle
                            for ($yearsList = 1900; $yearsList <= 2100; $yearsList ++) {
                                //Si l'année sélectionnée est égale à l'année créée je lui affecte l'attribut "selected"    
                                ?>
                                <option value="<?= $yearsList ?>" <?= $year == $yearsList ? 'selected' : ''; ?>><?= $yearsList ?></option><?php
                            }
                            ?>
                        </select>
                        <!--Boutton pour valider le mois et l'année-->
                        <input class="btn btn-primary" type="submit" name="validate" value="Valider" />
                    </form>  
               <div class="container-fluid">
                   <table class="table table-striped col-lg-12">
                        <thead>
                         <!--Je crée les titres des colonnes du tableau avec le nom des jours-->
                        <th class="col-lg-1">Lundi</th>
                        <th class="col-lg-1">Mardi</th>
                        <th class="col-lg-1">Mercredi</th>
                        <th class="col-lg-1">Jeudi</th>
                        <th class="col-lg-1">Vendredi</th>
                        <th class="col-lg-1">Samedi</th>
                        <th class="col-lg-1">Dimanche</th>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                //La variable $currentDay correspond au numéro du jour en cours
                                $currentDay = 1;
                                /* $daysTiles correspond au nombre de cases dont j'ai besoin dans le calendrier
                                 * On ajoute à $numberDaysInMonth la variable $firstDayInMonth 
                                 * On soustrait 1 au résultat afin d'obtenir le bon nombre de cases
                                 */
                                for ($daysTiles = 1; $daysTiles <= $numberDaysInMonth + $firstDayInMonth - 1; $daysTiles ++) {
                                    //Si $firstDayInMonth est inférieure ou égale au nombre de cases. Quand on arrive au jour de la semaine du premier jour du mois, je commence à écrire le numéro des jours
                                    if ($firstDayInMonth <= $daysTiles) {
                                        ?><td><?= $currentDay ?></td><?php
                                        $currentDay ++;
                                    } else {
                                        //Je crée des cases vides pour éviter un décalage vers la gauche
                                        ?> <td class="noDays"></td> <?php
                                    }
                                    //Si le nombre de cases est un multiple de 7 on passe une ligne car c'est la fin d'une semaine
                                    if ($daysTiles % 7 == 0) {
                                        ?></tr><tr><?php
                                    }
                                }
                                ?>
                            </tr>
                        </tbody>
                    </table>
               </div>
            </div>        
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
