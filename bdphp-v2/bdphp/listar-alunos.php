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
    <title>IFSYS - Alunos</title>
    <link rel="stylesheet" href="css/padrao.css">
</head>
<body>
<div id="main-area">
<?php
include "inc/menu_adm_logged.php";
?>
<div class="section">
    <center>
        <h1>Lista de Alunos</h1>
        <hr>
    <table class="list-table">
        <tr>
            <th>Nome:</th>
            <th>Matrícula</th>
            <th>CPF</th>
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
                echo "<td class='$v'>".$data["cpf"]."</td>";
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
    </table></center>
</div>
</div>
</body>
</html>