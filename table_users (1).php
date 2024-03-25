<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "connexion.php";
    include "header.php";
    include "footer.php";
   # $pdo = pdo_connect_mysql();
    $stmt = $pdo ->prepare('SELECT* FROM users');
    $stmt ->execute();
    $users = $stmt-> fetchALL(PDO::FETCH_ASSOC);
    ?>
    
    <div>
        <h2>Liste des utilisateurs </h2>
</div>
        <table>
            <thead>
                <tr>
                    <th>Nom </th>
                    <th>Prenom </th>
                    <th>Email </th>
                    <th>Date d'inscription </th>
                </tr>
</thead>
<tbody>
    <?php
    foreach($users as $user):
        ?>
        <tr>
            <td><?php echo($user['nomUser'])?> </td>
            <td><?php echo($user['prenomUser'])?></td>
            <td><?php echo($user['email'])?></td>
            <td><?php echo($user["dateInscription"])?></td>
    </tr>
    <?php endforeach;
        ?>

    <style>
    h2{
        display: flex;
        font-size: 2.5rem;
        margin: auto;
        width: 100%;
        height: 60%;
        text-align: center;
        letter-spacing: 5px;
        padding: 25px;

    }

    table, tr, th, td{
        border: 1px solid;
        width: 50%;    
    }
    body{
        padding: 20px;
        background: rgb(228,128,62);
    }


        </style>
</tbody>
</body>
</html>