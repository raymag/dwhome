<?php
function conectaDB(){
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $db = "ciclosocial";
    $conn = mysqli_connect($host, $user, $passwd, $db);
    mysqli_set_charset($conn, "UTF8");
    return $conn;
}
?>