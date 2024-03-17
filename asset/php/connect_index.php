<?php
define("DBHOST", "localhost");
define("DBUSER", "root"); 
define("DBPASS", ""); 
define("DBNAME", "acgd_immo");

$dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

try{
    
    $db = new PDO($dsn, DBUSER, DBPASS);

  echo "Connexion OK <br>";

   $db->exec("SET NAMES utf8"); 

}catch(PDOException $e){
    die("Erreur:".$e->getMessage());
}
?>