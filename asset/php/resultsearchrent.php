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
             /*
             $nomPrize=((int)($_POST["prize"]));
             //$nomDistance="<p>Périmètre de recherche :  ".($_POST["distance"])."</p>";
             $nomLocal='"'.htmlspecialchars($_POST["local"]).'"';
             $nomTypeHouse='"'.($_POST["habit"]).'"';
             //echo $nomLocal;
             //echo gettype($nomPrize);
             //echo $nomPrize;
             //echo $nomDistance;
             //echo $nomTypeHouse;*/
             require 'connect_base.php';
             //
             require '../../controller/formSearchEntries.php';
            try {
            // Ligne pour se connecter à la base de données...
                        $mySqlClient=new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4',DB_USER,DB_PASSWORD);
                        
            }
            catch (Exeption $e) {
                        die ('Error'.$e->getMessage());
            }
             // Requête préparée...
            $prepareData=$mySqlClient->prepare("SELECT descr,price FROM houses INNER JOIN search ON houses.id_area=search.id WHERE area=$nomLocal AND type=$nomTypeHouse AND price<=$nomPrize ORDER BY houses.price DESC;");
            $prepareData->execute();
            $datas=$prepareData->fetchAll();
            echo "<h2>Locations disponibles :</h2>";
            // Parcours la table...
            foreach ($datas as $data) {
                echo "<p>".$data['descr']."<p>";
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