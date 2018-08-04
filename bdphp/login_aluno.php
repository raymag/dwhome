<?php 
session_start();
if(!isset($_SESSION["matricula"])){
    header("Location:index.php");
}
include_once "functions/getDayMoment.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Carlos Magno">
    <title>IFSYS - Aluno</title>
    <link rel="stylesheet" href="css/padrao.css">
</head>
<body>
<?php 
include "inc/menu_aluno_logged.php";
?>
<div id="main-area">
<div class="section">
<?php
echo "<h2>".getDayMoment()." "
.$_SESSION["nome"]."</h2>";
?>
</div>
</div>
</body>
</html>