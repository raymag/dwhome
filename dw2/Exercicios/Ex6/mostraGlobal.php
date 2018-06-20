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
if( isset($_SESSION["username"]) 
	&& isset($_SESSION["email"]) 
	&& isset($_SESSION["passwd"]) ){
	echo "Nome de Usuário: ".$_SESSION["username"];
	echo "<br/>";
	echo "E-mail: ".$_SESSION["email"];
	echo "<br/>";
	echo "Senha: ".$_SESSION["passwd"];
}
?>
</fieldset>
<a href="criaGlobal.php">Voltar</a><br/>
<a href="limpaGlobal.php">Limpar Variáveis</a>
</body>
</html>