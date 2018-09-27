<?php
session_start();
if(!isset($_SESSION["cod_adm"])){
    header("Location:index.php");
}
include "inc/conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Magno">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IFSYS</title>
    <link rel="stylesheet" href="css/padrao.css">
</head>
<body>
<div id="main-area">
<?php
include "inc/menu_adm_logged.php";
?>
<div class="section">
<form method="post">
<label>Disciplina: <input type="text" placeholder="Insira o código da disciplina" name="cod_disciplina" id=""></label>
<input type="submit" value="Visualizar">
</form>
<center>
<table class="list-table">
<?php
if(isset($_POST["cod_disciplina"])){
    $cod_disc = $_POST["cod_disciplina"];
    $conn = conexao();
    $sql = "SELECT alunos.nome, alunos.matricula FROM matricula_aluno INNER JOIN alunos ON cod_aluno = alunos.matricula 
    WHERE cod_disciplina = '$cod_disc'";
    $v = "list-table-v1";
    if($query = mysqli_query($conn, $sql)){
        if($row = mysqli_fetch_assoc($query)){
            echo "<th colspan='2'>$cod_disc</th></tr><tr>
            <th>ID</th>
            <th>Aluno</th>";
            echo "<tr>";
            echo "<td class='$v'>".$row["matricula"]."</td>";
            echo "<td class='$v'>".$row["nome"]."</td>";
            echo "</tr>";
            if($v == "list-table-v1"){
                 $v = "list-table-v2";
            }else{
                $v = "list-table-v1";
            }
        }else{
            echo "<h3>Não há nenhum aluno cadastrado na disciplina de código <b>$cod_disc</b></h3>";
        }
        while($row = mysqli_fetch_assoc($query)){
            echo "<tr>";
            echo "<td class='$v'>".$row["matricula"]."</td>";
            echo "<td class='$v'>".$row["nome"]."</td>";
            echo "</tr>";
            if($v == "list-table-v1"){
                 $v = "list-table-v2";
            }else{
                $v = "list-table-v1";
            }
        }
    }
}
?>
</table></center>
    <!-- <center>
        <h1>Lista de Alunos</h1>
        <hr>
    <table class="list-table">
        <tr>
            <th>Nome:</th>
            <th>Matrícula</th>
            <th>CPF</th>
        </tr> -->
        <?php
        // $conn = conexao();
        // $sql = "SELECT * FROM alunos";
        // if($query = mysqli_query($conn, $sql)){
        //     $v = "list-table-v1";
        //     while($data = mysqli_fetch_array($query)){
        //         echo "<tr>";
        //         echo "<td class='$v'>".$data["nome"]."</td>";
        //         echo "<td class='$v'>".$data["matricula"]."</td>";
        //         echo "<td class='$v'>".$data["cpf"]."</td>";
        //         echo "</tr>";
        //         if($v == "list-table-v1"){
        //             $v = "list-table-v2";
        //         }else{
        //             $v = "list-table-v1";
        //         }
        //     }
        // }else{
        //     echo "erro";
        // }
        ?>
    <!-- </table></center> -->
</div>
</div>
</body>
</html>