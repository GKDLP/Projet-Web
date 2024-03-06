<?php
require_once('connexion.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nomProjet = ($_GET["nomProjet"]);
    $DescriptionProjet = ($_GET["descriptionProjet"]);
    $stmt = $pdo->prepare('INSERT INTO projet (nomProjet, descriptionProjet) VALUES (?, ?)');
        $stmt->execute([$nomProjet, $DescriptionProjet]);
    $Categorie = ($_GET["categorie"]);
    $stmt = $pdo->prepare('INSERT INTO categorie (label) VALUES (?)');
        $stmt->execute([$Categorie]);
}
?>