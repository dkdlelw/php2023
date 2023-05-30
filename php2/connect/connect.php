<?php
    $host = "localhost";
    $user = "kshkmn0929";
    $pw = "k020929!";
    $db = "kshkmn0929";
    $connect = new mysqli($host,$user,$pw,$db);
    $connect -> set_charset("utf-8");
    
    if(mysqli_connect_errno()){
        echo "Database Connect false";
    } else {
        // echo "Database Connect True";
    }
?>