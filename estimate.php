<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estimer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="asset/css/estimate.css">

</head>
<body>
    <!--Partie Header-->

    <header class="flex justify-content align-item">    
        <a href="index.html"></a><img class="logo" src="./asset/images/logo x150.png" alt="logo">
        <!--<input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
        </label>-->

        <nav>

            <div class="navbar">

                <ul class="menu flex justify-content">
                    <li><a class="title-txt" href="buy.html">Acheter</a></li>
                    <li><a class="title-txt" href="rent.html">Louer</a></li>
                    <li><a class="title-txt" href="sell.html">Vendre</a></li>
                    <li><a class="title-txt" href="contact.html">Contact</a></li>
                </ul> 
                
                <div class="logo-mon-compte">
                    <a class="active" href="#Mon compte"><i class="fa-solid fa-user"></i> Mon compte</a>
                </div>

            </div>

        </nav>

        <div id="mySidenav" class="sidenav">
            <a id="closeBtn" href="#" class="close">x</a>
            <ul id="nav" class="menu flex justify-content">
                <li><a class="title-txt" href="buy.html">Acheter</a></li>
                <li><a class="title-txt" href="rent.html">Louer</a></li>
                <li><a class="title-txt" href="sell.html">Vendre</a></li>
                <li><a class="title-txt" href="contact.html">Contact</a></li>
            </ul>

            <div class="logo-mon-compte">
                <a class="active" href="#Mon compte"><i class="fa-solid fa-user"></i> Mon compte</a>
            </div>

        </div>


        <!--<div id="icons"></div>-->

        <a href="#" id="openBtn">
            <span class="burger-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

    </header>
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

    <footer>
        <div class="colonne">
            <div class="footer-logo">
                <a href="index.html"><img src="./asset/images/logo_white_150.png" alt="Logo"></a>
                <p>Retrouvez-nous sur les réseaux sociaux</p>

                <ul class="social-media">
                    <li><i class="fa-brands fa-facebook"></i></li>
                    <li><i class="fa-brands fa-twitter"></i></li>
                    <li><i class="fa-brands fa-instagram"></i></li>
                </ul>
            </div>

            <div class="footer-services">
                <h2>Services</h2>

                <ul class="flex">
                    <li>Achat</li>
                    <li>Vendre</li>
                    <li>Louer</li>
                </ul>
            </div>
            <div class="footer-access">
                <h2>Accès rapide</h2>

                <ul class="flex">
                    <li>Inscription newsletter</li>
                    <li>Qui sommes-nous ?</li>
                    <li>Nos offres d'emploi</li>
                    <li>Avis client</li>
                    <li>Plan du site</li>
                </ul>
            </div>
            <div class="footer-contact">
                <h2>Contact</h2>

                <ul class="flex">
                    <li>06.08.16.45.22</li>
                    <li>contact@acgdimmo.fr</li>
                    <li>Saint-Junien</li>
                </ul>
            </div>
        </div>
            <div class="copyright">
                <p>acgdimmo©</p>
            </div>
    
    </footer>

<script src="./asset/js/estimate.js"></script>
</body>
</html>