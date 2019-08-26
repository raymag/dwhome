<?php
session_start();
if(!isset($_SESSION["codigo"])){
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
		<?php
		include "conexao.php";
		$conn = conecta_mysql();
		if(isset($_GET["id"])){
			$id = $_GET["id"];

			$sql = "SELECT * FROM postagem WHERE id_postagem = '$id'";
			// echo $sql;
			if($query = mysqli_query($conn, $sql)){
				$msg = mysqli_fetch_array($query);
				// echo "<div id='postagem' class='clear tamanho-450'>";
				// echo "Código da Postagem: ".$msg["id_postagem"];
				// echo "<br>Código do Usuário: ".$msg["id_usuario"];
				// echo "<br>Texto do Postagem: ".$msg["texto_postagem"];
				// echo "<br>Data da Postagem: ".$msg["data_inclusao"];
				// echo "</div>";
			}
		}
		//listar a mensagem pelo código recebido aqui
		?>
		<div id="postagem">
			<form method="post">
			<label>Mensagem: <br><textarea name="msg" id="txtarea" autofocus style="resize:none;" cols="30" rows="8"><?php echo $msg["texto_postagem"];
			?> </textarea></label><br>
			<input type="submit" value="Alterar">
			<input type="reset" onclick="document.getElementById('txtarea').innerHTML = ''" value="Cancelar">
			</form>
		</div>
			<?php
			if(isset($_POST["msg"])){
				$text = $_POST["msg"];
				$sql = "UPDATE postagem SET texto_postagem = '$text' WHERE id_postagem = '".$msg["id_postagem"]."'";
				if(mysqli_query($conn, $sql)){
					echo "<script>alert('Mensagem alterada com sucesso')</script>";
					header("Location:minhas_postagens.php");
				}
			}

			?>
	</div> <!-- Div Área principal -->
</body>
</html>
