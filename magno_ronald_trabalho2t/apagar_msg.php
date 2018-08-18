<?php
session_start();
if(empty($_SESSION["email"])){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Carlos Magno / Ronald Carvaho">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icons/favicon.png" type="image/x-icon">
    <title>Castor</title>
</head>
<body>
    <?php include "inc/menu_logged.php"?>
    <div id="area-principal">
    <div class="bloco">
        <form method="POST">
        <label>ID da Mensagem: <input type="text" autofocus name="idMsgAlvo" placeholder="Ex: 1, 424, 2, etc"> </label>
        <input type="submit" value="Apagar">
        </form>
    </div>
    <?php
    $emailUser = $_SESSION["email"];

    include "inc/functions/conexao.php";
    include "inc/functions/jsalert.php";
    $conn = conecta_mysql();

    if(isset($_POST["idMsgAlvo"][0])){
        $idMsgAlvo= $_POST["idMsgAlvo"];
        $sql = "DELETE FROM mensagem WHERE email = '$emailUser' AND id_mensagem = $idMsgAlvo";
        // echo $sql;
        if($query = mysqli_query($conn, $sql)){
            if(($conn->affected_rows)!=0){
                echo "<script>alert('Mensagem Apagada Com Sucesso')</script>";
            }else{
                echo jsalert("Não há nenhuma mensagem com este ID");
            }
        }else{
            echo "<script>alert('Mensagem não apagada')</script>";
        }
    }
    ?>
    <!-- <hr>
    <?php
    // $email= $_SESSION["email"];
    // include "inc/functions/datestatus.php";

    // $sql = "SELECT * FROM mensagem WHERE email = '$email' ORDER BY data_envio DESC";
    // // echo $sql
    // if($query = mysqli_query($conn, $sql)){
    //     $msgs = array();
    //     while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
    //         $msgs[] = $row;
    //     }

    //     foreach($msgs as $msg){
    //         $idmsg = $msg["id_mensagem"];
    //         echo "<div class='bloco'>";
    //         echo "<h2><b>Envio: ".datestatus($msg["data_envio"])."</b></h2>";
    //         echo "<hr/><br>";
    //         echo "<span class='search-data-text'>".$msg["texto"]."</span><br><br>";
    //         echo "<hr/>";
    //         echo "<span class='search-data-text'>ID da Mensagem: <b><i>".$msg["id_mensagem"]."</i></b>
    //             <a href='del_msg.php?idmsg=$idmsg'>Apagar</a></span>";
    //         echo "</div>";
    //     }
    // }
    ?> -->
    </div>
</body>
</html>