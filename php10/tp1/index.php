<?php 
include 'indexController.php';
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
        <div class="container">
            <?php
           // Si il n'y a pas d'erreur dans le tableau et qu'on valide le formulaire
            if (count($formError) == 0 && isset($_POST['sendForm'])){
           // J'affiche le resulat                     
                ?>
                <div class="container">
                    <h2 class="text-center">Données que vous avez indiqués</h2>
                    <p><span class="formResult">Nom : </span><?= $lastname ?></p>
                    <p><span class="formResult">Prénom : </span><?= $firstname ?></p>
                    <p><span class="formResult">Date de naissance : </span><?= $birthDate ?></p>
                    <p><span class="formResult">Pays de naissance : </span><?= $countryBorn ?></p>
                    <p><span class="formResult">Nationalité : </span><?= $nationality ?></p>
                    <p><span class="formResult">Adresse : </span><?= $address ?></p>
                    <p><span class="formResult">Email : </span><?= $email ?></p>
                    <p><span class="formResult">Téléphone : </span><?= $phoneNumber ?></p>
                    <p><span class="formResult">Diplome : </span><?= $diploma ?></p>
                    <p><span class="formResult">Numéro pôle emploi : </span><?= $numberPe ?></p>
                    <p><span class="formResult">Nombre de badge : </span><?= $badgeNumber ?></p>
                    <p><span class="formResult">Lien codecademy : </span><?= $codacademyLink ?></p>
                    <p><span class="formResult">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? : </span><br/><?= $supaHero ?></p>
                    <p><span class="formResult">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) : </span><br/><?= $hacking ?></p>
                    <p><span class="formResult">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? : </span><br/><?= $experienceBefore ?></p>
                </div>
                <?php } else { ?>
                <form action="index.php" method="POST">
                    <h2 class="text-center">Enregistrez Vous</h2>
                    <div class="form-row">
                        <div class="form-group col-lg-6 text-center">
                            <label for="lastname">Nom</label><br />
                            <input type="text" name="lastname" id="lastname" placeholder="Votre nom" value="<?= isset($lastname) ? $lastname : '' ?>" />
                            <p><?= isset($formError['lastname']) ? $formError['lastname'] : '' ?></p>
                        </div>
                        <div class="form-group col-lg-6 text-center">
                            <label for="firstname">Prénom</label><br />
                            <input type="text" name="firstname" id="firstname" placeholder="Votre prénom" value="" />
                            <p><?= isset($formError['firstname']) ? $formError['firstname'] : '' ?></p>
                        </div>
                    </div>
         
                    <div class="form-row">
                        <div class="form-group col-lg-6 text-center">
                            <label for="birthDate">Date de naissance</label><br />
                            <input type="date" name="birthDate" id="birthDate" />
                            <p><?= isset($formError['birthDate']) ? $formError['birthDate'] : '' ?></p>
                        </div>
                        <div class="form-group col-lg-6 text-center">
                            <label for="diploma">Diplôme majeur</label><br />
                            <select class="diploma" name="diploma" >
                                <option selected disabled>Choix</option>
                                <option value="1">Aucun</option>
                                <option value="2">BAC</option>
                                <option value="3">BAC + 2</option>
                                <option value="4">BAC + 3</option>
                                <option value="5">BAC + 5 et plus</option>
                            </select>
                            <p><?= isset($formError['diploma']) ? $formError['diploma'] : '' ?></p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-6 text-center">
                            <label for="countryBorn">Pays de naissance</label><br />
                            <select class="countryBorn" name="countryBorn" >
                                <option selected disabled>Choix</option>
                                <option value="1">Allemagne</option>
                                <option value="2">Espagne</option>
                                <option value="3">France</option>
                                <option value="4">Italie</option>
                                <option value="5">Russie</option>
                            </select>
                            <p><?= isset($formError['countryBorn']) ? $formError['countryBorn'] : '' ?></p>
                        </div>
                        <div class="form-group col-lg-6 text-center">
                            <label for="nationality">Nationalité</label><br />
                            <select class="nationality" name="nationality" >
                                <option selected disabled>Choix</option>
                                <option value="1">Allemande</option>
                                <option value="2">Espagnol</option>
                                <option value="3">Française</option>
                                <option value="4">Italienne</option>
                                <option value="5">Russe</option>
                            </select>
                            <p><?= isset($formError['nationality']) ? $formError['nationality'] : '' ?></p> 
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-6 text-center">
                            <label for="address">Adresse</label><br />
                            <textarea name="address" placeholder="Votre adresse" rows="4" cols="20" value="" ></textarea>
                            <p><?= isset($formError['address']) ? $formError['address'] : '' ?></p>
                        </div>
                        <div class="form-group col-lg-6 text-center">
                            <label for="email">E-mail</label><br />
                            <input type="email" name="email" placeholder="Votre email" value=""  />
                            <p><?= isset($formError['email']) ? $formError['email'] : '' ?></p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-6 text-center">
                            <label for="phoneNumber">Téléphone</label><br />
                            <input type="tel" name="phoneNumber" placeholder="Votre numéro de téléphone" value=""  />
                            <p><?= isset($formError['phoneNumber']) ? $formError['phoneNumber'] : '' ?></p> 
                        </div>
                        <div class="form-group col-lg-6 text-center">
                            <label for="numberPe">Numéro de pôle emploi</label><br />
                            <input type="text" name="numberPe" placeholder="Votre numéro pôle emploi" value=""  />
                            <p><?= isset($formError['numberPe']) ? $formError['numberPe'] : '' ?></p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-6 text-center">
                            <label for="badgeNumber">Nombre de badge</label><br />
                            <input type="text" name="badgeNumber" placeholder="Vos badges codacademy" value=""  />
                            <p><?= isset($formError['badgeNumber']) ? $formError['badgeNumber'] : '' ?></p>
                        </div>
                        <div class="form-group col-lg-6 text-center">
                            <label for="codacademyLink">Lien Codacademy</label><br />
                            <input type="url" name="codacademyLink" placeholder="Lien vers votre Codacademy" value=""  />
                            <p><?= isset($formError['codacademyLink']) ? $formError['codacademyLink'] : '' ?></p>  
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="supaHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label><br />
                            <textarea name="supaHero" rows="4" cols="80" value="" ></textarea>
                            <p><?= isset($formError['supaHero']) ? $formError['supaHero'] : '' ?></p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="hacking">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label><br />
                            <textarea name="hacking" rows="4" cols="80" value="" ></textarea>
                            <p><?= isset($formError['hacking']) ? $formError['hacking'] : '' ?></p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="experienceBefore">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label><br />
                            <input type="radio" name="experienceBefore" value="oui" id="oui" /> <label for="oui">Oui</label>
                            <input type="radio" name="experienceBefore" value="non" id="non" /> <label for="non">Non</label>
                            <p><?= isset($formError['experienceBefore']) ? $formError['experienceBefore'] : '' ?></p>
                        </div>
                    </div>
                    <div class="text-center buttonSend">
                        <input type="submit" name="sendForm" value="Envoyer" />
                    </div>
            </div>
        </form>
        <?php
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
