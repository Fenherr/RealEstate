<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../../asset/css/header_footer.css">
    <link rel="stylesheet" href="../css/rent.css">
    <script src="../../asset/js/header.js" defer></script>
    <script src="../javascript/rent.js" defer></script>
    
</head>
<body>
   
     <?php require 'header.php'; ?>
    <main>
        <div>
            <div>
                <picture class="backpict"><img src="../../asset/images/rent/picture-title.jpg" alt="Maquette de maison sur l'herbe"></picture>
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
                <form action="resultsearchrent.php" method="post" id="formu">
                    <div>
                        <label for="localization">Lieu :</label>
                        <input name="local" id="local" type="search" placeholder="Localité, ville, lieu-dit,..." required="required">
                    </div>
                    <div>
                        <label class="lab-pri">Prix :</label>
                        <input name="prize" id="prize" type="number" placeholder="Prix en euros" required="required">
                    </div>
                    <div>
                    </div>
                    <div class="group-button">
                        
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
                        <img src="../../asset/images/rent/saint-junien-rue.jpg" alt="Une rue dans Saint Junien">
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
                            <div class="zone7"><img class="pict" src="../../asset/images/rent/maison.jpg" alt="Une maison"></div>
                        </div>
                </div>
            </div>
            <!-- zone droite + image -->
            <div  class="zone2">
                <div class="zone8">
                    <img class="pict" src="../../asset/images/rent/agent-immobilier-visite.jpg" alt="Agent immobilier faisant visiter un appartement">
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
    
        <?php require 'footer.php'; ?>
</body>
</html>