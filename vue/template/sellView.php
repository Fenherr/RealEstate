<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../vue/css/header_footer.css" type="text/css">
        <link rel="stylesheet" href="../vue/css/sell.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <title>Page de vente</title>
        <script src="../vue/javascript/sell.js" defer></script>
        <script src="../vue/javascript/header.js" defer></script>
    </head>
    <!-- Pourquoi le logo de l'header n'est pas affiché ?
        pour ce chemin "../vue/css/header_footer.css" plutôt que sans "/vue/" ?
        Pourquoi le css/js du header ne fonctionne pas correctement ?
     -->
    <body>
        <?php
            require_once (__DIR__ . "/header.php");
        ?>  
        <main>
            <div class="top-content flex flex-in-center-column full-width">
                <img src="../vue/images/sell/deventure-maison-pour-vendre.jpg" alt="Photo deventure maison">
                <div class="title-absolute flex-in-center-column">
                    <h1 class="title-txt">Vous souhaitez vendre votre bien ?</h1>
                    <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            
            <section class="flex full-width">
                <article class="step-block flex">
                    <img src="../vue/images/sell/serre-main.png" class="full-width" alt="Photo serrant la main">
                    <div class="flex align-item full-width">
                        <p class="number_point">1</p>
                        <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <button class="info-button" type="button">
                        <strong>Conseils</strong>
                    </button>
                </article>
        
                <article class="step-block flex">
                    <img src="../vue/images/sell/rappel.png" class="full-width" alt="Photo appel téléphonique">
                    <div class="flex align-item full-width">
                        <p class="number_point">2</p>
                        <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <button class="info-button" type="button">
                        <strong>Contactez-nous</strong>
                    </button>
                </article>
            </section>

            <div class="breadcrumb flex">
                <a href="index.html" class="content-text">Accueil</a>
                <p class="content-text">></p>
                <p class="content-text active">Vendre</p>
            </div>
        </main>
        <?php
            require_once (__DIR__ . "/footer.php");
        ?>
    </body>
</html>