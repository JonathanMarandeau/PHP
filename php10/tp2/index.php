<?php 
include 'indexController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Partie 10 TP 2</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1 class="text-center">PHP Partie 10 TP 2</h1>
        <div class="container">
            <div class="order">
                <p>Faire une page permettant de saisir les informations suivantes :</p>
                <ul>
                    <li>Civilité (liste déroulante)</li>
                    <li>Nom</li>
                    <li>Prénom</li>
                    <li>Age</li>
                    <li>Société</li>
                </ul>
                <p>A la validation, les données saisies devront aparaitre sous le formulaire. Attention les données devront rester dans les différents éléments du formulaire même après la validation.</p>
            </div>
        </div>
        <h2 class="text-center">Enregistrez-Vous</h2>
        <div class="content">
            <div class="container">
            <!--Création du formulaire-->
            <form method="POST" action="index.php">
                <!-- Partie du formulaire pour le choix de la civilité -->
                <div class="form-row">
                    <div class="form-group">
                        <!-- Je crée le label du form -->
                        <div class="labelCivility">
                            <label for="civility">Civilité</label>
                        </div>
                        <div class="inputCivility">
                            <!-- Je crée la liste déroulante pour le choix de la civilité -->
                            <select class="civilityChoice" name="civility">
                                <!-- On affiche en premier "Choix" mais on le rend inselectionnable -->
                                <option selected disabled >Choix</option>
                                <option value="1" <?= isset($_POST['civility'] ) && $_POST['civility'] == 1 ? 'selected' : ''; ?>>Mademoiselle</option>
                                <option value="2" <?= isset($_POST['civility'] ) && $_POST['civility'] == 2 ? 'selected' : ''; ?>>Madame</option>
                                <option value="3" <?= isset($_POST['civility'] ) && $_POST['civility'] == 3 ? 'selected' : ''; ?>>Monsieur</option>
                            </select>
                            <p class="text-danger"><?= isset($formErrorMessage['civility']) ? $formErrorMessage['civility'] : '' ?></p>
                        </div>
                    </div>
                </div>
                <!-- Partie du formulaire pour le nom, prénom et l'âge -->
                <div class="form-row">
                    <div class="form-group col-lg-4">
                        <!-- Je crée le label pour le nom -->
                        <div class="lastnameForm">
                            <label for="lastname">Nom</label>
                        </div>
                        <!-- Je crée l'input pour le nom -->
                        <div class="inputLastname">
                            <input type="text" name="lastname" value="<?= isset($lastname) ? $lastname : '' ?>" placeholder="Votre nom" />
                            <p class="text-danger"><?= isset($formErrorMessage['lastname']) ? $formErrorMessage['lastname'] : '' ?></p>
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <!-- Je crée le label pour le prénom -->
                        <div class="firstnameForm">
                            <label for="firstname">Prénom</label>
                        </div>
                        <!-- Je crée l'input pour le prénom -->
                        <div class="inputFirstname">
                            <input type="text" name="firstname" value="<?= isset($firstname) ? $firstname : '' ?>" placeholder="Votre prénom" />
                            <p class="text-danger"><?= isset($formErrorMessage['firstname']) ? $formErrorMessage['firstname'] : '' ?></p>
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <!-- Je crée le label pour l'âge -->
                        <div class="ageForm">
                            <label for="age">Votre âge</label>
                        </div>
                        <!-- Je crée l'input pour l'âge -->
                        <div class="inputAge">
                            <input type="number" name="age" value="<?= isset($age) ? $age : '' ?>" min="14" max="110" />
                            <p class="text-danger"><?= isset($formErrorMessage['age']) ? $formErrorMessage['age'] : '' ?></p>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <!-- Je crée le label pour la société -->
                        <div class="societyForm">
                            <label for="society">Votre société</label>
                        </div>
                        <!-- Je crée l'input pour le nom de la société -->
                        <div class="inputSociety">
                            <input type="text" name="society" value="<?= isset($society) ? $society : '' ?>" placeholder="Le nom de votre société" />
                            <p class="text-danger"><?= isset($formErrorMessage['society']) ? $formErrorMessage['society'] : '' ?></p>
                        </div>
                    </div>
                </div>
                <div class="buttonSend text-center">
                    <!-- Je crée le boutton pour envoyer le formulaire -->
                    <input type="submit" name="sendForm" value="Envoyer" />
                </div>
            </form>
            </div>
        </div>
        <div class="container">
            <div class="resultRecap">
                 <?php
                    // Si il n'y a pas d'erreur dans le tableau et qu'on valide le formulaire
                    if (count($formErrorMessage) == 0 && isset($_POST['sendForm'])){
                    // J'affiche le resulat                     
                ?>
                <h2 class="text-center">Données que vous avez indiqués</h2>
                <!-- J'affiche les données sélectionnés dans le formulaire une fois celui-ci validé -->
                    <p><span class="formResult">Civilité : </span><?= $civility ?></p>
                    <p><span class="formResult">Nom : </span><?= $lastname ?></p>
                    <p><span class="formResult">Prénom : </span><?= $firstname ?></p>
                    <p><span class="formResult">Age : </span><?= $age ?></p>
                    <p><span class="formResult">Société : </span><?= $society ?></p>
                    <?php } ?>
            </div>
        </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
