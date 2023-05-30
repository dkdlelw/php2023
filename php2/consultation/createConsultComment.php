<?php
    include "../connect/connect.php";
    $sql = "CREATE TABLE consultComment (";
    $sql .= "commentID int(10) unsigned auto_increment,";
    $sql .= "memberID int(10) unsigned,";
    $sql .= "consultationID int(10) unsigned,";
    $sql .= "commentMsg varchar(255) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (commentID)";
    $sql .= ") charset=utf8";
    $connect->query($sql);
?>