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
	$sql = "SELECT COUNT(*) as n FROM postagem WHERE id_usuario = '$userId' ";
	$query = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($query, MYSQLI_ASSOC);
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
						<td width="100px" >TWEETS <br/> <?php echo $data["n"] ?></td>
						<td width="100px">SEGUIDORES <br/> 0</td>
					</tr>
				</table>
			</center>
		</div>
		<div id="div-postagem" class="borda-arredondada">
			<form method="post" action="">
				<p>
					<textarea id="mensagem" name="mensagem" maxlength="140" cols="50" rows="4"
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
					echo "<script>alert('Mensagem Inserida')</script>";
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
	</div> <!-- Div Área principal -->
</body>
</html>
