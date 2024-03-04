<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/inscription.css">
    <title>inscrition</title>
</head>
<body>
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
            <a class="active" href="#Mon compte"><i class="fa-solid fa-user"></i> Mon compte</a>
        </div>
       
        <div id="root">
            <div id="topnav" class="topnav">
              <a id="home_link" class="topnav_link" href="/">HOME</a>
          
              <!-- Classic Menu -->
              <nav role="navigation" id="topnav_menu">
                <a class="topnav_link" href="/about">ABOUT</a>
                <a class="topnav_link" href="/contact-us">CONTACT</a>
              </nav>
          
              <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
                <!-- Some spans to act as a hamburger -->
                <span></span>
                <span></span>
                <span></span>
              </a>
          
              <!-- Responsive Menu -->
              <nav role="navigation" id="topnav_responsive_menu">
                <ul>
                  <li><a href="/">HOME</a></li>
                  <li><a href="/acceuil">acceuil</a></li>
                  <li><a href="/acheter">acheter</a></li>
                  <li><a href="/louer">louer</a></li>
                  <li><a href="/vendre">vendre</a></li>
                  <li><a href="/contact">contact</a></li>
                  <li><a href="/se connecter">se connecter</a></li>
                </ul>
              </nav>
            </div>
        </div>
    </header>



     <!-- Accueil
    Acheter
    Louer
    Vendre
    Contact
    Se connecter -->
    

    











    <div class="parent">

        <div class=" container">
            <form action="" method="post">

                <h2> Inscription </h2>
                <div class="content">
                    <div class="input-box">
                        <label for="name">full Name</label>
                        <input type="text" placeholder="enter full Name" name="Name" required>
                    </div>
                <div class="input-box">
                    <label for="username">username</label>
                    <input type="text" placeholder="enter username" name="uname" required>
                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" placeholder="enter your valid email" name="email" required>
                </div>
                <div class="input-box">
                    <label for="phone">phone Number</label>
                    <input type="tel" placeholder="enter phone number" name="phone" required>
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" placeholder="enter new password" name="password" required>
                </div>
                <div class="input-box">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" placeholder="confirm your password" name="confirmPassword" required>
                </div>
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name=" gender" id="homme">
                    <label for="homme">Homme</label>
                    <input type="radio" name="  gender" id="Femme">
                    <label for="femme">Femme</label>
                <!--<input type="radio" name="gender" id="autre">
                    <label for="autre">autre</label> !-->
                </div>
                </div>
                <div class="alert">
                    <p>By cliking sign up, you agree to our <a href="#">Terms,</a> <a href="#">privacy policy</a> and <a 
                        href="#">Cookies policy.</a> You may receive SMS motifications from us and can opt out at my any time.</p>     
                </div>

                <div class="button-container">
                        <button type="submit">Register</button>
                </div>

            </form>
                
        </div>

        <div class="image">
            <img class="test" src="asset/images/agent-immobilier-ecologie.jpeg" alt="image agent-immobilier-ecologie"  >    
        </div>

    </div>
       
        </body>












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
    <script src="./asset/js/inscription.js" > </script>
</body>
</html>
   

















    
  