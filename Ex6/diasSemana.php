<!DOCTYPE html>
<html><head>
<title>q9</title>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
</head>
<body>
<form action="" method="POST">
<label>Dia da Semana: <input type="number" name="dia" min="1" max="7"/></labe><br>
<input type="submit" value="Executar"/>
</form>
<fieldset>
<legend>Resultado</legend>
<?php
function diaSemana($num){
	switch($num){
		case 1:
			return "Domingo";
			break;
		case 2:
			return "Segunda-Feira";
			break;
		case 3:
			return "Terça-Feira";
			break;
		case 4:
			return "Quarta-Feira";
			break;
		case 5:
			return "Quinta-Feira";
			break;
		case 6:
			return "Sexta-Feira";
			break;
		case 7:
			return "Sábado";
			break;
		default:
			return "Número Inválido";
			break;
	}
}
if( isset($_POST["dia"]) && is_numeric($_POST["dia"]) ){
	echo diaSemana($_POST["dia"]);
}
?>
</fieldset>
</body>
</html>