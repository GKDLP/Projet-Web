<?php
require_once('connexion.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nom = ($_GET["nom"]);
    $prenom = ($_GET["prenom"]);
    $email = ($_GET["email"]);
    $password = ($_GET["password"]);
    $stmt = $pdo->prepare('INSERT INTO users (nomUser, prenomUser, email) VALUES (?, ?, ?)');
        $stmt->execute([$nom, $prenom, $email]);
}
?>