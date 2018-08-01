<form action="" method="post">
<fieldset>
<p><label>E-mail: <input type="email" name="email" id=""></label></p>
<p><label>Senha: <input type="password" name="senha" id=""></label></p>
<input type="submit" value="Entrar">
<input type="reset" value="Cancelar">
</fieldset>
</form>
<?php
if( isset($_POST["email"]) ){
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha = md5($senha);
    include "conexao.php";

    $conn = conecta_mysql();

    $sql = "SELECT * FROM usuarios WHERE email = '$email'
    AND senha = '$senha'";
    // echo $sql;
    $resultado_id = mysqli_query($conn, $sql);
    $dados_usuarios = mysqli_fetch_array($resultado_id);
    if( isset($dados_usuarios['codigo']) ){
        $_SESSION["codigo"] = $dados_usuarios["codigo"];
        $_SESSION["email"] = $dados_usuarios["email"];
        $_SESSION["usuario"] = $dados_usuarios["usuario"];
        // echo "<p class='highlight'> Seja bem-vindo, ".$dados_usuarios["usuario"]."!</p>";
        //var_dump($dados_usuarios);
       header("location: login_correto.php");
    }else{
        // echo "<p class='redhighlight'>Dados incorretos.</p>";
        header("Location: erro.php?er=wrongdata");
    }
}
?>