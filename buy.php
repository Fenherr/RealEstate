<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy real estate</title>
    <link rel="stylesheet" href="asset/css/header_footer.css">
    <link rel="stylesheet" href="asset/css/buy.css">
    <script src="asset/js/header.js" defer></script>

</head>

<body>

    <?php
        require 'header.php';
    ?>

    <h1>
        Acheter un bien immobilier
    </h1>

    <div class="background">

        <div class="bandeau_groupe">

            <div class="premier_bandeau_div">
                <ul class="premier_bandeau">
                    <li class="bandeau_localisation">Localisation</li>
                    <li class="bandeau_budget_max">Budget max</li>
                    <li class="bandeau_surface">Surface</li>
                    <li class="bandeau_type_de_logement">Type de logement</li>
                </ul>
            </div>

            <div class="deuxième_bandeau_div">
                <ul class="deuxième_bandeau">
                    <li class="bandeau_ville"><input type="text" placeholder="Ville, région..."></li>
                    <li class="bandeau_euros"><input type="text" placeholder="€"></li>
                    <li class="bandeau_superficie"><input type="text" placeholder="Superficie m²"></li>
                    <li class="bandeau_maison_appartement"><input type="text" placeholder="Maison, appartement..."></li>
                </ul>
            </div>

        </div>

        <div class="div_rechercher">
            <button class="bouton_rechercher">
                Rechercher
            </button>
        </div>

        <div>
            <a class="dernières_annonces" href="">Dernières annonces</a>
        </div>

        <div class="photos_maison">
            <img class="première_image" src="asset/images/buy/Photo mockup 1_600x450.jpg" alt="">
            <img class="deuxième_image" src="asset/images/buy/Photo mockup 2.jpeg" alt="">
        </div>

        <div class="textes_maisons">
            <ul>
                <li class="texte_maison_un">Maison 5 pièces 145 m² Limoges 270 000€</li>
                <li class="texte_maison_deux">Maison 6 pièces 178 m² Limoges 310 000€</li>
            </ul>
        </div>

    </div>

    <?php
        require 'footer.php';
    ?>

</body>


</html>