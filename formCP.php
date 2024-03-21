<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire compte</title>
</head>

<style>
        h1{
            text-align: center;
        }
        .formulaire{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

        }
       
    </style>

<h1>CréationProjet</h1>
<body>
    <?php 
        require_once('connexion.php');
        if (!isset($_GET['connexion.php'])) {
    ?>
    <form class="formulaire" method="GET">
        <label for="fnomprojet">Nom du Projet :</label>
        <input class="formulaire__nomproj" type="text" id="nomProjet" name="nomProjet"><br>
        <label for="fdescription">Déscription du Projet :</label>
        <input class="formulaire__description" type="text" id="descriptionProjet" name="descriptionProjet"><br>
        <label for="fcategorie">Catégorie :</label>
        <select name="categorie">
            <option value=1>Workshop</option>
            <option value=2>OpenInnovation</option>
            <option value=3>Autres</option>
        </select>  
        <button type="submit">envoyer</button><br>
    </form>
<?php}  else {?>
     
</body>
<?php
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
}
?>
</html>
