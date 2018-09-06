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
<div class="left">
<center>
        <h1>Lista de Alunos</h1>
        <hr>
    <table class="list-table">
        <tr>
            <th>Nome:</th>
            <th>Matrícula</th>
            <!-- <th>CPF</th> -->
        </tr>
        <?php
        $conn = conexao();
        $sql = "SELECT * FROM alunos";
        if($query = mysqli_query($conn, $sql)){
            $v = "list-table-v1";
            while($data = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td class='$v'>".$data["nome"]."</td>";
                echo "<td class='$v'>".$data["matricula"]."</td>";
                // echo "<td class='$v'>".$data["cpf"]."</td>";
                echo "</tr>";
                if($v == "list-table-v1"){
                    $v = "list-table-v2";
                }else{
                    $v = "list-table-v1";
                }
            }
        }else{
            echo "erro";
        }
        ?>
    </table>
</center>
</div>
<div class="right">
<center>
<h1>Lista de Disciplinas</h1>
        <hr>
    <table class="list-table">
        <tr>
            <th>Nome:</th>
            <th>Código</th>
            <!-- <th>Carga Horária</th> -->
        </tr>
        <?php
        $conn = conexao();
        $sql = "SELECT * FROM disciplinas";
        if($query = mysqli_query($conn, $sql)){
            $v = "list-table-v1";
            while($data = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td class='$v'>".$data["nome_disc"]."</td>";
                echo "<td class='$v'>".$data["cod_disc"]."</td>";
                // echo "<td class='$v'>".$data["carga_hor"]."</td>";
                echo "</tr>";
                if($v == "list-table-v1"){
                    $v = "list-table-v2";
                }else{
                    $v = "list-table-v1";
                }
            }
        }else{
            echo "erro";
        }
        ?>
    </table>
</center>
</div>
<br>
<center>
<form method="post">
        <label>Código do Aluno: <input type="number" name="cod_aluno" id=""></label><br>
        <label>Código da Disciplina: <input type="text" name="cod_disc" id=""></label><br>
        <input type="submit" value="Matricular">
        <input type="reset" value="Cancelar">
</form>
<?php
if(isset($_POST["cod_aluno"][0]) && isset($_POST["cod_disc"][0])){
    $cod_aluno = $_POST["cod_aluno"];
    $cod_disc = $_POST["cod_disc"];
    
    $sql = "SELECT matricula FROM alunos WHERE matricula = '$cod_aluno'";
    if($query = mysqli_query($conn, $sql)){
        $data_aluno = mysqli_fetch_assoc($query);
        $sql = "SELECT cod_disc FROM disciplinas WHERE cod_disc = '$cod_disc'";
        if($query = mysqli_query($conn, $sql)){
            $data_disc = mysqli_fetch_assoc($query);
            if(isset($data_aluno["matricula"]) && isset($data_disc["cod_disc"])){
                $sql = "INSERT INTO matricula_aluno (cod_aluno, cod_disciplina) VALUES ('$cod_aluno', '$cod_disc')";
                if(mysqli_query($conn, $sql)){
                    echo "<script>alert('Aluno matriculado')</script>";
                }else{
                    echo "<script>alert('Falha ao matricular aluno')</script>";
                }

            }else{
                echo "<script>alert('Aluno ou disciplina inexistente')</script>";
            }
        }
    }
}
?>
</center>
</div>

</div>
</body>
</html>