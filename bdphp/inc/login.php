<form action="" method="post">
<label>Modo:<select name="modo" id="">
    <option value="aluno">Aluno</option>
    <option value="admin">Administrador</option>
</select></label><br>
<label>CPF: <input type="number" name="cpf" id=""></label><br>
<label>Senha: <input type="password" name="passwd" id=""></label><br>
<input type="submit" value="Entrar">
<input type="reset" value="Cancelar">
<div class="form_sublinks">
    <ul type="none">
        <li><a href="cadastro-alunos.php">Cadastrar Aluno</a></li>
        </li><a href="cadastro-disciplinas.php">Cadastrar Disciplinas</a></li>
    </ul>
</div>
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
            if( isset($data["cod_adm"]) ){
                $_SESSION["cod_adm"] = $data["cpf_adm"];
                $_SESSION["nome_adm"] = $data["nome_adm"];
                header("Location: login_adm.php");
                
            }else{
                echo "O usuário ou a senha está inconrreto";
            }

            }
    }
    }
?>