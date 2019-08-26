<?php
session_start();
if ( !isset($_SESSION["codigo"])){
	header("location:erro.php?er=2");
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
	<div id="div-area-principal">
		<div id="postagem" class="clear">
			<?php
			if(isset($_GET["codigo"])){
				$id_usuario_seguir = $_GET["codigo"];
				$id_usuario = $_SESSION["codigo"];
				include_once "conexao.php";
				$conn = conecta_mysql();

				$sql = "INSERT INTO usuarios_seguidores (id_usuario, seguindo_id_usuario) VALUES ('$id_usuario', '$id_usuario_seguir')";
				if(mysqli_query($conn, $sql)){
					echo "<p>Agora você está senguindo este usuário</p>";
				}else{
					echo "<p>Falha ao seguir usuário</p>";
				}


			}
			?>
		</div>

	</div> <!-- Div Área principal -->
</body>
</html>
