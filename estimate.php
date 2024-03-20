
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estimer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="asset/css/estimate.css">
    <link rel="stylesheet" href="asset/css/header_footer.css">

</head>
<body>

    <?php 
        require 'header.php';
    ?>

    <?php
        try {
            $mySqlClient = new PDO('mysql:host=localhost;dbname=acgd_immo;charset=utf8mb4','root', '');
        } catch (Exception $e) {
            die ('Error'.$e -> getMessage() );
        }

    ?>


    <!--Partie case estimation-->

    <h3>Vous souhaitez estimer votre bien ?</h3>

<form>

    <fieldset class="estimer">

        <h5>Il s'agit d'un :</h5>

        <div class="selection">
            <input type="radio" id="Appart" name="group">
            <label for="Appartement">Appartement</label>
        </div>
        <div class="selection">
            <input type="radio" id="Home" name="group">
            <label for="Home">Maison</label>
        </div>

        <h5>C'est pour une :</h5>

        <div class="selection">
            <input type="radio" id="Location" name="interest" value="Location">
            <label for="Location">Location</label>
        </div>
        <div class="selection">
            <input type="radio" id="Vente" name="interest" value="Vente">
            <label for="Vente">Vente</label>
        </div>

        <h5>Adresse :</h5>

        <div class="adresse">
            <input type="text" placeholder="   Ex: 121 Rue des Fleurs 87000 Limoges">
        </div>
        <button class="valider">
        <a href="#">Valider</a>
        </button>

    </fieldset>
</form>

<!--Partie information-->

<div class="information">

    <!--1ère infos-->
    
    <fieldset class="estimation-immo">
        <article class="info">
            <h3><a href="#">En quoi consiste l'estimation immobilière ?</a></h3>
            <p>Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit. 
                Duis ultricies pulvinar euismod. </p>
            <button class="ensaone">
            <a href="#">En savoirs plus</a>
            </button>
        </article>
    </fieldset>

    <!--2e infos-->

    <fieldset class="estimation-immo">
        <article class="info">
            <h3><a href="#">Comment faire estimer sa maison ?</a></h3>
            <p>Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit. 
                Duis ultricies pulvinar euismod.</p>
            <button class="ensaone">
            <a href="#">En savoirs plus</a>
            </button>
        </article>
    </fieldset>

</div>

<?php 
        require 'footer.php';
?>

<script src="asset/js/header.js"></script>
</body>
</html>