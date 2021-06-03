<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
require_once 'classes/utilisateur.php';

// Liste des lieux
$sql = "SELECT * 
                FROM Utilisateur
                ORDER BY ID_utilisateur";
// Préparation de la requête
$requete = $pdo->prepare($sql);

// Tableau qui contiendra la liste des utilisateurs
$liste = array();

// Si la requête renvoie quelque chose
if ($requete->execute()) {
    // Parcours des résultats
    while ($donnees = $requete->fetch()) {
        $user = new Utilisateur(
            $donnees['ID_utilisateur'],
            $donnees['pseudo'],
            $donnees['password'],
            $donnees['etablissement'],
            $donnees['datecrea'],
            $donnees['email'],
            $donnees['photo']
        );
        $liste[] = $user;
    }
}
echo json_encode($liste);
exit();
