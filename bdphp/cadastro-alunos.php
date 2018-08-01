<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Carlos Magno">
    <title>Cadastrar Aluno</title>
    <link rel="stylesheet" href="css/padrao.css">
</head>
<body>
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
include "inc/conexao.php";

if( isset($_POST["nome"]) ){
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];

    $senha = md5($senha);

    $conn = conexao();

    $sql = "INSERT INTO alunos(nome, senha, cpf, endereco) VALUES ('$nome', '$senha', $cpf, '$endereco')";
    if( mysqli_query($conn, $sql) ){
        echo "Cadastro realizado com sucesso.";
    }else{
        echo "Falha ao realizar cadastro.";
    }
}
?>
</body>
</html>