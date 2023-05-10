<?php
    // $host = "localhost",
    // $user = "zany1346",
    // $pw =  "a1346792580!"
    // $db = "zany1346",
    // $connect = new mysqli($host, $user, $pw, $db);
    // $connect -> set_charset("utf-8");

    // if(mysqli_connect_errno()){
    //     echo "Database Connect false";
    // } else {
    //     echo "Database Connect true";
    // }
?>
<?php
    $host = "localhost";
    $user = "root";
    $pw =  "root";
    $db = "phpclass";
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf-8");

    if(mysqli_connect_errno()){
        echo "Database Connect false";
    } else {
        // echo "Database Connect true";
    }
?>