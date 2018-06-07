<!DOCTYPE html>
<html><head>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
<title>q14</title>
</head>
<body>
<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["email"]);
unset($_SESSION["passwd"]);
echo "<p>Variáveis Deletadas</p>";
?>
<fieldset>
<a href="criaGlobal.php">Gravar Variáveis de Usuário</a><br/>
<a href="limpaGlobal.php">Limpar Variáveis de Usuário</a>
</fieldset>
</body>
</html>