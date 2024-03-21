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
        <p style="text-align:center"><a href="rentVue.php"><button class="butt">Retour</button></a></p>
    </main>
</body>
</html>