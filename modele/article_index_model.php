<?php

//query article

//if(!isset($_GET["id"]) || empty($_GET["id"])){
    //header("location: list_articles_index.php");
    //exit;
//}

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