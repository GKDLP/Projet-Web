<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_NAME = 'wiki';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST .';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>