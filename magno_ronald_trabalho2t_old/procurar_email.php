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
        <label>Procurar: <input type="text" name="email_alvo" placeholder="E-mail ou fragmento de E-mail"> </label>
        <input type="submit" value="Pesquisar">
        </form>
    </div>
    <div class="bloco">
    
    <?php
    $user_email= $_SESSION["email"];

    include "inc/functions/conexao.php";
    $conn = conecta_mysql();

    if(isset($_POST["email_alvo"])){
        $alvo = $_POST["email_alvo"];
        $sql = "SELECT email, nome FROM usuario WHERE email LIKE '$alvo%'";
        // echo $sql;

        if($query = mysqli_query($conn, $sql)){
            $emails = array();
            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                $emails[] = $row;
            }
            foreach($emails as $email){
                echo "<br/><hr/>";
                echo "<p class='search-data-text'>Nome: <b>".$email["nome"]."</b><p/>";
                echo "<p class='search-data-text'>Email: <b>".$email["email"]."</b></p>";
                echo "<a href='enviar_msg.php?mailto=".$email["email"]."'>Enviar Mensagem</a>";
                echo "<hr/><br/>";
            }
            if(empty($emails)){
                echo "<p>Não há resultados para a pesquisa.</p>";
            }
        }
        
    }else{
        echo "<p>Primeiro pesquise por um email.</p>";
    }
    ?>
    </div>
    
    </div>
</body>
</html>