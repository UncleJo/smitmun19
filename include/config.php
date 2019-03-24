<?php

//====LOCALHOST========
//$path = "smartschool";

//function to get an instance of the mysqli

function GetMysqlInstance() {
    $host = "loct";
    $user = "smin";
    $password = "Rq:85F";
    $database = "smitme";
    
//    $host = "localhost";
//    $user = "dpsgx10m_admin";
//    $password = "dpsg12345";
//    $database = "dpsgx10m_mun2016";
    $mysqli = new mysqli($host, $user, $password, $database);
    if ($mysqli->connect_errno) {
        printf("Connection Error: %s", $mysqli->connect_error);
        exit();
    }
    return $mysqli;
}

?>


