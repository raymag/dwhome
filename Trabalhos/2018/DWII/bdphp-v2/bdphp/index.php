<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Magno">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IFSYS</title>
    <link rel="stylesheet" href="css/padrao.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
<?php
if(isset($_SESSION["matricula"])){
    header("Location:login_aluno.php");
}
if(isset($_SESSION["cod_adm"])){
    header("Location:login_adm.php");
}
include "inc/login.php";
?>
</body>
</html>