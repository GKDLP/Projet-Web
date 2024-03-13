<?php
require_once('connexion.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nom = ($_GET["nom"]);
    $prenom = ($_GET["prenom"]);
    $email = ($_GET["email"]);
    $pseudo = ($_GET["pseudo"]);
    $password = ($_GET["password"]);
    $stmt = $pdo->prepare('INSERT INTO users (nomUser, prenomUser, email, Pseudo) VALUES (?, ?, ?, ?)');
        $stmt->execute([$nom, $prenom, $email, $pseudo]);
}
?>