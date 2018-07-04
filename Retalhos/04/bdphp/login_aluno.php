<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Carlos Magno">
    <title>Login Aluno</title>
    <link rel="stylesheet" href="css/padrao.css">
</head>
<body>
<?php
session_start();
include_once "functions/getDayMoment.php";
echo getDayMoment()." ".$_SESSION["nome"];
?>
</body>
</html>