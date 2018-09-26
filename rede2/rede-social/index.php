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
	<?php include "includes/menu.php" ?>
	<div id="area-principal">
		<div id="postagem">
			<?php
			
			SESSION_START();
			if( isset( $_SESSION["usuario"] ) ){
				header("location:login_correto.php");
			}else{
				include "includes/login.php";
			}
			?>
		</div> <!-- Postagem-->
	</div> <!-- Area principal-->
</body>
</html>
