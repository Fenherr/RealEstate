<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="asset/js/header.js" defer></script>
    <link rel="stylesheet" href="./asset/css/header_footer.css">
    <link rel="stylesheet" href="./asset/css/inscription.css">
    <title>inscrition</title>
</head>



<body>


<?php
require 'header.php';
?>

    


    











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
       


    <?php
     require 'footer.php';
    ?>










</body>
</html>
   

















    
  