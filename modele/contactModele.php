<!-- php connection to secure database-->
<?php
    //files inclusion
    require_once('./asset/php/connect_base.php');

    //check connection secure
    try {
        $conn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';
        $mySqlClient=new PDO ($conn,DB_USER,DB_PASSWORD);
    }
    catch (Exception $e) {
        die ('Error'.$e->getMessage());
    }
    ?>

<!-- database test--> 
    <?php
    /*//request
    $prepareData=$mySqlClient->prepare('SELECT * FROM user');
    //execute
    $prepareData->execute();
    $datas=$prepareData->fetchAll();
    //check & display
    foreach ($datas as $data){
        echo $data['firstname'];
    }*/
    ?>

<!--cookie insertion-->       
<?php 
setcookie('cookieForm', 'requiredFields', time()+182.5*24*3600, '/', '', true, true);
?>


 