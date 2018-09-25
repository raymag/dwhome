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
    <title>IFSYS - Cadastrar Aluno</title>
    <link rel="stylesheet" href="css/padrao.css">
</head>
<body>
<div id="main-area">
    <?php
    include "inc/menu_adm_logged.php";
    ?>
    <form method="post">
    <fieldset>
    <legend>Cadastrar Aluno</legend>
    <label>Nome: <input type="text" name="nome"> </label><br>
    <label>Senha: <input type="password" name="senha"> </label><br>
    <label>CPF: <input type="number" name="cpf"> </label><br>
    <label>Endereço: <input type="text" name="endereco"> </label><br>

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
    $endereco = $_POST["endereco"];

    $senha = md5($senha);

    $conn = conexao();

    $sql = "SELECT * FROM alunos WHERE cpf = '$cpf'";
    if($query = mysqli_query($conn, $sql)){
        $data = mysqli_fetch_array($query);
        if(isset($data["cpf"])){
            echo "Este CPF já está em uso.";
        }else{

            $sql = "INSERT INTO alunos(nome, senha, cpf, endereco) VALUES ('$nome', '$senha', $cpf, '$endereco')";
            if( mysqli_query($conn, $sql) ){
                echo "Cadastro realizado com sucesso.";
            }else{
                echo "Falha ao realizar cadastro.";
            }

        }
    }
}
?>
</div>
</body>
</html>