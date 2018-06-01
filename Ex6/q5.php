<!DOCTYPE html>
<html><head>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
<title>q5</title>
</head>
<body>
<form action="" method="POST">
<label>1º Texto: <input type="text" name="txt1"/></label><br/>
<label>2º Texto: <input type="text" name="txt2"/></label><br/>
<input type="submit" value="Comparar"/>
</form>
<fieldset>
<legend>Resultado</legend>
<?php
function comparaStr($str1, $str2){
	if(strtoupper($str1) == strtoupper($str2)){
		return "IGUAL";
	}else{
		return "DIFERENTE";
	}
}
if( ( isset($_POST["txt1"]) && $_POST["txt1"] != "" ) 
	&& ( isset($_POST["txt2"]) && $_POST["txt2"] != ""  )){
	echo comparaStr($_POST["txt1"], $_POST["txt2"]);
}
?>
</fieldset>
</body>
</html>