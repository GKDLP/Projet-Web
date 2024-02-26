<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'chercher_image_dans_bdd.php';
    $pdo = pdo_connect_mysql();
    $stmt = $pdo->prepare('SELECT * FROM projet');
    $stmt->execute();
    $projets = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
    <div class="content read">
        <h2>Liste des projets</h2>
        <table>
            <thead>
                <tr>
                    <td>Nom</td>
                    <td>Illustration</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($projets as $projet):
                ?>
                <tr>
                    <td><?php echo($projet['nomProjet'])?></td>
                    <td><img class="images" src="<?php echo($projet['illustration'])?>"></td>
                </tr>
                <?php endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>

<style>
    .images{
        width : 200px;
        height: 200px;
    }
    td{
        border : bold;
    }
    
</style>
</html>