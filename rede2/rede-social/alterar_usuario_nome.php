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
			<label>Código do Usuário: <input type="text" disabled name="codigo" value="<?php echo $_SESSION["codigo"]?>"></label><br>
			<label>Nome do Usuário: <input type="text" placeholder="<?php echo $_SESSION["usuario"] ?>" name="nome_usuario"></label><br>
			<input type="submit" value="Alterar">
			<input type="reset" value="Cancelar">
			</form>
		</div>
			<?php
			if(isset($_POST["nome_usuario"])){
				$codigo = $_SESSION["codigo"];
				$nome = $_POST["nome_usuario"];
				if(isset(str_replace(" ", "", $nome)[1])){
					include "conexao.php";
					$conexao = conecta_mysql();
					$sql = "UPDATE usuarios SET usuario = '$nome' WHERE codigo='$codigo'";
					if(mysqli_query($conexao, $sql)){
						$_SESSION["usuario"] = $nome;
						echo "<script>alert('O nome foi alterado com sucesso')</script>";
						header("Location:login_correto.php");
					}else{
						echo "<script>alert('Erro ao alterar o nome')</script>";
					}
				}else{
					echo "<script>alert('O nome precisa ter pelo menos 2 caracteres')</script>";
				}
			}

			?>
	</div>
</body>
</html>
