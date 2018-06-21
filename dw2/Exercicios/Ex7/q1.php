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
    <label>CPF: <input type="number" name="cpf"></label><br>
    <input type="submit" value="Confirmar"><br>
</form>
<?php
include "functions/uppername.inc.php";
include "functions/mineight.inc.php";
include "functions/iscpf.inc.php";

if(isset($_POST["name"])){
    $sucess = true;
    if( !mineight($_POST["email"]) ){
        $sucess = false;
        echo "O email precisa de no mínimo 8 digitos <br/>";
    }
    if(!isCPF($_POST["cpf"]) ) {
        $sucess = false;
        echo "O CPF é inválido";
    }
    if($sucess){
        echo "<center>Bem vindo ".uppername($_POST["name"]).", a operação foi Bem-Sucedida</center>";

    }

}

?>
</body>
</html>