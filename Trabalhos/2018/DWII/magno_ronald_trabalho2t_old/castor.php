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
    <a href="del_all_msgs.php">Apagar Todas as Mensagens</a>
    <?php
    $email= $_SESSION["email"];

    include "inc/functions/conexao.php";
    include "inc/functions/datestatus.php";
    $conn = conecta_mysql();

    $sql = "SELECT * FROM mensagem WHERE email = '$email' ORDER BY data_envio DESC";
    // echo $sql
    if($query = mysqli_query($conn, $sql)){
        $msgs = array();
        while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $msgs[] = $row;
        }

        foreach($msgs as $msg){
            $idmsg = $msg["id_mensagem"];
            echo "<div class='bloco'>";
            echo "<h2><b>Envio: ".datestatus($msg["data_envio"])."</b></h2>";
            echo "<hr/><br>";
            echo "<span class='search-data-text'>".$msg["texto"]."</span><br><br>";
            echo "<hr/>";
            echo "<span class='search-data-text'>ID da Mensagem: <b><i>".$msg["id_mensagem"]."</i></b>
                <a href='del_msg.php?idmsg=$idmsg'>Apagar</a></span>";
            echo "</div>";
        }
    }
    ?>
    </div>
</body>
</html>