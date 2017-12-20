<?php
    $host = "localhost";
    $user = "root";
    $password = "03121996";
    $db = "shop";


    $connection = mysqli_connect($host,$user,$password,$db);
    $connection->set_charset("utf8");
     if(!$connection){
        die("Connection failed: " . mysql_error());
    }
?>