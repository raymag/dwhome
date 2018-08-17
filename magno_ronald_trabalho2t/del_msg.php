<?php
session_start();
if(!isset($_SESSION["email"]) || !isset($_GET["idmsg"])){
    header("Location:index.php");
}else{
    $emailUser = $_SESSION["email"];
    include "inc/functions/conexao.php";
    $conn = conecta_mysql();
    $idMsgAlvo= $_GET["idmsg"];
    $sql = "DELETE FROM mensagem WHERE email = '$emailUser' AND id_mensagem = $idMsgAlvo";
    // echo $sql;
    if($query = mysqli_query($conn, $sql)){
    }else{
        // echo "<script>alert('Mensagem não apagada')</script>";
    }
    header("Location: castor.php");
}
?>