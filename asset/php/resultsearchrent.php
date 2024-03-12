<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/rent.css">
</head>
<body>
    <main>
        <?php 
            //print_r($_POST);
            $nomLocal="<p>Secteur : ".htmlspecialchars($_POST["local"])."</p>";
            $nomPrize="<p>Prix de la location :  ".($_POST["prize"])." €</p>";
            $nomDistance="<p>Périmètre de recherche :  ".($_POST["distance"])."</p>";
            $nomTypeHouse="<p>Type d'habitation :  ".($_POST["habit"])."</p>";
            echo $nomLocal;
            echo $nomPrize;
            echo $nomDistance;
            echo $nomTypeHouse;
        ?>
        <p style="text-align:center"><a href="../../rent.php"><button class="butt">Retour</button></a></p>
    </main>
</body>
</html>