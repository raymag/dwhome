<!DOCTYPE html>
<html><head>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
<title>q13</title>
</head>
<body>
<form action="" method="POST">
<label>Palavra: <input type="text" name="word"/></labe><br>
<input type="submit" value="Executar"/>
</form>
<fieldset>
<legend>Resultado</legend>
<?php
if( isset($_POST["word"]) ){
	if($_POST["word"]=="direcionar"){
		header("Location: http://www.google.com.br/");
	}
}
?>
</fieldset>
</body>
</html>