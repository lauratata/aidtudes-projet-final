<?php

if (isset($_POST['email']) && $email = $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "aidtudes@gmail.com";
        $body = "";

        $body .= "De :" . $name . "\r\n";
        $body .= "Email : " . $email . "\r\n";
        $body .= "Message : " . $message . "\r\n";

        mail($to, $message, $body);

        $message_sent = true;
        $msg = "Votre message a bien été envoyé !";
    }
}

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - aidTudes</title>

    <link rel="icon" href="favicon.png">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">

    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/couleur-et-typographie.css">
    <link rel="stylesheet" href="css/mise-en-page.css">
    <link rel="stylesheet" href="css/elements-graphiques.css">

</head>
<body>

<header id="header">
    <a href="profil.html">
        <img src="img/icones/users.svg" alt="Profil">
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
    <h1>Nous contacter</h1>

    <div class="contact-form">
        <form method="post" action="" id="contact-form">
            <label>
                <input name="name" type="text" class="form-control" placeholder="Ton nom" required>
            </label>
            <label>
                <input name="email" type="email" class="form-control" placeholder="Ton email" required>
            </label>
            <label>
<textarea name="message" class="form-control" cols="30" rows="10" placeholder="Ton message"
          required></textarea>
            </label>
            <input type="submit" class="form-control submit" value="Envoyer">
        </form>
    </div>

    <?php
    if (isset($msg)) {
        echo "<h2>" . $msg . "</h2>";
    }
    ?>

</main>

<footer>
    <img src="img/icones/bell-regular.svg" alt="Notifications">
    <img src="img/icones/envelope-regular.svg" alt="Messages">
</footer>

</body>
</html>