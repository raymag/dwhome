<?php
session_start();
if(!isset($_SESSION["codigo"])){
	header("location:index.php");
}
?>
<!DOCTYPE html!>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Professor"/>
	<meta name="description" content="Descrição"/>
	<meta name="keywords" content="Palavras, chaves"/>
	<title>PHP com BD</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php include "includes/menu-login.php" ?>
	<div id="area-principal">
		<div id="postagem">
			<form method="post">
			<p>Alterar a senha de <b><?php echo $_SESSION["usuario"] ?></b></p><br>
			<label>Nova Senha: <input type="password" name="nova_senha"></label><br>
			<label>Repetir Nova Senha: <input type="password" name="nova_senha2"></label><br>
			<input type="submit" value="Alterar">
			<input type="reset" value="Cancelar">
			</form>
		</div>
			<?php
			if(isset($_POST["nova_senha"])){
				$nSenha = $_POST["nova_senha"];
				$nSenha2 = $_POST["nova_senha2"];
				if($nSenha==$nSenha2){
					$id = $_SESSION["codigo"];
					$nSenha = md5($nSenha);
					include "conexao.php";
					$conn = conecta_mysql();

					$sql = "UPDATE usuarios SET senha = '$nSenha' WHERE codigo = '$id'";
					if(mysqli_query($conn, $sql)){
						echo "<script>alert('Senhas foram alteradas com sucesso')</script>";
					}else{
						echo "<script>alert('Erro ao alterar as senhas')</script>";
					}
				}else{
					echo "<script>alert('As senhas precisam ser idênticas')</script>";
				}
			}

			?>
	</div>
</body>
</html>
