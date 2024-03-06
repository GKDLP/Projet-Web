<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "connect.php";
    $pdo = pdo_connect_mysql();
    $stmt = $pdo ->prepare('SELECT* FROM users');
    $stmt ->execute();
    $users = $stmt-> fetchALL(PDO::FETCH_ASSOC);
    ?>
    <div class="content read">
        <h2>Liste des utilisateurs </h2>
        <table>
            <thead>
                <tr>
                    <td>Nom </td>
                    <td>Prenom </td>
                    <td>Email </td>
                    <td>Date d'inscription </td>
                </tr>
</thead>
<tbody>
    <?php
    foreach($users as $user):
        ?>
        <tr>
            <td><?php echo($user['Nom'])?> </td>
            <td><?php echo($user['Prenom'])?></td>
            <td><?php echo($user['Email'])?></td>
            <td><?php echo($user["Date d'inscription"])?></td>
</body>
</html>