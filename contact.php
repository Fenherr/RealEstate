<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    <!--lien pour bonhomme-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./asset/css/contact.css">
</head>

<body>
<!--header commun-->
    <header class="flex justify-content align-item">    
        <a href="index.html"><img class="logo" src="./asset/images/logo x150.png" alt="logo"></a>
        <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
        <nav>
            <ul class="menu flex justify-content">
                <li><a class="title-txt" href="buy.html">Acheter</a></li>
                <li><a class="title-txt" href="rent.html">Louer</a></li>
                <li><a class="title-txt" href="sell.html">Vendre</a></li>
                <li><a class="title-txt" href="contact.html">Contact</a></li>
            </ul>            
        </nav>
        <div class="logo-mon-compte">
            <a class="active" href="authentification.html"><i class="fa-solid fa-user"></i> Mon compte</a>
        </div>
    </header>

<main>
    <div class="background-picture">
        <div class="wallpaper"></div>
        <section class="page-title">
            <article class="contact">
                <h1>NOUS CONTACTER</h1>
                <p><i>Nous nous engageons à vous répondre sous 48h ouvrés</i></p>
            </article>
        </section>

        <section class="phone-numbers">
            <article class="phone">
                <p><strong>Pour une question relative à une annonce :</strong></p>
                <p><i>Contacter l'agence au 01.02.03.04.05</i></p>
            </article>
            <article class="phone">
                <p><strong>Pour une prise de rendez-vous pour une visite :</strong></p>
                <p><i>Contacter l'agence au 01.23.45.67.89</i></p>
            </article>
        </section>

        <!--formulaire-->
            <p class="other-request"><strong>Pour toute autre demande, vous pouvez utiliser le formulaire de contact suivant :</strong></p>
        <section class="form">  
            <article class="formatting">
                <form action="form">                
                    <label for="name">
                        <input type="text" id="name" placeholder="Nom* :">
                    </label>

                    <label for="first-name">
                        <input type="text" id="first-name" placeholder="Prénom* :">
                    </label>

                    <label for="email">
                        <input type="email" name="" id="email" placeholder="Email* :">
                    </label>  
                </form>
            </article>

            <article class="formatting">   
                <form action="form"> 
                <div class="subject">
                    <label for="subject-select">Sujet* :</label>
                        <select id="subject-select">
                            <optgroup label="Particuliers">
                                <!--value empty -> subject required --> 
                                <option value=""></option>
                                <option value="Mon espace personnel">Mon espace personnel</option>
                                <option value="Recherche d'un bien">Recherche d'un bien</option>
                                <option value="Vendre son bien">Vendre son bien</option>
                                <option value="L'alerte immo">L'alerte immo</option>
                                <option value="Données personnelles : exercer mes droits">Données personnelles : exercer mes droits</option>
                                <option value="Problèmes techniques sur le site">Problèmes techniques sur le site</option>
                            </optgroup>
                            <optgroup label="Professionnels">
                                <option value="Partenariat">Partenariat</option>
                                <option value="Régie publicitaire">Régie publicitaire</option>
                                <option value="Offres commerciales">Offres commerciales</option>
                            </optgroup>
                        </select>                    
                    </div>

                    <label for="message">
                        <textarea name="textarea" rows="10" cols="63" id="message" placeholder="Votre message* :"></textarea>
                    </label>
                        
                    <button type="submit">Envoyer</button>  
                   
                </form>            
            </article>
        </section>

        <section class="find-us">     
            <article>
                <p class="social-networks"><strong>Retrouvez-nous sur nos réseaux sociaux</strong></p>
                <a href="https://www.facebook.com/"><img src="./asset/images/logos/facebook_f_logo_(2021).svg" alt="logo" width="50" height="50"></a>
                <a href="https://www.instagram.com/"><img src="./asset/images/logos/instagram_logo_2016.svg" alt="logo"width="50" height="50"></a>
                <a href="https://www.youtube.com/"><img src="./asset/images/logos/youtube_social_white_square_(2017).svg" alt="logo" width="50" height="50"></a>
                <a href="https://www.linkedin.com/"><img src="./asset/images/logos/linkedIn_icon.svg" alt="logo"width="50" height="50"></a>
            
                <p class="social-networks"><strong>Et sur l'application</strong></p>
                <a href="googlemybusiness"><img src="./asset/images/logos/Google-My-Business_logo.svg" alt="logo"width="50" height="50"></a>
            </article>

            <article class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44427.813926552095!2d0.8441252993535505!3d45.89654548272686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47feeadaef87b0c9%3A0x8b265b0dc126d53e!2s87200%20Saint-Junien!5e0!3m2!1sfr!2sfr!4v1705479222960!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </article>
        </section>

        <p class="fields"> (*) champs obligatoires</p>
        <a href="" class="rgpd">Pour toute demande relative au traitement de vos données personnelles et / ou exercer vos droits, cliquez ici</a>

    </div>
</main>

<!--footer commun-->
<footer>
    <div class="colonne">
        <div class="footer-logo">
            <a href="index.html"><img class="logo" src="./asset/images/logo_white_150.png" alt="Logo" width="150px" height="73px"></a>
            <p>Retrouvez-nous sur les réseaux sociaux</p>

            <ul class="social-media">
                <li><i  id="fb" class="fa-brands fa-facebook"></i></li>
                <li><i  id="tw" class="fa-brands fa-twitter"></i></li>
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

</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
<script src="asset/js/contact.js"></script>
</body>

</html>
