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
	<link rel="stylesheet" href="css/fontawesome/css/all.css">
</head>
<body>
	<?php include "includes/menu-login.php" ?>
	<div id="div-area-principal">
		<div id="postagem" class="clear tamanho-450">
			Escolha Qual Postagem deseja <b>excluir</b> <br/>
			Clique <a href="excluir_postagens-2.php">Aqui</a> para atualizar a página
		</div>
		<?php
		$id_usuario = $_SESSION["codigo"];
		include_once "conexao.php";
		$conn = conecta_mysql();
		$sql = "SELECT id_postagem, texto_postagem, id_usuario, date_format(data_inclusao, '%d, %b, %Y, %T') as data_formato  FROM postagem WHERE id_usuario = '$id_usuario' ORDER BY data_inclusao DESC";
		$query = mysqli_query($conn, $sql);
		$msgs = array();
		while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
			$msgs[] = $row;
		}
		foreach($msgs as $msg){
			$id_postagem = $msg["id_postagem"];
			echo "<div id='postagem' class='clear tamanho-450'>";
			echo "<br>Código do Usuário: ".$msg["id_usuario"];
			echo "<br>Texto do Postagem: ".$msg["texto_postagem"];
			echo "<br>Data da Postagem: ".$msg["data_formato"];
			echo "<a href='excluir_postagens-2.php?id=$id_postagem'><i style='color:#b9c941' class='fas fa-trash-alt'></i>
			</a>";
			echo "</div>";
		}

		if(isset($_GET["id"])){
			$id = $_GET["id"];
			$sql = "DELETE FROM postagem WHERE id_postagem=$id AND id_usuario=$id_usuario";
			if(mysqli_query($conn, $sql)){
				echo "<script>alert('Postagem apagada.');location.href='excluir_postagens-2.php'</script>";
			}else{
				echo "<script>alert('Erro ao apagar postagem.')</script>";
			}
		}
		?>
	</div> <!-- Div Área principal -->
</body>
</html>
