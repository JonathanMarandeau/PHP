<?php

//Création des regex pour controler les données rentré dans le formulaire
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]+$/';
$regexAddress = '/^[0-9]{1,4}[, ][a-zA-Z àáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]+$/';
$regexEmail = '/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/';
$regexPhoneNumber = '/^[0-9]{10,10}$/';
$regexLinkCA = '/^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$/';
$regexNumberPe = '/^[0-9]{8}[A-Z]/';
$regexBadgeNumber = '/^[0-9]+$/';

//Création d'un tableau pour retranscrire les erreurs lord du remplissage du formulaire
$formError = array();

//Nom
//Si le post est rempli alors
if (isset($_POST['lastname'])){
    // Variable lastname qui vérifie que les caractères speciaux soit converti en entité html (protection)
    $lastname = htmlspecialchars($_POST['lastname']);
    // Si la variable lastname ne correspond pas à la regex
    if (!preg_match($regexName, $lastname)){
        // J'affiche l'erreur 
        $formError['lastname'] = 'Votre nom ne doit contenir que des lettres';
   }
   // Si le post lastname n'est pas rempli (donc vide)
    if (empty($_POST['lastname'])){
        // J'affiche l'erreur 
        $formError['lastname'] = 'Champs obligatoire';
    }          
}
//Prénom
// Si le post est rempli alors
if (isset($_POST['firstname'])){
    // Variable firstname qui vérifie que les caractères speciaux soit converti en entité html (protection)
    $firstname = htmlspecialchars($_POST['firstname']);
    // Si la variable firstname ne correspond pas à la regex
    if (!preg_match($regexName, $firstname)){
        // J'affiche l'erreur
        $formError['firstname'] = 'Votre prénom ne doit contenir que des lettres';
   }
   // Si le post est vide
    if (empty($_POST['firstname'])){
        // J'affiche le message d'erreur
        $formError['firstname'] = 'Champs obligatoire';
    }          
}
//Anniversaire
// Si le poste est rempli
if (isset($_POST['birthDate'])){
    // Variable qui va transformer le format de la date comme on le souhaite
    $birthDate = new DateTime($_POST['birthDate']);
    $birthDate = $birthDate->format('d/m/Y'); 
    // Si le post est vide 
    if (empty($_POST['birthDate'])){
        // J'affiche le message d'erreur
        $formError['birthDate'] = 'Champs obligatoire';
    }  
}

//Diplome
if (isset($_POST['diploma'])){
    // Tableau associatif
    $diplomaArray = array(1 => 'Sans', 2 => 'BAC', 3 => 'BAC + 2', 4 => 'BAC + 3', 5 => 'BAC + 5');
    $diploma = $diplomaArray[$_POST['diploma']];
    if ($diploma == NULL){
        $formError['diploma'] = 'Sélection obligatoire';
    } 
}

//Pays de naissance
if (isset($_POST['countryBorn'])){
    $countryArray = array(1 => 'Allemagne', 2 => 'Espagne', 3 => 'France', 4 => 'Italie', 5 => 'Russie');
    $countryBorn = $countryArray[$_POST['countryBorn']];
    if ($countryBorn == NULL){
        $formError['countryBorn'] = 'Sélection obligatoire';
    }
}

//Nationalité
if (isset($_POST['nationality'])){
    $nationalityArray = array(1 => 'Allemande', 2 => 'Espagnol', 3 => 'Française', 4 => 'Italienne', 5 => 'Russe');
    $nationality = $nationalityArray[$_POST['nationality']];
    if ($nationality == NULL){
        $formError['nationality'] = 'Sélection obligatoire';
    }
}
//Adresse
if (isset($_POST['address'])){
    $address = $_POST['address'];
    if (!preg_match($regexAddress, $address)){
        $formError['address'] = 'Votre adresse n\'est pas valide';
    }
}
//E-mail
if (isset($_POST['email'])){
    $email = $_POST['email'];
    if (empty($email)){
        $formError['email'] = 'Champs obligatoire';
    }
}
//Télephone
if (isset($_POST['phoneNumber'])){
    $phoneNumber = $_POST['phoneNumber'];
    if (empty($phoneNumber)){
        $formError['phoneNumber'] = 'Champs obligatoire';
    }
}
//Lien codacademy
if (isset($_POST['codacademyLink'])){
    $codacademyLink = $_POST['codacademyLink'];
    if (empty($codacademyLink)){
        $formError['codacademyLink'] = 'Champs obligatoire';
    }
}
//Numéro pole emploi
if (isset($_POST['numberPe'])){
    $numberPe = htmlspecialchars($_POST['numberPe']);
    if (!preg_match($regexNumberPe, $numberPe)){
        $formError['numberPe'] = 'Votre numéro pôle emploi n\'est pas valide';
   }
    if (empty($_POST['numberPe'])){
        $formError['numberPe'] = 'Champs obligatoire';
    }          
}
//Numéro de badge
if (isset($_POST['badgeNumber'])){
    $badgeNumber = htmlspecialchars($_POST['badgeNumber']);
    if (!preg_match($regexBadgeNumber, $badgeNumber)){
        $formError['badgeNumber'] = 'Etes vous sûr d\'avoir rentré un nombre';
   }
    if (empty($_POST['badgeNumber'])){
        $formError['badgeNumber'] = 'Champs obligatoire';
    }          
}
//Texte super héros
if (isset($_POST['supaHero'])){
    $supaHero = $_POST['supaHero'];
    if (empty($_POST['supaHero'])){
        $formError['supaHero'] = 'Champs obligatoire';
    }
}
//Texte hacking
if (isset($_POST['hacking'])){
    $hacking = $_POST['hacking'];
    if (empty($_POST['hacking'])){
        $formError['hacking'] = 'Champs obligatoire';
    }
}
//Expérience
if (isset($_POST['experienceBefore'])){
    $experienceBefore = $_POST['experienceBefore'];
    if (empty($_POST['experienceBefore'])){
        $formError['experienceBefore'] = 'Sélection obligatoire';
    }
}
?>