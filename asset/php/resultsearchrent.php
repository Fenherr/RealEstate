<?php 
    print_r($_POST);
    $nomLocal="<br>Secteur : ".htmlspecialchars($_POST["local"]);
    $nomPrize="<br>Prix de la location :  ".($_POST["prize"]);
    $nomDistance="<br>Périmètre de recherche :  ".($_POST["distance"]);
    echo $nomLocal;
    echo $nomPrize;
    echo $nomDistance;
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    
</head>
<body>

</body>
</html>