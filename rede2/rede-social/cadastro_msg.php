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
    include "includes/menu_logged.php";
    SESSION_START();
    if( !isset($_SESSION["usuario"]) ){
        header("location: index_erro.php?erro=1");
    }
    ?>
	<div id="area-principal">
		<div id="postagem">
        <form action="" method="post">
        <?php echo "<p class='highlight'> Seja bem-vindo, ".$_SESSION["usuario"]."!</p>";?>
        <p><label>Mensagem:<br> <textarea rows="10" cols="25"></textarea></label></p>
        <input type="submit" value="Enviar">
        <input type="reset" value="Cancelar">
        </form>
		</div> <!-- Postagem-->
	</div> <!-- Area principal-->
</body>
</html>
