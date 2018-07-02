<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CicloSocial</title>
    <link rel="stylesheet" href="../css/padrao.css">
</head>
<body>
    <form action="" method="post">
    <fieldset>
    <label>Nome: <input type="text" name="nome" id=""></label><br>
    <label>Data de Nascimento: <input type="date" name="data_nascimento" id=""></label><br>
    <label>Ocupação: <input type="text" name="ocupacao" id=""></label><br>
    <fieldset>
    <legend>Sexo</legend>
    <label>Masculino:
    <input type="radio" name="sexo" value="masculino">
    </label><br>
    <label>Feminino:
    <input type="radio" name="sexo" value="feminino">
    </label><br>
    <label>Outro:
    <input type="radio" name="sexo" checked value="outro">
    </label>
    </fieldset>
    </fieldset>
    <input type="submit" value="Cadastrar">
    <input type="reset" value="Cancelar">
    </form>
<?php
include_once "inc/conexao.php";
if( isset($_POST["nome"]) ){
    $nome = $_POST["nome"];
    $data = $_POST["data_nascimento"];
    $sexo = $_POST["sexo"];
    $ocupacao = $_POST["ocupacao"];

    $conn = conectaDB();
    $sql = "INSERT INTO pessoas(nome, data_nascimento, sexo, ocupacao) 
    VALUES ('$nome', '$data', '$sexo', '$ocupacao')";
    $query = mysqli_query($conn, $sql);
    if($query){
        echo "<script>alert('Sucesso');document.location.href='index.php'</script>";
    }
}
?>
</body>
</html>