<form action="" method="post">
<label>Modo:<select name="modo" id="">
    <option value="aluno">Aluno</option>
    <option value="admin">Administrador</option>
</select></label><br>
<label>CPF: <input type="number" name="cpf" id=""></label><br>
<label>Senha: <input type="password" name="passwd" id=""></label><br>
<input type="submit" value="Entrar">
<input type="reset" value="Cancelar">
</form>
<?php
include_once "inc/conexao.php";
if(isset( $_POST["modo"] )){
    if($_POST["modo"] == 'aluno'){
        $cpf = $_POST["cpf"];
        $senha = md5($_POST["passwd"]);

        $sql = "SELECT * FROM alunos WHERE cpf = '$cpf' AND senha = '$senha'";
        $conn = conexao();
        $query = mysqli_query($conn, $sql);
        if($query){
            $data = mysqli_fetch_array($query);
            if( isset($data) ){
                $_SESSION["matricula"] = $data["matricula"];
                $_SESSION["nome"] = $data["nome"];
                header("Location: login_aluno.php");
                
            }else{
                echo "O usuário ou a senha está inconrreto";
            }

            }
        }
    else if($_POST["modo"] == 'admin'){
        $cpf = $_POST["cpf"];
        $senha = md5($_POST["passwd"]);

        $sql = "SELECT * FROM administrador WHERE cpf_adm = '$cpf' AND senha_adm = '$senha'";
        $conn = conexao();
        $query = mysqli_query($conn, $sql);
        if($query){
            $data = mysqli_fetch_array($query);
            if( isset($data) ){
                $_SESSION["cod_adm"] = $data["cpf"];
                $_SESSION["nome_adm"] = $data["nome"];
                header("Location: login_adm.php");
                
            }else{
                echo "O usuário ou a senha está inconrreto";
            }

            }
    }
    }
?>