<?php 
//Création des regex pour controler les données rentré dans le formulaire
$regexLastname = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]+$/';
$regexFirstname = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]+$/'; 
$regexAddress = '/^[0-9]{1,4}[, ][a-zA-Z àáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]+$/';
$regexEmail = '/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/';
$regexTelephoneNumber = '/^[0-9]{10,10}$/';
$regexLinkCA = '/^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$/';
 //Création des variables qui vont prendre des valeurs avec le formulaire
$lastname = '';
$firstname = '';
$birthDate = '';
$diplomaChoice = '';
$countryBorn = '';
$nationality = '';
$address = '';
$email = '';
$telephoneNumber = '';
$numberPe = '';
$badgeNumber = '';
$codacademyLink = '';
$supaHero = '';
$hacking = '';
$experienceBefore = '';
//J'ajoute ce qui a été rempli au variable créée précedement (on garde les données remplie dans le formulaire)
//!empty() vérifie que la variable n'est pas null et existe
if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['birthDate']) && !empty($_POST['diplomaChoice']) && !empty($_POST['countryBorn']) && !empty($_POST['nationality']) && !empty($_POST['address']) && !empty($_POST['email']) && !empty($_POST['telephoneNumber']) && !empty($_POST['numberPe']) && !empty($_POST['badgeNumber']) && !empty($_POST['codacademyLink']) && !empty($_POST['supaHero']) && !empty($_POST['hacking']) && !empty($_POST['experienceBefore'])){
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $birthDate = $_POST['birthDate'];
    $diplomaChoice = $_POST['diplomaChoice'];
    $countryBorn = $_POST['countryBorn'];
    $nationality = $_POST['nationality'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $telephoneNumber = $_POST['telephoneNumber'];
    $numberPe = $_POST['numberPe'];
    $badgeNumber = $_POST['badgeNumber'];
    $codacademyLink = $_POST['codacademyLink'];
    $supaHero = $_POST['supaHero'];
    $hacking = $_POST['hacking'];
    $experienceBefore = $_POST['experienceBefore'];
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Partie 10 TP 1 </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>PHP Partie 10 TP 1</h1>
        <div class="container">
            <div class="order">
            <p>Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :</p>
            <ul>
                <li>Nom</li>
                <li>Prénom</li>
                <li>Date de naissance</li>
                <li>Pays de naissance</li>
                <li>Nationalité</li>
                <li>Adresse</li>
                <li>Email</li>
                <li>Téléphone</li>
                <li>Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)</li>        
                <li>Numéro pôle emploi</li>
                <li>Nombre de badge</li>
                <li>Liens codecademy</li>
                <li>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</li>
                <li>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</li>
                <li>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</li>
            </ul>
            <p>A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire.</p>
        </div>
        </div>
        <h2 class="text-center">Enregistrez Vous</h2>
        <form action="index.php" method="POST">
            <div class="container">
                <div class="form-row">
                    <div class="form-group col-lg-6 text-center">
                        <label for="lastname">Nom</label><br />
                        <input type="text" name="lastname" id="lastname" placeholder="Votre nom" />
                    </div>
                    <div class="form-group col-lg-6 text-center">
                        <label for="firstname">Prénom</label><br />
                        <input type="text" name="firstname" id="lastname" placeholder="Votre prénom" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6 text-center">
                        <label for="birthDate">Date de naissance</label><br />
                        <input type="date" name="birthDate" id="birthDate" />
                    </div>
                    <div class="form-group col-lg-6 text-center">
                        <label for="diploma">Diplôme majeur</label><br />
                        <select class="diplomaChoice" name="diploma">
                            <option selected disabled>Choix</option>
                            <option value="1">Aucun</option>
                            <option value="2">BAC</option>
                            <option value="3">BAC + 2</option>
                            <option value="4">BAC + 3</option>
                            <option value="5">BAC + 5 et plus</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6 text-center">
                        <label for="countryBorn">Pays de naissance</label><br />
                        <select class="countryBorn" name="countryBorn">
                            <option selected disabled>Choix</option>
                            <option value="1">Allemagne</option>
                            <option value="2">Espagne</option>
                            <option value="3">France</option>
                            <option value="4">Italie</option>
                            <option value="5">Russie</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6 text-center">
                        <label for="nationality">Nationalité</label><br />
                        <select class="nationality" name="nationality">
                            <option selected disabled>Choix</option>
                            <option value="1">Allemande</option>
                            <option value="2">Espagnol</option>
                            <option value="3">Française</option>
                            <option value="4">Italienne</option>
                            <option value="5">Russe</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6 text-center">
                        <label for="address">Adresse</label><br />
                        <input type="text" name="address" placeholder="Votre adresse" />
                    </div>
                    <div class="form-group col-lg-6 text-center">
                        <label for="email">E-mail</label><br />
                        <input type="email" name="email" placeholder="Votre email" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6 text-center">
                        <label for="telephoneNumber">Téléphone</label><br />
                        <input type="tel" name="telephoneNumber" placeholder="Votre numéro de téléphone" />
                    </div>
                    <div class="form-group col-lg-6 text-center">
                        <label for="numberPe">Numéro de pôle emploi</label><br />
                        <input type="text" name="numberPe" placeholder="Votre numéro pôle emploi" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6 text-center">
                        <label for="badgeNumber">Nombre de badge</label><br />
                        <input type="text" name="badgeNumber" placeholder="Vos badges codacademy" />
                    </div>
                    <div class="form-group col-lg-6 text-center">
                        <label for="codacademyLink">Lien Codacademy</label><br />
                        <input type="url" name="codacademyLink" placeholder="Lien vers votre Codacademy" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-12">
                        <label for="supaHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label><br />
                        <textarea name="supaHero" rows="4" cols="80"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-12">
                        <label for="hacking">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label><br />
                        <textarea name="hacking" rows="4" cols="80"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-12">
                        <label for="experienceBefore">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label><br />
                        <textarea name ="experienceBefore" rows="4" cols="80"></textarea>
                    </div>
                </div>
            </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
