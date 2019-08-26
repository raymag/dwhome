<?php session_start() ?>
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
    <?php include "inc/menu.php"?>
    <div id="area-principal">
    <div class="bloco">
        <form method="POST" id="login-form">
        <fieldset>
        <legend>Cadastro</legend>
        <label>Nome: <input type="text" required name="nome"> </label><br>
        <label>E-mail: <input type="email" required name="email" placeholder="Ex: cuc4@bel.udo"> </label><br>
        <label>Senha: <input type="password" required name="senha"> </label><br>
        <input type="submit" value="Cadastrar-se">
        <input type="reset" value="Cancelar">
        </form>
    </div>
    <?php
    include "inc/functions/conexao.php";
    $conn = conecta_mysql();

    if(isset($_POST["email"])){
        $email = $_POST["email"];
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $senha = md5($senha);
        if(isset($nome[0])){
            $sql = "SELECT * FROM usuario WHERE email = '$email'";
            if($query = mysqli_query($conn, $sql)){
                $data = mysqli_fetch_array($query, MYSQLI_ASSOC);
                if(isset($data["email"])){
                    echo "<script>alert('Este E-mail já está em uso');</script>";
                }else{
                    $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
                    // echo $sql;
                    if($query = mysqli_query($conn, $sql)){
                        echo "<script>alert('Cadastro realizado com sucesso');</script>";
                        header("Location:index.php");
                    }
                }
            }
        }
    }
    ?>
    </div>
</body>
</html>