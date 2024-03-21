<?php
    // Recovery form entries 
    $nomPrize=((int)($_POST["prize"]));
                //$nomDistance="<p>Périmètre de recherche :  ".($_POST["distance"])."</p>";
                $nomLocal='"'.htmlspecialchars($_POST["local"]).'"';
                $nomTypeHouse='"'.($_POST["habit"]).'"';
                //echo $nomLocal;
                //echo gettype($nomPrize);
                //echo $nomPrize;
                //echo $nomDistance;
                //echo $nomTypeHouse;
    // Data connection
    require '../modele/connect_base.php';
    // Data processing
    require '../modele/recoveryResultDtRent.php';
    // Results display
    require '../vue/template/listRent.php';
?>