<!DOCTYPE html>
<html><head>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
<title>q10</title>
</head>
<body>
<form action="" method="POST">
<label>Número: <input type="number" name="num"/></labe><br>
<input type="submit" value="Executar"/>
</form>
<fieldset>
<legend>Resultado</legend>
<?php
function parImpar($num){
	if($num<0){
		$num = -$num;
	}
	if($num%2 == 0 || $num==0){
		return "par";
	}else{
		return "impar";
	}
}
if( isset($_POST["num"]) && is_numeric($_POST["num"])){
	echo $_POST["num"]." é um número ".parImpar($_POST["num"]);
}
?>
</fieldset>
</body>
</html>