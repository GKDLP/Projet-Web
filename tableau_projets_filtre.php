<?php
require_once 'pdo_connect.php';

// Récupération des catégories
$pdo = pdo_connect_mysql();
$stmt = $pdo->query('SELECT * FROM categorie');
$categories = $stmt->fetchAll();

// Vérification de la sélection de catégorie
if (isset($_GET['categorie']) && !empty($_GET['categorie'])) {
    $categorieFiltre = $_GET['categorie'];
    $sql = 'SELECT * FROM projet p JOIN appartenir a ON p.idProjet = a.idProjet WHERE a.idCategorie = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$categorieFiltre]);
} else {
    // Aucun filtre, récupération de tous les projets
    $stmt = $pdo->query('SELECT * FROM projet');
}

$projets = $stmt->fetchAll();

// Affichage du menu déroulant pour filtrer par catégorie
echo '<form method="get">';
echo '<select name="categorie">';
echo '<option value="">Toutes les catégories</option>';
foreach ($categories as $categorie) {
    $selected = ($categorieFiltre == $categorie['idCategorie']) ? 'selected' : '';
    echo '<option value="' . $categorie['idCategorie'] . '" ' . $selected . '>' . htmlspecialchars($categorie['label']) . '</option>';
}
echo '</select>';
echo '<input type="submit" value="Filtrer">';
echo '</form>';

// Affichage des projets
foreach ($projets as $projet) {
    echo '<div class="projet">';
    echo '<h3>' . htmlspecialchars($projet['nomProjet']) . '</h3>';
    echo '<p>' . htmlspecialchars($projet['descriptionProjet']) . '</p>';
    echo '<p>Date de création: ' . htmlspecialchars($projet['dateCreation']) . '</p>';
    // Afficher les catégories du projet
    echo '<p>Catégories: ';
    $stmt = $pdo->prepare('SELECT c.label FROM categorie c JOIN appartenir a ON c.idCategorie = a.idCategorie WHERE a.idProjet = ?');
    $stmt->execute([$projet['idProjet']]);
    $categories = $stmt->fetchAll(PDO::FETCH_COLUMN);
    echo implode(', ', $categories);
    echo '</p>';
    echo '</div>';
}
?>
