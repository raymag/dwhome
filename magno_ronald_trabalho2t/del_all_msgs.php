<?php
session_start();
if(empty($_SESSION["email"])){
    header("Location:index.php");
}else{
    $email = $_SESSION["email"];
    include "inc/functions/conexao.php";
    $conn = conecta_mysql();
    $sql = "DELETE FROM mensagem WHERE email = '$email'";
    $query = mysqli_query($conn, $sql);
    header("Location:castor.php");
}
?>