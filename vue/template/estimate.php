
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estimer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../css/estimate.css">
    <link rel="stylesheet" href="../css/header_footer.css">

</head>
<body>

    <?php 
        require '../template/header.php';
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

<form id="estim-1">

    <fieldset class="estimer">

        <h4>Votre bien :</h4>

        <h5>Adresse :</h5>

        <div class="adresse">
            <input type="text" placeholder="   Ex: 121 Rue des Fleurs 87000 Limoges">
        </div>

        <div class="estim-part">
            <div class="estim-part-1">
                <h5>Il s'agit d'un :</h5>

                <div class="selection">
                    <input type="radio" id="Appart" name="group">
                    <label for="Appartement">Appartement</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Home" name="group">
                    <label for="Home">Maison</label>
                </div>
                <div class="selection">
                    <input type="radio" id="other" name="group">
                    <label for="other">Immeuble, Terrain, Local commercial, Parking...</label>
                </div>
            </div>

            <div class="estim-part-2">
                <h5>C'est pour une :</h5>

                <div class="selection">
                    <input type="radio" id="Location" name="interest" value="Location">
                    <label for="Location">Location</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Vente" name="interest" value="Vente">
                    <label for="Vente">Vente</label>
                </div>
            </div>
        </div>

        <div class="estim-home">
        <h5>Surface en m²:</h5>

        <div class="adresse">
            <input type="number" min=0 max=200 placeholder="   m²">
        </div>

        <h5>Surface de terrain:</h5>

        <div class="adresse">
            <input type="number" min=0 placeholder="   m²">
        </div>

        <h5>Nombre de pièces:</h5>

        <div class="adresse">
            <input type="number" min=0 max=200 placeholder="  Hors cuisine, salle de bain et WC">
        </div>

        <h5>Étage de l'appartement:</h5>

        <div class="adresse">
            <input type="number" min=0 max=40 placeholder="   ">
        </div>

        <h5>Nombre d'étages:</h5>

        <div class="adresse">
            <input type="number" min=0 max=40 placeholder="   dans l'immeuble">
        </div>
        
        <div class="swp">
            <button id="togg1" class="precedent">
            <a href="#">Précédent</a>
            </button>
            <button id="togg2" class="suivant">
            <a href="#">Suivant</a>
            </button>
        </div>
    </fieldset>
</form>

<form class="estimer-2" id="estim2">

        <h4>Vos coordonnées :</h4>


        <div class="selection">
            <input type="radio" id="genre" name="group">
            <label for="genre">Monsieur</label>
        </div>

        <div class="selection">
            <input type="radio" id="genre" name="group">
            <label for="genre">Madame</label>
        </div>

        <h5>Nom:</h5>

        <div class="adresse">
            <input type="text" placeholder=" VICTOR">
        </div>

        <h5>Prénom:</h5>

        <div class="adresse">
            <input type="text" placeholder=" Benjamin">
        </div>

        <h5>Email:</h5>

        <div class="adresse">
            <input type="mail" placeholder=" Ex: benjamin@example.com">
        </div>

        <h5>Téléphone:</h5>

        <div class="adresse">
            <input type="tel" placeholder=" 06 08 16 XX XX">
        </div>

        <div class="swp-2">
            <button class="precedent">
            <a href="#">Précédent</a>
            </button>
            <button class="valider">
            <a href="#">Valider</a>
            </button>
        </div>
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
        require '../template/footer.php';
?>

<script src="asset/js/header.js"></script>
<script src="../javascript/estimate.js"></script>
</body>
</html>