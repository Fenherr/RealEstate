<?php

    /*try {
        // Ligne pour se connecter à la base de données...
        $mySqlClient=new PDO('mysql:host=localhost;dbname=acgd_immo;charset=utf8mb4','root','');
        //echo "Youpi !!!";
    }
    catch (Exeption $e) {
        die ('Error'.$e->getMessage());
    }
    $prepareData=$mySqlClient->prepare('SELECT*FROM user');
    $prepareData->execute();
    $datas=$prepareData->fetchAll();
    foreach ($datas as $data) {
    echo $data['firstname'].' '.$data['lastname'];
    }*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./asset/css/header_footer.css">
    <link rel="stylesheet" href="./asset/css/rent.css">
    <script src="./asset/js/header.js" defer></script>
    <script src="./asset/js/rent.js" defer></script>
    
</head>
<body>
    <!--<header class="flex justify-content align-item">    
        <a href="index.html"><img class="logo" src="./asset/images/logo x150.png" alt="logo"></a>
        <nav>
            <ul id="zemenu" class="menu flex justify-content">
                <li><a class="title-txt" href="buy.html">Acheter</a></li>
                <li><a class="title-txt" href="rent.html">Louer</a></li>
                <li><a class="title-txt" href="sell.html">Vendre</a></li>
                <li><a class="title-txt" href="contact.html">Contact</a></li>
            </ul>            
        </nav>
        <div class="logo-mon-compte">
            <a class="active" href="authentification.html"><i class="fa-solid fa-user"></i>Mon compte</a>
        </div>
        <div class="logo-alter">
            <input type="button" id="burger" value="">
        </div>
    </header>-->
     <?php require 'header.php'; ?>
    <main>
        <div>
            <div>
                <picture class="backpict"><img src="./asset/images/rent/picture-title.jpg" alt="Maquette de maison sur l'herbe"></picture>
            </div>
            <div class="title-search">
                <h1>Chercher et trouver une location</h1>
            </div>
        </div>
        <!-- zone globale -->
        <div class="zone0">
            <!-- zone Recherche + zone gauche -->
            <div class="zone1">
                <!-- bloc recherche -->
                <form action="./asset/php/resultsearchrent.php" method="post" id="formu">
                    <div>
                        <label for="localization">Lieu :</label>
                        <input name="local" id="local" type="search" placeholder="Adresse, département, région, etc..." required="required">
                    </div>
                    <div>
                        <label class="lab-pri">Prix :</label>
                        <input name="prize" id="prize" type="number" placeholder="Prix en euros" required="required">
                    </div>
                    <div>
                    </div>
                    <div class="group-button">
                        <!--<select name="distance" id="localization" required="required">
                            <option value="">Périmètre</option>
                            <option value="10Km">10 Km</option>
                            <option value="20km">20 Km</option>
                            <option value="30km">30 Km</option>
                            <option value="departement">Département</option>
                            <option value="region">Région</option>
                        </select>-->
                        <select name="habit" id="" required="required">
                            <option value="">Type de bien</option>
                            <option value="appartement">Appartement</option>
                            <option value="maison">Maison</option>
                        </select>
                        <input class="butt" type="submit" value="Recherche">
                    </div>
                </form>
                <div class="zone3">
                    <!--bloque image gauche-->
                    <div class="zone4">
                        <img src="./asset/images/rent/saint-junien-rue.jpg" alt="Une rue dans Saint Junien">
                    </div>
                    <!--bloque image + texte au-dessus -->
                        <div  class="zone5">
                            <div class="zone6">
                                <h2>Informations sur les services</h2>
                                <p>
                                    Quam quia fugit eum sit. Aut mollitia autem id eaque. Veritatis adipisci dolorem non officiis exercitationem quos aut. Blanditiis eveniet officiis commodi est saepe quis est nihil. Aut blanditiis quisquam ducimus necessitatibus. Sapiente et qui minus reiciendis ut enim quae.
                                </p>
                                <p>
                                    Officia consequatur veniam sit. Hic et est dolor culpa. Sed aspernatur doloribus necessitatibus necessitatibus similique.
                                </p>
                                <p>
                                    Vero labore pariatur non inventore. Error libero similique explicabo fuga dolorum quod ut. Temporibus dolor officiis ratione. Sit accusamus et recusandae culpa. Exercitationem voluptate delectus quia sunt laudantium.
                                </p>
                                <p>
                                    Et temporibus corrupti molestiae ab eos perferendis quibusdam. Amet assumenda et molestiae et. Nesciunt id est eveniet. Tempore est rerum ea dolor voluptatibus exercitationem. Eligendi omnis quis nisi natus corporis. Eaque quo hic et possimus impedit eos.
                                </p>
                                <p>
                                    Odio libero suscipit tempore eum consequatur rem in inventore. Aspernatur officia autem temporibus nostrum architecto fuga. Dolor expedita possimus recusandae culpa veniam. Numquam sit quisquam deserunt et doloremque.
                                </p>
                            </div>
                            <div class="zone7"><img class="pict" src="./asset/images/rent/maison.jpg" alt="Une maison"></div>
                        </div>
                </div>
            </div>
            <!-- zone droite + image -->
            <div  class="zone2">
                <div class="zone8">
                    <img class="pict" src="./asset/images/rent/agent-immobilier-visite.jpg" alt="Agent immobilier faisant visiter un appartement">
                </div>
                <div class="zone9">
                    <h2>Liens utiles</h2>
                    <p>
                        Quam quia fugit eum sit. Aut mollitia autem id eaque. Veritatis adipisci dolorem non officiis exercitationem quos aut. Blanditiis eveniet officiis commodi est saepe quis est nihil. Aut blanditiis quisquam ducimus necessitatibus. Sapiente et qui minus reiciendis ut enim quae.
                    </p>
                    <p>
                        Officia consequatur veniam sit. Hic et est dolor culpa. Sed aspernatur doloribus necessitatibus necessitatibus similique.
                    </p>
                    <p>
                        Vero labore pariatur non inventore. Error libero similique explicabo fuga dolorum quod ut. Temporibus dolor officiis ratione. Sit accusamus et recusandae culpa. Exercitationem voluptate delectus quia sunt laudantium.
                    </p>
                    <p>
                        Et temporibus corrupti molestiae ab eos perferendis quibusdam. Amet assumenda et molestiae et. Nesciunt id est eveniet. Tempore est rerum ea dolor voluptatibus exercitationem. Eligendi omnis quis nisi natus corporis. Eaque quo hic et possimus impedit eos.
                    </p>
                    <p>
                        Odio libero suscipit tempore eum consequatur rem in inventore. Aspernatur officia autem temporibus nostrum architecto fuga. Dolor expedita possimus recusandae culpa veniam. Numquam sit quisquam deserunt et doloremque.
                    </p>
                </div>
            </div>
        </div>
    </main>
    <!--<footer>
        <div class="colonne">
            <div class="footer-logo">
                <a href="index.html"><img class="logo" src="./asset/images/logo_white_150.png" alt="Logo" width="150px" height="73px"></a>
                <p>Retrouvez-nous sur les réseaux sociaux</p>

                <ul class="social-media">
                    <li><i  id="fb" class="fa-brands fa-facebook"></i></li>
                    <li><i  id="tw" class="fa-brands fa-x-twitter"></i></li>
                    <li><i  id="insta" class="fa-brands fa-instagram"></i></li>
                </ul>
            </div>
            <div class="footer-queries">
                <div class="footer-services">
                    <h2>Services</h2>

                    <ul class="flex">
                        <li><a href="buy.html">Achat</a></li>
                        <li><a href="sell.html">Vendre</a></li>
                        <li><a href="rent.html">Louer</a></li>
                    </ul>
                </div>
                <div class="footer-access">
                    <h2>Accès rapide</h2>

                    <ul class="flex">
                        <li><a href="newsletter registration.html">Inscription newsletter</a></li>
                        <li><a href="aboutus.html">Qui sommes-nous ?</a></li>
                        <li><a href="offers.html">Nos offres d'emploi</a></li>
                        <li><a href="customer-feedback.html">Avis client</a></li>
                        <li><a href="sitemap.html">Plan du site</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h2>Contact</h2>

                    <ul class="flex">
                        <li><a href="tel:06.08.16.45.22">06.08.16.45.22</a></li>
                        <li><a href="mailto:contact@acgdimmo.fr">contact@acgdimmo.fr</li></a>
                        <li><a target="_blank" href="https://www.google.fr/maps/place/87200+Saint-Junien/@45.8964635,0.802924,12z/data=!3m1!4b1!4m6!3m5!1s0x47feeadaef87b0c9:0x8b265b0dc126d53e!8m2!3d45.88716!4d0.901165!16zL20vMDh6Xzkz?entry=ttu">Saint-Junien</a></li>
                    </ul>
                </div>
                </div>
            </div>
                <div class="copyright">
                    <p>acgdimmo©</p>
                </div>
        
        </footer>-->
        <?php require 'footer.php'; ?>
</body>
</html>