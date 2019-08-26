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
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
<?php 
include "inc/menu_aluno_logged.php";
?>
<div id="main-area">
<div class="section">
<?php
echo "<p style='float:left'>".getDayMoment()." "
.$_SESSION["nome"]."</p>";
?>
<br>
<br>
</div><br>
<div class="section">
<center>
<table class="list-table">
<tr>
<th>Disciplina</th>
<th>Carga Horária</th>
</tr>
<?php
include_once "inc/conexao.php";
$conn = conexao();
$matricula = $_SESSION["matricula"];
$sql = "SELECT * FROM matricula_aluno JOIN disciplinas ON cod_disciplina = disciplinas.cod_disc WHERE cod_aluno = $matricula";
if($query = mysqli_query($conn, $sql)){
    $v = "list-table-v1";
    while($row = mysqli_fetch_assoc($query)){
        echo "<tr>";
        echo "<td class='$v'>".$row["nome_disc"]."</td>";
        echo "<td class='$v'>".$row["carga_hor"]."</td>";
        echo "</tr>";
        if($v == "list-table-v1"){
            $v = "list-table-v2";
       }else{
           $v = "list-table-v1";
       }
    }
}
?>
</table>
</center>
</div>
</div>
</body>
</html>