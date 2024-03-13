<?php
$dsn = 'mysql:host=localhost;dbname=wiki';
$dsn = 'mysql:host=localhost;dbname=wiki;charset=utf8';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test carte</title>
</head>
<style>
    .GridPrincipale {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 2rem;
        width: 50%;
    }

    .Grid {
        display: grid;
        grid-template-rows: 60% 40%;
        border: black inset 2px;
        width: 100%;
        gap: 10px;
        text-decoration: none;
        transition: transform 0.2s;

    }

    .Grid:hover {
        transform: scale(1.1);
    }

    .GridTitle {
        text-align: center;
        background-color: #FFFAF0;
        font-size: large;
        font-family: Verdana, Tahoma, sans-serif;
    }

    img {
        /*
        width: 100%;
        */
        width: 165px;
        height: 165px;

        margin: auto;
    }

    .container {
        display: flex;
        justify-content: space-around;
    }

    @media (max-width:700px) {
        .GridPrincipale {
            grid-template-columns: 1fr;
        }
    }
</style>

<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    include 'connexion.php';
    $stmt = $pdo->prepare('SELECT * FROM projet ORDER BY idProjet DESC LIMIT 4');
    $stmt->execute();
    $projets = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <section class="container">
        <div class="GridPrincipale">
            <?php foreach ($projets as $projet): ?>
                <a href="#" class="Grid">
                    <img src="<?= $projet['illustration'] ?>" alt="fromDB">
                    <p class="GridTitle">
                        <?= $projet['nomProjet'] ?>
                    </p>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
</body>

</html>
