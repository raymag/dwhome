<!DOCTYPE html>
<html><head>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
<title>q6</title>
</head>
<body>
<form action="" method="POST">
<label>Texto: <input type="text" name="txt"/></labe><br>
<label>Buscar por: <input type="text" placeholder="Insira um único caractere" name="char" maxLength="1"/></labe><br>
<input type="submit" value="Procurar"/>
</form>
<fieldset>
<legend>Resultado</legend>
<?php
function buscaChar($str, $char){
	$length = strlen($str);
	$qnt = 0;
	for($i=0;$i<=$length;$i++){
		if( $char == substr($str, $i, 1) ){
			$qnt++;
		}
	}
	return $qnt;
}

if( ( isset($_POST["txt"]) && $_POST["txt"] != "" ) 
	&& ( isset($_POST["char"]) && $_POST["char"] != "" ) ){
	echo buscaChar($_POST["txt"], $_POST["char"])." aparições";
}
?>
</fieldset>
</body>
</html>