<?php
# ==== Carlos Magno Nascimento ==== #
# ======  Criado em 19/04/18 ====== #
# ====== Comentado em 03/06/18 ==== #
echo "<style>body{background:#cdcdcd;font-size:25px;}</style><center>";
#===================================>

/*
	A questão requer que façamos um formulário com 10 campos numéricos.
	Os valores deveriam ser guardados em um único vetor. Porém, para sermos
	mais rápidos, nós criamos um vetor que já recebe os números os resultados
	da tabuada do 5 (5, 10, 15, 20, etc).

	Por fim, a questão pede que só se mostre na tela os valores impares do vetor
*/
for($i=0;$i<10;$i++){
	$vector[$i] = $i*5;//vector recebe os 10 números da tabuada do 5.
}
//Aqui, nós lemos as 10 casas do vetor usando o "for" loop. Em cada repetição
//usamos um if para determinar se o valor daquela casa é impar (módulo de 2 que seja diferente de 0).
for($i=0;$i<10;$i++){
	if($vector[$i]%2!=0){//Casa impar, nós mostramos o valor do vetor na tela.
		echo "$vector[$i]<br/>";
	}
}
?>