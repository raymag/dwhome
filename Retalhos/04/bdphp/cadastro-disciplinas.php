<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Carlos Magno">
    <title>Cadastrar Disciplina</title>
    <link rel="stylesheet" href="css/padrao.css">
</head>
<body>
    <form method="post">
    <fieldset>
    <legend>Cadastrar Disciplina</legend>
    <label>Código: <input type="text" name="cod_disc"> </label><br>
    <label>Nome: <input type="text" name="nome_disc"> </label><br>
    <label>Carga Horária: <input type="number" name="carga_hor"> </label><br>

    <input type="submit" value="Cadastrar">
    <input type="reset" value="Cancelar">
    </fieldset>
    </form>

<?php
include "inc/conexao.php";

if( isset($_POST["cod_disc"]) ){
    $cod_disc = $_POST["cod_disc"];
    $nome_disc = $_POST["nome_disc"];
    $carga_hor = $_POST["carga_hor"];
    
    $conn = conexao();

    $sql = "INSERT INTO disciplinas (cod_disc, nome_disc, carga_hor) VALUES ('$cod_disc', '$nome_disc', $carga_hor)";
    if( mysqli_query($conn, $sql) ){
        echo "Cadastro realizado com sucesso.";
    }else{
        echo "Falha ao realizar cadastro.";
    }
}
?>
</body>
</html>