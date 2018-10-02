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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Carlos Magno">
    <title>IFSYS - Cadastrar Disciplina</title>
    <link rel="stylesheet" href="css/padrao.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
<div id="main-area">
    <?php
    include "inc/menu_adm_logged.php";
    ?>
    <form method="post">
    <fieldset>
    <legend>Cadastrar Disciplina</legend>
    <label>Código: <input type="text" name="cod_disc"> </label><br>
    <label>Nome: <input type="text" name="nome_disc"> </label><br>
    <label>Carga Horária: <input type="number" name="carga_hor"> </label><br>

    <input type="submit" value="Cadastrar">
    <input type="reset" value="Cancelar">
    <div class="form_sublinks">
         <ul type="none">
            <li><a href="index.php">Voltar</a></li>
        </ul>
    </div>
    </fieldset>
    </form>

<?php
if( isset($_POST["cod_disc"]) ){
    $cod_disc = $_POST["cod_disc"];
    $nome_disc = $_POST["nome_disc"];
    $carga_hor = $_POST["carga_hor"];
    
    $conn = conexao();

    $sql = "SELECT * FROM disciplinas WHERE cod_disc = '$cod_disc'";
    $query = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_array($query);
    if(isset($dados["cod_disc"])){
        echo "Este código já está em uso";
    }else{
        $sql = "INSERT INTO disciplinas (cod_disc, nome_disc, carga_hor) VALUES ('$cod_disc', '$nome_disc', $carga_hor)";
        // echo $sql;
        if( mysqli_query($conn, $sql) ){
            echo "Cadastro realizado com sucesso.";
        }else{
            echo "Falha ao realizar cadastro.";
        }
    }
}
?>
</div>
</body>
</html>