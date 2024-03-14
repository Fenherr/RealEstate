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
             
             $nomPrize="<p>Prix de la location :  ".($_POST["prize"])." €</p>";
             //$nomDistance="<p>Périmètre de recherche :  ".($_POST["distance"])."</p>";
             $nomLocal='"'.htmlspecialchars($_POST["local"]).'"';
             $nomTypeHouse='"'.($_POST["habit"]).'"';
             echo $nomLocal;
             echo $nomPrize;
             //echo $nomDistance;
             echo $nomTypeHouse;
            try {
                // Ligne pour se connecter à la base de données...
                $mySqlClient=new PDO('mysql:host=localhost;dbname=acgd_immo;charset=utf8mb4','root','');
                //echo "Youpi !!!";
            }
            catch (Exeption $e) {
                die ('Error'.$e->getMessage());
            }
            $prepareData=$mySqlClient->prepare("SELECT descrip FROM `house` WHERE type=$nomTypeHouse AND search_zone=$nomLocal;");
            $prepareData->execute();
            $datas=$prepareData->fetchAll();
            foreach ($datas as $data) {
            echo $data['descrip']."<br>";
            }
            //print_r($_POST);
        ?>
        <p style="text-align:center"><a href="../../rent.php"><button class="butt">Retour</button></a></p>
    </main>
</body>
</html>