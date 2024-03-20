<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/724458d0e8.js" crossorigin="anonymous"></script>
    <script src="./asset/js/header.js" defer></script>
    <script src="./asset/js/index.js" defer></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap');
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto">
    <title>Article</title>
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/index.css">

</head>

<?php
require '../php/connect_index.php';

include 'C:\laragon\www\RealEstate/header.php';

if(!isset($_GET["id"]) || empty($_GET["id"])){
    header("location: list_articles_index.php");
    exit;
}

$id = $_GET["id"];

$sql = "SELECT * FROM `articles` WHERE `id` = :id";

$requete = $db->prepare($sql);

$requete->bindValue(":id", $id, PDO::PARAM_INT);

$requete->execute();

$article = $requete->fetch();

if(!$article) {
    http_response_code(404);
    echo "Article inexistant";
    exit;
}

$titre = strip_tags($article["title"]);

?>

<article>
    <h1><?= strip_tags($article["title"])?></h1>
    <p><?= strip_tags($article["created_at"])?></p>
    <div><?= strip_tags($article["content"])?></div>
</article>

<?php include 'C:\laragon\www\RealEstate/footer.php'; ?>