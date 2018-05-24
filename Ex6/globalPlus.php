<!DOCTYPE html>
<html><head>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
<title>q14</title>
</head>
<body>
<fieldset>
<legend>Variaveis Globais do Usuário</legend>
<?php
session_start();
if( isset($_GET["func"]) ){
	if($_GET["func"] == 1
	&& isset($_SESSION["username"]) 
	&& isset($_SESSION["email"]) 
	&& isset($_SESSION["passwd"])){
		echo "Nome de Usuário: ".$_SESSION["username"];
		echo "<br/>";
		echo "E-mail: ".$_SESSION["email"];
		echo "<br/>";
		echo "Senha: ".$_SESSION["passwd"];
	}else{
		unset($_SESSION["username"]);
		unset($_SESSION["email"]);
		unset($_SESSION["passwd"]);
		echo "<p>Valores resetados com sucesso</p>";
	}
	
}
?>
</fieldset>
<a href="criaGlobalPlus.php">Voltar</a><br/>
</body>
</html>