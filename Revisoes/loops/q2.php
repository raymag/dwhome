<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<form action="" method="POST">
<center>
<fieldset>
<legend>Encontrar números primos</legend>
<label>De: <input type="number" name="min"/></label><br/>
<label>Até: <input type="number" name="max"/></label><br/>
<input type="submit" value="Encontrar"/>
</fieldset>
</form><br/>
<?php
if( isset($_POST["min"]) AND isset($_POST["max"]) ){
	$min = $_POST["min"];
	$max = $_POST["max"];
	$total = 0;
	
	//positiva valores se preciso for
	if($min<0){
		$min = -$min;
	}
	if($max<0){
		$max = -$max;
	}
	
	echo "[";
	for($min;$min<=$max;$min++){//roda uma vez para cada numero na faixa de min e max
		
		$cousin = true; //Supoe que o num em questao e primo
		for($sub = $min; --$sub > 1; $sub){//roda uma vez pra cada num no intervalo de 0 ao numero
		if( $min % $sub == 0 ){//testa se o num e primo
			$cousin = false;//se sim, a afirmacao e desmentida
			break;
			}
		}
		if($cousin){//O numero e exibido caso a afirmacao seja verdadeira
			echo "( $min ) ";
			$total++;
		}
	}
	echo "]";
	echo "<br/>Total de <b>$total</b> números primos";
}
?>
</center>
</body>
</html>