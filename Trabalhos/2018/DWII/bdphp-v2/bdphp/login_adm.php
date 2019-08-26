<?php 
session_start();
if(!isset($_SESSION["cod_adm"])){
    header("Location:index.php");
}
include_once "functions/getDayMoment.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Magno">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IFSYS - Administração</title>
    <link rel="stylesheet" href="css/padrao.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
<?php
include "inc/menu_adm_logged.php";
?>
<div id="main-area">
<div class="section">
<h2>
<?php
echo getDayMoment()." ".
$_SESSION["nome_adm"];
?>
</h2>
</div> 
</div>
</body>
</html>