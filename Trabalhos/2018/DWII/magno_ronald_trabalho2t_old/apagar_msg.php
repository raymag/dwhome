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
        <label>ID da Mensagem: <input type="text" name="idMsgAlvo" placeholder="Ex: 1, 424, 2, etc"> </label>
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
    </div>
</body>
</html>