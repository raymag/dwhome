<?php
session_start();
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
			<form method="post">
			<fieldset>
			<p><input type="text" autofocus name="usuario" size=40 placeholder="Quem você está procurando?" id="">
			<input type="submit" value="Procurar">
			</p>
			</fieldset>
			</form>
		</div>
		<?php
		if(isset($_POST["usuario"][0])){
			include_once "conexao.php";
			$conn = conecta_mysql();
			$usuario = $_POST["usuario"];
			$sql = "SELECT usuario, codigo FROM usuarios WHERE usuario LIKE '%$usuario%' AND codigo <> '$id_usuario'";
			if($query = mysqli_query($conn, $sql)){
				$usuarios = array();
				while($row = mysqli_fetch_assoc($query)){
					$usuarios[] = $row;
				}
				foreach($usuarios as $usuario){
					echo "<div id='postagem' class='clear'>";
					echo "<span>Nome do Usuário: <b>".$usuario["usuario"]."</b></span>";
					$codigo_seguindo = $usuario["codigo"];
					$sql = "SELECT * FROM usuarios_seguidores WHERE id_usuario = '$id_usuario' AND seguindo_id_usuario = '$codigo_seguindo'";
					if($query = mysqli_query($conn, $sql)){
						$data = mysqli_fetch_assoc($query);
						if(isset($data["id_usuario"])){
							echo "<span><a href='procurar_pessoas_deixar_seguir.php?codigo=$codigo_seguindo'>Deixar de seguir</a></span>";
						}else{
							echo "<span><a href='procurar_pessoas_seguir.php?codigo=$codigo_seguindo'>Seguir</a></span>";
						}
					}
					echo "</div>";
				}
				if(count($usuarios)==0){
					echo "<div id='postagem' class='clear'><p>Nenhum usuário foi encontrado... </p></div>";
				}
			}
		}
		?>
	</div> <!-- Div Área principal -->
</body>
</html>
