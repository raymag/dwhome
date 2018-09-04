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
	<div id="div-area-principal">
		<div id="postagem" class="clear">
			<?php print"Hoje é ".date("d/M/Y").", horário atual: ".date("H:i");?>
		</div>
		<?php
			$id_usuario = $_SESSION["codigo"];
			include "conexao.php";
			$conn = conecta_mysql();
			$sql = "SELECT * FROM postagem WHERE id_usuario = '$id_usuario' ORDER BY data_inclusao DESC";
			$query = mysqli_query($conn, $sql);
			$msgs = array();
			while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
				$msgs[] = $row;
			}
			foreach($msgs as $msg){
				echo "<div id='postagem' class='clear tamanho-450'>";
				echo "Código da Postagem: ".$msg["id_postagem"];
				echo "<br>Código do Usuário: ".$msg["id_usuario"];
				echo "<br>Texto do Postagem: ".$msg["texto_postagem"];
				echo "<br>Data da Postagem: ".$msg["data_inclusao"];
				echo "<br><a href='alterar_postagens_confirmar.php?id=".$msg["id_postagem"]."'>Alterar</a>";
				echo "</div>";
			}
			//cada postagem deverá ter o link para alterar a postagem, passando o id para o arquivo alterar_postagens_confirmar.php
		?>
	</div> <!-- Div Área principal -->
</body>
</html>
