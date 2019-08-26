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
		$sql = "SELECT id_postagem, texto_postagem, id_usuario, date_format(data_inclusao, '%d, %b, %Y, %T') as data_formato  FROM postagem WHERE id_usuario = '$id_usuario' ORDER BY data_inclusao DESC";
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
			echo "<br>Data da Postagem: ".$msg["data_formato"];
			echo "</div>";
		}
		?>
	</div> <!-- Div Área principal -->
</body>
</html>
