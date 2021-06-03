<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription - aidTudes</title>

    <link rel="icon" href="favicon.png">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">

    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/couleur-et-typographie.css">
    <link rel="stylesheet" href="css/mise-en-page.css">
    <link rel="stylesheet" href="css/elements-graphiques.css">

    <!--    Script Captcha de google-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>
<body>

<header id="header">
    <a href="index.html">
        <img src="img/aidtude-logo-contours.svg" alt="Index">
    </a>
    <div class="nav-toggle" onclick="document.documentElement.classList.toggle('menu-open')">
        <div class="nav-toggle-bar"></div>
    </div>
    <nav class="menu">
        <ul>
            <li><a href="accueil.html">Accueil</a></li>
            <li><a href="notifications.html">Notifications</a></li>
            <li><a href="matieres.html">Toutes les matières</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Inscription</h1>

    <a href="connexion.html"><p>Déjà inscrit ? Connecte-toi ici.</p></a>

    <form action="php/inscription_traitement.php" method="post" id="contact-form">

        <?php
        if (isset($_GET['reg_err'])) {
            $err = htmlspecialchars($_GET['reg_err']);

            switch ($err) {
                case 'success':
                    ?>
                    <div class="alert alert-success"
                         style="margin: 1em;
    font-family: 'Barlow', sans-serif;">
                        <strong>Succès</strong> inscription réussie !
                    </div>
                    <?php
                    break;

                case 'password':
                    ?>
                    <div class="alert alert-danger"
                         style="margin: 1em;
    font-family: 'Barlow', sans-serif;">
                        <strong>Erreur</strong> mot de passe différent
                    </div>
                    <?php
                    break;

                case 'email':
                    ?>
                    <div class="alert alert-danger"
                         style="margin: 1em;
    font-family: 'Barlow', sans-serif;">
                        <strong>Erreur</strong> email non valide
                    </div>
                    <?php
                    break;

                case 'email_length':
                    ?>
                    <div class="alert alert-danger"
                         style="margin: 1em;
    font-family: 'Barlow', sans-serif;">
                        <strong>Erreur</strong> email trop long
                    </div>
                    <?php
                    break;

                case 'pseudo_length':
                    ?>
                    <div class="alert alert-danger"
                         style="margin: 1em;
    font-family: 'Barlow', sans-serif;">
                        <strong>Erreur</strong> pseudo trop long
                    </div>
                <?php
                case 'already':
                    ?>
                    <div class="alert alert-danger"
                         style="margin: 1em;
    font-family: 'Barlow', sans-serif;">
                        <strong>Erreur</strong> compte deja existant
                    </div>
                <?php

            }
        }
        ?>

        <label><input type="text"
                      name="pseudo"
                      class="form-control"
                      placeholder="Pseudo"
                      required="required"
                      autocomplete="off">
        </label>

        <label>
            <input type="email"
                   name="email"
                   class="form-control"
                   placeholder="Email"
                   required="required"
                   autocomplete="off">
        </label>

        <label><input type="password"
                      name="password"
                      class="form-control"
                      placeholder="Mot de passe"
                      required="required"
                      autocomplete="off">
        </label>

        <label>
            <input type="password"
                   name="password_retype"
                   class="form-control"
                   placeholder="Re-tapez le mot de passe"
                   required="required"
                   autocomplete="off">
        </label>

        <label>
            <input type="text"
                   name="etablissement"
                   class="form-control"
                   placeholder="Nom de votre établissement"
                   required="required"
                   autocomplete="off">
        </label>

        <br>

        <label>Choisis une/des matière(s) où tu pourrais aider
            <select multiple name="matieres-aidant" id="matiere-select-2">
                <option value="histoire">Histoire Géographie</option>
                <option value="litterature">Littérature, langues et cultures de l'antiquité</option>
                <option value="humanites">Humanités, littérature et philosophie</option>
                <option value="art">Arts</option>
                <option value="langues">Langues, littératures et cultures étrangères</option>
                <option value="maths">Mathématiques</option>
                <option value="ses">Sciences économiques et sociales</option>
                <option value="numerique">Numérique et sciences informatiques</option>
                <option value="svt">SVT</option>
                <option value="physique">Physique Chimie</option>
                <option value="biologie">Biologie, écologie</option>
                <option value="ingenieur">Sciences de l'ingénieur</option>
            </select>
        </label>

        <br>

        <label>Choisis une/des matière(s) où tu aurais besoin d'aide
            <select multiple name="matieres-aide" id="matiere-select">
                <option value="histoire">Histoire Géographie</option>
                <option value="litterature">Littérature, langues et cultures de l'antiquité</option>
                <option value="humanites">Humanités, littérature et philosophie</option>
                <option value="art">Arts</option>
                <option value="langues">Langues, littératures et cultures étrangères</option>
                <option value="maths">Mathématiques</option>
                <option value="ses">Sciences économiques et sociales</option>
                <option value="numerique">Numérique et sciences informatiques</option>
                <option value="svt">SVT</option>
                <option value="physique">Physique Chimie</option>
                <option value="biologie">Biologie, écologie</option>
                <option value="ingenieur">Sciences de l'ingénieur</option>
            </select>
        </label>

        <div class="g-recaptcha" data-sitekey="6LeM1gIbAAAAALdRkWMlm3aI4FFxc8Cc8Xo2zLFg"></div>

        <input type="submit" class="form-control submit" value="S'inscrire">

    </form>

    <p>En vous inscrivant, vous acceptez <a href="pages/conditions-utilisation.html">les Conditions Générales
            d'Utilisation</a> et la <a href="pages/confidentialite.html">Politique relative à la vie privée.</a></p>

</main>

</body>
</html>