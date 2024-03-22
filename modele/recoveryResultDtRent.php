<?php
try {
            // Ligne pour se connecter à la base de données...
                        $mySqlClient=new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4',DB_USER,DB_PASSWORD);
                        
            }
            catch (Exeption $e) {
                        die ('Error'.$e->getMessage());
            }
             // Requête préparée...
            $prepareData=$mySqlClient->prepare("SELECT descr,price FROM houses INNER JOIN search ON houses.id_area=search.id WHERE area=$nomLocal AND type=$nomTypeHouse AND price<=$nomPrize ORDER BY houses.price DESC;");
            $prepareData->execute();
            $datas=$prepareData->fetchAll();
?>