<?php
session_start(); // demarrage de la session
session_destroy();
header('Location:../index.html'); // On redirige
die();