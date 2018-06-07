<!DOCTYPE html>
<html><head>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
<title>q14</title>
</head>
<body>
<form action="" method="POST">
<label>Nome: <input type="text" name="username"/></label><br/>
<label>E-mail: <input type="email" name="email"/></label><br/>
<label>Senha: <input type="password" name="passwd"/></label><br/>
<input type="submit" value="Executar"/>
</form>
<?php
if( isset($_POST["username"]) 
	&& isset($_POST["email"]) 
	&& isset($_POST["passwd"]) ){
		session_start();
		$_SESSION["username"] = $_POST["username"];
		$_SESSION["email"] = $_POST["email"];
		$_SESSION["passwd"] = $_POST["passwd"];
	}
?>
<fieldset>
<a href="mostraGlobal.php">Mostrar Variáveis de Usuário</a><br/>
<a href="limpaGlobal.php">Limpar Variáveis de Usuário</a>
</fieldset>
</body>
</html>