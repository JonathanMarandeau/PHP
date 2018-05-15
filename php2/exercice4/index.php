<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 2 Exercice 4</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>PHP Partie 2 Exercice 4</h1>
      <p>
        <?php
          //Création de la variable magnitude
          $magnitude = 9;
          //Mise en place des conditions permettant d'afficher un phrase a une magnitude
          switch ($magnitude) //Méthode du switch
            {
              case 1:
                echo 'Micro-séisme impossible à ressentir.';
              break;
              case 2:
                echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
              break;
              case 3:
                echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
              break;
              case 4:
                echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
              break;
              case 5:
                echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
              break;
              case 6:
                echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
              break;
              case 7:
                echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
              break;
              case 8:
                echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
              break;
              case 9:
                echo 'Séisme capable de tout détruire sur une très vaste zone.';
              break;
              default:
                echo 'Visiblement vous n\'avez pas saisi jusqu\'où allé la notation de Richter';
              break;
            }
        ?>
      </p>
  </body>
</html>
