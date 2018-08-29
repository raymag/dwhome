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
			<label>Novo E-mail: <input type="email" name="novo_email" id=""></label><br>
			<input type="submit" value="Alterar">
			<input type="reset" value="Cancelar">
			</form>
		</div>
			<?php
			if(isset($_POST["novo_email"])){
				$nEmail = $_POST["novo_email"];
				$codigo = $_SESSION["codigo"];

				include "conexao.php";
				$conn = conecta_mysql();

				$sql = "SELECT email FROM usuarios WHERE email = '$nEmail'";
				if($query = mysqli_query($conn, $sql)){
					$userData = mysqli_fetch_array($query, MYSQLI_ASSOC);
					if(isset($userData["email"])){
						echo "<script>alert('Este email já está em uso')</script>";
					}else{
						$sql = "UPDATE usuarios SET email = '$nEmail' WHERE codigo = '$codigo'";
						if(mysqli_query($conn, $sql)){
							echo "<script>alert('Email alterado com sucesso')</script>";
							$_SESSION["email"] = $nEmail;
							header("location:login_correto.php");
						}else{
							echo "<script>alert('Erro ao alterar o email')</script>";
						}
					}
				}
			}

			?>
	</div>
</body>
</html>
