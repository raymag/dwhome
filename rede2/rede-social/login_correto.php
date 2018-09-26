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

	<?php 
	include_once "includes/menu-login.php";
	include_once "conexao.php";
	$conn = conecta_mysql();
	$userId = $_SESSION["codigo"];
	$sql = "SELECT * FROM postagem WHERE id_usuario = '$userId' ";
	$query = mysqli_query($conn, $sql);
	$postagens = array();
	while($data = mysqli_fetch_array($query, MYSQLI_ASSOC)){
		$postagens[] = $data;
	}
	$sql = "SELECT * FROM usuarios_seguidores WHERE seguindo_id_usuario = '$userId'";
	$query = mysqli_query($conn, $sql);
	$seguidores = array();
	while($data = mysqli_fetch_array($query, MYSQLI_ASSOC)){
		$seguidores[] = $data;
	}
	?>

	<div id="div-area-principal">
		<div id="div-pessoal" class="borda-arredondada">
			<span class="negrito-maior"><?php echo $_SESSION["usuario"] ?></span>
			<br/>
			<span class="italico"><?php echo $_SESSION["email"] ?></span> <br/><br/>
			<hr/><br/>
			<center>
				<table>
					<tr>
						<td width="100px" >TWEETS <br/> <?php echo count($postagens) ?></td>
						<td width="100px">SEGUIDORES <br/> <?php echo count($seguidores) ?></td>
					</tr>
				</table>
			</center>
		</div>
		<div id="div-postagem" class="borda-arredondada">
			<form method="post" action="">
				<p>
					<textarea id="mensagem" required name="mensagem" maxlength="140" cols="50" rows="4"
					placeholder="<?php print "O que você vai postar hoje?"?>"></textarea>
				</p>
				<input type="submit" value="Postar"/>
				<input type="reset" value="Cancelar"/>
			</form>
			<?php
			if(isset($_POST["mensagem"]) && (strlen($_POST["mensagem"])>1)){
				$msg = $_POST["mensagem"];
				include_once "conexao.php";
				$conn = conecta_mysql();
				$sql = "INSERT INTO postagem (id_usuario,texto_postagem) VALUES ('$userId', '$msg')";
				if($query = mysqli_query($conn, $sql)){
					//echo "<script></script>";
					header("Refresh:0");
				}else{
					echo "<script>alert('Mensagem Não Inserida')</script>";
				}
			}

			?>
		</div>
		<div id="div-procurar-pessoa" class="borda-arredondada">
			<br/>
			<a href="procurar_pessoas.php">Procurar pessoas</a>
			<br/><br/>
		</div>
		<div id="postagem" class="clear">
			<?php print"Hoje é ".date("d/M/Y").", horário atual: ".date("H:i");?>
		</div>
		<?php
		$sql = "SELECT usuarios.usuario, postagem.texto_postagem, date_format(postagem.data_inclusao, '%d, %b, %Y, %T')
		 as data_formatada FROM postagem JOIN usuarios ON (usuarios.codigo=postagem.id_usuario)
		 WHERE id_usuario='$id_usuario' OR id_usuario IN (SELECT seguindo_id_usuario FROM usuarios_seguidores WHERE id_usuario=$id_usuario)
		 ORDER BY postagem.data_inclusao DESC";
		if($query = mysqli_query($conn, $sql)){
			$msgs = array();
			while($row = mysqli_fetch_assoc($query)){
				$msgs[] = $row;
			}
			foreach($msgs as $msg){
				echo "<div id='postagem' class='clear tamanho-450'>";	
				echo "<p><i>".$msg["data_formatada"]."</i></p>";
				echo "<p><b>".$msg["usuario"]."</b></p>";
				echo "<p>".$msg["texto_postagem"]."</p>";
				echo "</div>";
			}
		}
		?>
	</div> <!-- Div Área principal -->
</body>
</html>
