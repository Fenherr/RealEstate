<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qui somme nous ?</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="./asset/js/aboutus.js" defer></script>
    <link rel="stylesheet" href="./asset/css/header_footer.css">
    <script src="./asset/js/header.js" defer></script>
    <link rel="stylesheet" href="./asset/css/aboutus.css">
    <link rel ="icon" type="image/png" href= "./asset/images/logo_white_150.png">
</head>

<body>

<?php
require 'header.php';
?>

<?php 

try{
    $mySqlClient = new PDO('mysql:host=localhost; dbname=acgd_immo; charset=utf8mb4', 'root', '' );
} catch (Exeption $e) {
    die ('Error'. $e -> getMessage());
}

?>

<?php
    $prepareData = $mySqlClient -> prepare('SELECT * FROM user');
    $prepareData -> execute();
    $datas = $prepareData -> fetchAll();

    foreach ($datas as $data) {
        echo $data['firstname'];
}

?>


    <main>
        <section class="qsn">
            <article>
                <div class="rectangle-noir1">
                    <h1>
                        Qui sommes nous ?
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        laoreet et sem id ornare. Vivamus mauris augue,
                        egestas id nisl ac, pulvinar tristique dui. Nam luctus eros nec
                        elit scelerisque eleifend. Donec vestibulum tincidunt
                        consectetur. Curabitur id enim diam. Sed mi diam, porttitor sit
                        amet tincidunt ac, finibus ac tortor. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sequi saepe reiciendis, deleniti eum nam praesentium possimus voluptatem ab, voluptatibus
                        reprehenderit odio laborum ullam. Omnis hic aspernatur ratione, nemo officiis sint.</p>
                </div>
            </article>
        </section>

        <section class="mission">
            <article>
                <div class="rectangle-noir1">
                    <h1>
                        Notre mission
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        laoreet et sem id ornare. Vivamus mauris augue,
                        egestas id nisl ac, pulvinar tristique dui. Nam luctus eros nec
                        elit scelerisque eleifend. Donec vestibulum tincidunt
                        consectetur. Curabitur id enim diam. Sed mi diam, porttitor sit
                        amet tincidunt ac, finibus ac tortor. Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Beatae ad debitis error eaque reprehenderit dolores earum maiores nam harum odit repudiandae,
                        eum eveniet delectus consectetur? Excepturi necessitatibus vel alias quas! </p>
                </div>
            </article>
        </section>

        <section class="équipe">
            <article>
                <div class="rectangle-noir1">
                    <h1>
                        Notre équipe
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        laoreet et sem id ornare. Vivamus mauris augue,
                        egestas id nisl ac, pulvinar tristique dui. Nam luctus eros nec
                        elit scelerisque eleifend. Donec vestibulum tincidunt
                        consectetur. Curabitur id enim diam. Sed mi diam, porttitor sit
                        amet tincidunt ac, finibus ac tortor. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sequi saepe reiciendis, deleniti eum nam praesentium possimus voluptatem ab, voluptatibus
                        reprehenderit odio laborum ullam. Omnis hic aspernatur ratione, nemo officiis sint. </p>
                </div>
            </article>
        </section>

        <section class="valeurs">
            <article>
                <div class="rectangle-noir1">
                    <h1>
                        Nos valeurs
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        laoreet et sem id ornare. Vivamus mauris augue,
                        egestas id nisl ac, pulvinar tristique dui. Nam luctus eros nec
                        elit scelerisque eleifend. Donec vestibulum tincidunt
                        consectetur. Curabitur id enim diam. Sed mi diam, porttitor sit
                        amet tincidunt ac, finibus ac tortor. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Explicabo reiciendis ipsa vero consequatur autem vel eum eius voluptatum dolore facere ex
                        ratione expedita similique ea accusantium est, itaque deleniti deserunt! </p>
                </div>
            </article>
        </section>

        <section class="pourquoi">
            <article>
                <div class="rectangle-noir1">
                    <h1>
                        Pourquoi choisir ACGDIMMO ?
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        laoreet et sem id ornare. Vivamus mauris augue,
                        egestas id nisl ac, pulvinar tristique dui. Nam luctus eros nec
                        elit scelerisque eleifend. Donec vestibulum tincidunt
                        consectetur. Curabitur id enim diam. Sed mi diam, porttitor sit
                        amet tincidunt ac, finibus ac tortor. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        At laboriosam adipisci aperiam reiciendis aspernatur nemo doloremque! Ad repudiandae, beatae
                        dolores, laudantium dolor odio, commodi in reprehenderit aut obcaecati doloremque odit! </p>
                </div>
            </article>
        </section>

        <article class="vert">
            <div class="rectangle-vert">
                <p class="p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed viverra, lorem non placerat congue, erat nunc
                    vulputate ligula. Lorem ipsum dolor sit amet consectetur !</p>
            </div>
        </article>

    </main>

    <?php
require 'footer.php';
?>

</body>

</html>