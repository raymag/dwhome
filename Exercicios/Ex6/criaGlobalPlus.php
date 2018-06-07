<!DOCTYPE html>
<html><head>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
<title>q15</title>
</head>
<body>
<form action="" method="POST">
<label>Nome: <input type="text" name="username"/></label><br/>
<label>E-mail: <input type="email" name="email"/></label><br/>
<label>Senha: <input type="password" name="passwd"/></label><br/>
<input type="submit" value="Executar"/>
</form>
<form action="globalPlus.php" method="GET">
<fieldset>
<label>Em Seguida: <select name="func">
	<option value="1">Mostrar Valores</option>
	<option value="2">Resetar Valores</option>
</select> </label><br/>
<input type="submit" value="Executar"/>
</fieldset>
</form>
<?php
if( isset($_POST["username"]) 
	&& isset($_POST["email"]) 
	&& isset($_POST["passwd"]) ){
		session_start();
		$_SESSION["username"] = $_POST["username"];
		$_SESSION["email"] = $_POST["email"];
		$_SESSION["passwd"] = $_POST["passwd"];
		//header("Location: globalPlus.php?func=".$_POST["posglob"]);
	}
?>
</body>
</html>