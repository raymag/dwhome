<!DOCTYPE html>
<html><head>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
<title>q7</title>
</head>
<body>
<form action="" method="POST">
<label>Número: <input type="number" name="num" min="1"/></labe><br>
<input type="submit" value="Executar"/>
</form>
<fieldset>
<legend>Resultado</legend>
<?php
function lenNum($num){
	return array(strlen($num), substr($num, 0, 1));
}
if( isset($_POST["num"]) && is_numeric($_POST["num"]) ){
	$lenNum = lenNum($_POST["num"]);
	echo "Este número possuí ".$lenNum[0]." digitos e seu primeiro digito é ".$lenNum[1];
}
?>
</fieldset>
</body>
</html>