<!DOCTYPE html>
<html><head>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
<title>q8</title>
</head>
<body>
<form action="" method="POST">
<label>Ano: <input type="number" name="ano" min="1"/></labe><br>
<input type="submit" value="Executar"/>
</form>
<fieldset>
<legend>Resultado</legend>
<?php
function bissexto($ano){
	if($ano%4==0 && ($ano % 100 != 0 || $ano % 400 == 0) ){
		return 1;
	}else{
		return 0;
	}
}
if( isset($_POST["ano"]) && is_numeric($_POST["ano"]) ){
	$bissexto = bissexto($_POST["ano"]);
	echo $_POST["ano"];
	if($bissexto==1){
		echo " é um ano bissexto";
	}else{
		echo " não é um ano bissexto";
	}
}
?>
</fieldset>
</body>
</html>