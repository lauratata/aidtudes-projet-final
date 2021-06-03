<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
require_once 'classes/forum.php';

// Liste des lieux
$sql = /** @lang text */
    "SELECT * 
                FROM Forum
                ORDER BY ID_publication";
// Préparation de la requête

$requete = $pdo->prepare($sql);

// Tableau qui contiendra la liste des posts
$liste = array();

// Si la requête renvoie quelque chose
if ($requete->execute()) {
    // Parcours des résultats
    while ($donnees = $requete->fetch()) {
        $post = new Forum(
            $donnees['ID_publication'],
            $donnees['datecrea'],
            $donnees['sujet']
        );
        $liste[] = $post;
    }
}
echo json_encode($liste);
exit();
