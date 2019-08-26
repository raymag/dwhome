<?php 
session_start();
if(!isset($_SESSION["cod_adm"])){
    header("Location:index.php");
}
include "inc/conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Carlos Magno">
    <title>IFSYS - Cadastrar Administrador</title>
    <link rel="stylesheet" href="css/padrao.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
<div id="main-area">
    <?php
    include "inc/menu_adm_logged.php";
    ?>
    <form method="post">
    <fieldset>
    <legend>Cadastrar Administrador</legend>
    <label>Nome: <input type="text" name="nome"> </label><br>
    <label>Senha: <input type="password" name="senha"> </label><br>
    <label>CPF: <input type="number" name="cpf"> </label><br>

    <input type="submit" value="Cadastrar">
    <input type="reset" value="Cancelar">
    <div class="form_sublinks">
         <ul type="none">
            <li><a href="index.php">Voltar</a></li>
        </ul>
    </div>
    </fieldset>
    </form>
<?php
if( isset($_POST["nome"]) ){
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $cpf = $_POST["cpf"];
    
    $senha = md5($senha);
    
    $conn = conexao();
    
    $sql = "SELECT * FROM administrador WHERE cpf_adm = '$cpf'";
    if($query = mysqli_query($conn, $sql)){
        $data = mysqli_fetch_array($query);
        if(isset($data["cpf_adm"])){
            echo "<script>alert('Este CPF já está em uso.')</script>";
        }else{
            $sql = "INSERT INTO administrador(nome_adm, senha_adm, cpf_adm) VALUES ('$nome', '$senha', '$cpf')";
            if( mysqli_query($conn, $sql) ){
                echo "<script>alert('Cadastro realizado com sucesso.')</script>";
            }else{
                echo "<script>alert('Falha ao realizar cadastro.')</script>";
            }

        }
    }
}
?>
</div>
</body>
</html>