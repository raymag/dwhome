<?php
session_start();
include_once "conexao.php";
if ( !isset($_SESSION["codigo"])){
	header("location:erro.php?er=2");
}
$id_usuario = $_SESSION["codigo"];
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
			Digite o Código da postagem que deseja <b>excluir</b> <br/>
			<form action="" method="post">
				<input type="text" name="codigo" size="4"/>
				<input type="submit" value="Excluir"/>
			</form>
		</div>
		<?php
		$conn = conecta_mysql();
		$sql = "SELECT * FROM postagem WHERE id_usuario = '$id_usuario' ORDER BY data_inclusao DESC";
		if($query = mysqli_query($conn, $sql)){
			while($msg = mysqli_fetch_assoc($query)){
				echo "<div id='postagem' class='clear tamanho-450'>";
				echo "Código da Postagem: ".$msg["id_postagem"];
				echo "<br>Código do Usuário: ".$msg["id_usuario"];
				echo "<br>Texto do Postagem: ".$msg["texto_postagem"];
				echo "<br>Data da Postagem: ".$msg["data_inclusao"];
				echo "</div>";
			}
		}

		if(isset($_POST["codigo"][0])){
			$codigo = $_POST["codigo"];
			$sql = "SELECT * FROM postagem WHERE id_postagem = '$codigo' AND id_usuario='$id_usuario'";
			if($query = mysqli_query($conn, $sql)){
				$data = mysqli_fetch_assoc($query);
				if(isset($data["id_postagem"])){

					$sql = "DELETE FROM postagem WHERE id_postagem = '$codigo'";
					if(mysqli_query($conn, $sql)){
						echo "<script>alert('Postagem apagada com sucesso.')</script>";
						header("location:minhas_postagens.php");
					}else{
						echo "<script>alert('Erro ao apagar postagem.')</script>";
					}

				}
			}
		}
		?>
	</div> <!-- Div Área principal -->
</body>
</html>
