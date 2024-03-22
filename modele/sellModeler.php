<?php
    require_once("../../secure-connect.php");
    
    try {
        $dsn = "mysql:host={$db_host}; dbname={$db_name}; charset=utf8mb4";
        $mySQLClient = new PDO($dsn, $username, $password);
    }
    catch (Exception $e) {
        die('error' . $e->getMessage());
    }