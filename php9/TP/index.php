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
            <div class="container">
            <form method="POST" class="selectDate">
                <select name="month" class="selectMonth">
                    <!--Création d'un tableau associatifs-->
                    <?php 
                        $monthArray = array('Janvier' => 1, 'Février' => 2, 'Mars' => 3, 'Avril' => 4, 'Mai' => 5, 'Juin' => 6, 'Juillet' => 7, 'Août' => 8, 'Septembre' => 9, 'Octobre' => 10, 'Novembre' => 11, 'Décembre' => 12);
                    ?>
                    <!--Si les valeurs sont bien renseigné alors on l'echo-->
                    <!--selected permet de garder la valeur sélectionné par l'utilisateur-->
                    <option value=1 <?php echo (isset($_POST['month']) && $_POST['month'] == 1 ) ? 'selected' : ' '; ?>>Janvier</option>
                    <option value=2 <?php echo (isset($_POST['month']) && $_POST['month'] == 2 ) ? 'selected' : ' '; ?>>Février</option>
                    <option value=3 <?php echo (isset($_POST['month']) && $_POST['month'] == 3 ) ? 'selected' : ' '; ?>>Mars</option>
                    <option value=4 <?php echo (isset($_POST['month']) && $_POST['month'] == 4 ) ? 'selected' : ' '; ?>>Avril</option>
                    <option value=5 <?php echo (isset($_POST['month']) && $_POST['month'] == 5 ) ? 'selected' : ' '; ?>>Mai</option>
                    <option value=6 <?php echo (isset($_POST['month']) && $_POST['month'] == 6 ) ? 'selected' : ' '; ?>>Juin</option>
                    <option value=7 <?php echo (isset($_POST['month']) && $_POST['month'] == 7 ) ? 'selected' : ' '; ?>>Juillet</option>
                    <option value=8 <?php echo (isset($_POST['month']) && $_POST['month'] == 8 ) ? 'selected' : ' '; ?>>Aout</option>
                    <option value=9 <?php echo (isset($_POST['month']) && $_POST['month'] == 9 ) ? 'selected' : ' '; ?>>Septembre</option>
                    <option value=10 <?php echo (isset($_POST['month']) && $_POST['month'] == 10 ) ? 'selected' : ' '; ?>>Octobre</option>
                    <option value=11 <?php echo (isset($_POST['month']) && $_POST['month'] == 11 ) ? 'selected' : ' '; ?>>Novembre</option>
                    <option value=12 <?php echo (isset($_POST['month']) && $_POST['month'] == 12 ) ? 'selected' : ' '; ?>>Décembre</option>
                </select>
                <select name="year" class="selectYear">
                    <!--Je défini l'interval de choix de date dans la liste déroulante, de 1900 a 2100-->
                    <?php for($year = 1900; $year < 2100; $year ++){ ?>
                    <option value=<?php echo $year ?> <?php echo (isset($_POST['year']) && $_POST['year'] == $year ) ? 'selected' : ''; ?>><?php echo $year ?></option>
                    <?php } ?>
                </select>
                <!--Boutton valider pour valider le choix-->
                <input type="submit" value="Valider" class="btn btn-primary"/>
            </form>
        <?php
        setlocale(LC_TIME, 'fr_FR.UTF8');
            if (isset($_POST['month']) && isset($_POST['year'])){
                $year = $_POST['year'];
                //Je récupère le nombre de jour dans un mois
                $numberDayMonth = idate('t', mktime(0, 0, 0, $_POST['month'], 1, $year));
                //Je récupère le nom du mois en français en toute lettre
                $month = strftime('%B', mktime(0, 0, 0, $_POST['month'], 1, $_POST['year']));
                //Je récupère le premier jour mois
                $firstDayOfMonth = strftime('%A', mktime(15, 0, 0, $_POST['month'], 1, $_POST['year']));
                //Je récupère le premier jour du mois - 0 correspond à Dimanche - 6 correspond à Samedi
                $firstDay = idate('w', mktime(0, 0, 0, $_POST['month'], 1, $_POST['year']));
            }
            else{
                $year = 1993;
                $month = 'Mai';
                $numberDayMonth = 31;
                $firstDayOfMonth = strftime('%A', mktime(0, 0, 0, 1, 1, $year));
                $firstDay = idate('w', mktime(0, 0, 0, 1, 1, $year));
            }
        ?>
        <caption class="nameArray"><!--Défini le titre, la legende du tableau-->
            <div class="titleTable">
                <!--J'affiche la sélection faite par l'utilisateur-->
            <?php echo $month . ' ' . $year; ?>
            </div>
        </caption>
        <table class="table table-striped col-lg-12">
            <tr>
              <th scope="col">Lundi</th>
              <th scope="col">Mardi</th>
              <th scope="col">Mercredi</th>
              <th scope="col">Jeudi</th>
              <th scope="col">Vendredi</th> 
              <th scope="col">Samedi</th>
              <th scope="col">Dimanche</th>
            </tr>
            <?php
                //Je transforme la valeur du dimanche qui vaut 0 pour qu'il prenne la valeur 7
                if($firstDay == 0){
                    $firstDay = 7;
                }
            ?>
            <tr>
                <!--J'initialise une variable et tant que l'on est pas au premier jour du mois, on affiche un vide-->
                <?php for($navCalendar = 1; $navCalendar < $firstDay; $navCalendar ++){?>
                <td class="videEnd"><?php echo ' ';?></td><?php } ?>
                <!-- La variable prend la valeur du premier jour du mois puis on incrémente le jour jusqu'à 7 qui représente la longueur de la ligne -->
                <?php for($navCalendar = $firstDay, $daysCalendar = 1; $navCalendar <= 7; $navCalendar ++, $daysCalendar ++){?>
                <td><?php echo $daysCalendar;?></td><?php } ?>
            </tr>
            <!-- Initialisation d'une variable permettant de répéter la création de ligne pour le reste du calendrier -->
            <?php for($linesMiddle = 0; $linesMiddle <= 4; $linesMiddle ++){?>
            <tr>
                <!-- On crée une ligne pour sauter une ligne à chaque fois que l'on atteint 7 cases et on fait ça tant que le nombre de jour est inférieur ou égal au nombre total de jour dans le mois choisi -->
                <?php for($navCalendar = 1; $navCalendar <= 7 && $daysCalendar <= $numberDayMonth; $navCalendar ++, $daysCalendar ++){ ?>
                <td><?php echo $daysCalendar;?></td>
                <?php }?>
                <!-- A partir du moment où le nombre de jour dépasse le nombre total de jours du mois, on affiche des vides à nouveau jusqu'à la fin de la ligne, soit 7 -->
                <?php if($daysCalendar > $numberDayMonth){ ?>
                <?php for($navCalendar; $navCalendar <= 7; $navCalendar ++){?>
                <td><?php echo ' '; ?></td>
                <?php 
                    }
                } 
                ?>
            </tr>
            <?php }?>
        </table>
       </div> 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
