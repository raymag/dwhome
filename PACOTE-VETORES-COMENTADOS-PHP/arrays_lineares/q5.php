<?php
# ==== Carlos Magno Nascimento ==== #
# ======  Criado em 19/04/18 ====== #
# ====== Comentado em 03/06/18 ==== #
echo "<style>body{background:#cdcdcd;font-size:25px;}</style><center>";
#===================================>

/*
	A questão pede as mesmas coisas que a questão anterior (q4). Mas desta vez
	é preciso imprimir os valores onde os índices (as casas do vetor) forem ímpares.

	Isto é, se o vetor começar de 0 e ir até a casa 9 (10 posições), somente os valores
	onde a casa for 1, 3, 5, 7, e 9 serão mostrados na tela. Pois estes são os únicos
	índices ímpares.
*/

for($i=0;$i<10;$i++){
	$vector[$i] = $i+1;
}
for($i=0;$i<10;$i++){
	if($i%2!=0){
		echo $vector[$i];
		echo "<br/>";
	}
}
?>