<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'laura.taormina@gmail.com';

$email_subject = "Contact";

$email_body = "Nom de l'utilisateur : $name.\n" .
    "Email de l'utilisateur : $visitor_email.\n" .
    "Message de l'utilisateur : $message.\n";

$to = "laura.taormina@gmail.com";

mail($to, $email_subject, $email_body);

$headers = "De : $email_from";

header("Location:contact.html");
