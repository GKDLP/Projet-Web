<?php
require_once('connexion.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nomProjet = ($_GET["nomProjet"]);
    $DescriptionProjet = ($_GET["descriptionProjet"]);
    $stmt = $pdo->prepare('INSERT INTO projet (nomProjet, descriptionProjet) VALUES (?, ?)');
        $stmt->execute([$nomProjet, $DescriptionProjet]);
    $last_id = $pdo->LastInsertId();
    $idProjet = $last_id;
    $Categorie = ($_GET["categorie"]);
    $stmt = $pdo->prepare('INSERT INTO appartenir (idProjet, idCategorie) VALUES (?, ?)');
        $stmt->execute([$idProjet, $Categorie]);
}
?>