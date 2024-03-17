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
             
             $nomPrize=(int)($_POST["prize"]);
             //$nomDistance="<p>Périmètre de recherche :  ".($_POST["distance"])."</p>";
             $nomLocal='"'.htmlspecialchars($_POST["local"]).'"';
             $nomTypeHouse='"'.($_POST["habit"]).'"';
             //echo $nomLocal;
             //echo gettype($nomPrize);
             //echo $nomDistance;
             //echo $nomTypeHouse;
             require '../../connect_index.php';
             // Requête préparée...
            $prepareData=$mySqlClient->prepare("SELECT descrip FROM `house` WHERE type=$nomTypeHouse AND search_zone=$nomLocal AND price<=$nomPrize ORDER BY price DESC;");
            $prepareData->execute();
            $datas=$prepareData->fetchAll();
            echo "<h2>Locations disponibles :</h2>";
            // Parcours la table...
            foreach ($datas as $data) {
                echo "<p>".$data['descrip']."<p>";
            }
            // Résultat de la recherche négatif...
            if ($datas==NULL) {
                echo "<p>Aucun résultat...<p>";
            }
            //print_r($_POST);
        ?>
        <p style="text-align:center"><a href="../../rent.php"><button class="butt">Retour</button></a></p>
    </main>
</body>
</html>