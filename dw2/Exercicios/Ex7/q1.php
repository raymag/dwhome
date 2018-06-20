<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Carlos Magno">
    <link rel="stylesheet" href="../css/padrao.css">
    <title>Questão 1</title>
</head>
<body>
<form action="" method="post">
    <label>Nome: <input type="text" name="name"></label><br>
    <label>E-Mail: <input type="email" name="email"></label><br>
    <label>Senha: <input type="password" name="passwd"></label><br>
    <label>CPF: <input type="text" name="cpf"></label><br>
    <input type="submit" value="Confirmar"><br>
</form>
<?php
include "functions/f1.inc.php";

if(isset($_POST["name"])){

    if( mineight($_POST["email"]) 
        && isCPF($_POST["cpf"]) ){

        echo "<center>Operação Bem-Sucedida</center>";

    }else{
        echo "<center>Os dados não foram preenchidos corretamente</center>";
    }

}

?>
</body>
</html>