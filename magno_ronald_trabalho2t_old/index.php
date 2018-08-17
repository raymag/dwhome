<?php
session_start();
if(isset($_SESSION["id_usuario"])){
    header("Location:castor.php");
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
<?php include "inc/menu.php";?>
<div id="area-principal">
<div class="bloco">
<form method="post" id="login-form">
<fieldset>
<legend>Entrar</legend>
<label>E-mail: <input type="email" name="email"> </label><br>
<label>Senha: <input type="password" name="senha"> </label><br>
<p>Ainda não possui uma conta? <a href="cadastro.php">Cadastre-se</a></p>
<input type="submit" value="Entrar">
<input type="reset" value="Cancelar">
</fieldset>
</div>
</form>
</div>
<?php
if(isset($_POST["email"])){
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha = md5($senha);

    include "inc/functions/conexao.php";
    include "inc/functions/jsalert.php";
    $conn = conecta_mysql();

    $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
    // echo $sql;
    if($query = mysqli_query($conn, $sql)){
        $data = mysqli_fetch_array($query, MYSQLI_ASSOC);
        if(isset($data["email"])){
            $_SESSION["id_usuario"] = $data["id_usuario"];
            $_SESSION["email"] = $data["email"];
            $_SESSION["nome"] = $data["nome"];
            header("Location:castor.php");
        }else{
            echo jsalert("E-mail ou senha incorreta");
        }
    }
}
?>
</body>
</html>
