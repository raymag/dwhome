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
        <fieldset>
        <legend>Enviar Mensagem</legend>
        <?php
        include "inc/functions/fixquot.php";
        if(isset($_GET["mailto"])){
            $mailto = fixquot($_GET["mailto"]);
            echo '<label>E-mail: <input type="email" required value="'.$mailto.'" name="email_alvo" placeholder="Ex: paula@tejan.do"> </label>';
        }else{
            echo '<label>E-mail: <input type="email" autofocus required name="email_alvo" placeholder="Ex: paula@tejan.do"> </label>';
        }
        ?>
        <!-- <label>E-mail: <input type="email" required name="email_alvo" placeholder="Ex: paula@tejan.do"> </label> -->
        <fieldset>
            <legend>Corpo da Mensagem</legend>
    <textarea name="texto" <?php if(isset($mailto)){echo "autofocus";} ?> maxLength="400" required cols="35" rows="10"></textarea>
        </fieldset>
        <input type="submit" value="Enviar">
        <input type="reset" value="Cancelar">
</fieldset>
        </form>
    </div>
    <?php
    include "inc/functions/conexao.php";
    include "inc/functions/jsalert.php";
    $conn = conecta_mysql();
    if (isset($_POST['email_alvo'])){
        $email = fixquot($_POST['email_alvo']);
        $msg = fixquot($_POST['texto']);
        $sql = "SELECT * FROM usuario WHERE email = '$email'";
        if($query = mysqli_query($conn, $sql)){
            $data = mysqli_fetch_array($query, MYSQLI_ASSOC);
            if(isset($data["email"])){
                $sql = "INSERT INTO mensagem (email, texto) VALUES ('$email','$msg')";
                if($query = mysqli_query($conn, $sql)){
                    echo jsalert("Mensagem Enviada");
                }else{
                    echo jsalert("Mensagem não Enviada");
                }

            }else{
                echo jsalert("Usuário Inexistente");
            }
        }
    }
    ?>
    </div>
    
    </div>
</body>
</html>
