<?php
    // Recovery form entries 
    $nomPrize=((int)($_POST["prize"]));
                $nomLocal='"'.htmlspecialchars($_POST["local"]).'"';
                $nomTypeHouse='"'.($_POST["habit"]).'"';
    // Data connection
    require '../modele/connect_base.php';
    // Data processing
    require '../modele/recoveryResultDtRent.php';
    // Results display
    require '../vue/template/listRent.php';
?>