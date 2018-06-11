<?php 
// Je crée les regex pour mon formulaire
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]+$/';//Regex pour le nom et prénom
$regexAge = '/^(1[4-9]|2[0-9]|3[0-9]]|4[0-9]|5[0-9]|6[0-9]|7[0-9]]|8[0-9]|9[0-9]|10[0-9]|11[0])/';//Regex de 14 à 110

// Création d'un tableau pour retranscrire les erreurs lord du remplissage du formulaire
$formErrorMessage = array();

// Je crée un tableau associatif pour la civilité
$civilityArray = array(1 => 'Mademoiselle', 2 => 'Madame', 3 => 'Monsieur');

/* Controle effectué dans l'ordre du formulaire
 * Controle de la sélection de la civilité
 * Si on appuie sur envoyer et que civilité n'est pas sélectionné
 */
// Si on envoi le formulaire et que la clé n'existe pas dans le post (pas selectionné la civilité) on affiche un message
if (isset($_POST['sendForm']) && !array_key_exists('civility', $_POST)){
    $formErrorMessage['civility'] = '*Veuillez sélectionné votre civilité';
}
if (isset($_POST['civility'])){
    $civility = $civilityArray[$_POST['civility']];
}

// Controle pour le nom
if (isset($_POST['lastname'])){
    /* Variable lastname qui vérifie que les caractères speciaux soit converti en entité html (protection)
     * htmlspecialchars supprime les caractères html (type balise par exemple) rentré dans les inputs du formulaire
     */
    $lastname = htmlspecialchars($_POST['lastname']);
    // Si la variable lastname ne correspond pas à la regex ($regexName ne correspond pas à $lastname)
    if (!preg_match($regexName, $lastname)){
        // J'affiche l'erreur 
        $formErrorMessage['lastname'] = '*Votre nom ne doit contenir que des lettres';
   }
    // Si le post lastname n'est pas rempli (donc vide)
    if (empty($_POST['lastname'])){
        // J'affiche l'erreur 
        $formErrorMessage['lastname'] = '*Champs obligatoire';
    }   
}

// Controle pour le prénom
if (isset($_POST['firstname'])){
    /* Variable firstname qui vérifie que les caractères speciaux soit converti en entité html (protection)
     * htmlspecialchars supprime les caractères html (type balise par exemple) rentré dans les inputs du formulaire
     */
    $firstname = htmlspecialchars($_POST['firstname']);
    // Si la variable firstname ne correspond pas à la regex
    if (!preg_match($regexName, $firstname)){
        // J'affiche l'erreur 
        $formErrorMessage['firstname'] = '*Votre prénom ne doit contenir que des lettres';
   }
    // Si le post firstname n'est pas rempli (donc vide)
    if (empty($_POST['firstname'])){
        // J'affiche l'erreur 
        $formErrorMessage['firstname'] = '*Champs obligatoire';
    }   
}

// Controle de l'age
if (isset($_POST['age'])){
    $age = $_POST['age'];
    // Si la variable firstname ne correspond pas à la regex
    if (!preg_match($regexAge, $age)){
        // J'affiche l'erreur 
        $formErrorMessage['age'] = '*Votre saisie d\'âge est invalide';
   }
    // Si le post age n'est pas rempli (donc vide)
    if (empty($_POST['age'])){
        // J'affiche l'erreur 
        $formErrorMessage['age'] = '*Champs obligatoire';
    }   
}
// Controle de la société
if (isset($_POST['society'])){
    $society = $_POST['society'];
    // Si le post society n'est pas rempli (donc vide)
    if (empty($_POST['society'])){
        // J'affiche l'erreur 
        $formErrorMessage['society'] = '*Champs obligatoire';
    }  
}

?>