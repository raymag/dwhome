<?php
# ==== Carlos Magno Nascimento ==== #
# ======  Criado em 19/04/18 ====== #
# ====== Comentado em 03/06/18 ==== #
echo "<style>body{background:#cdcdcd;font-size:25px;}</style><center>";
#===================================>

/*
	A questão pede que façamos um vetor com 30 casas, e que guardemos
	nosso nome, em cada uma dessas casas. No final de tudo, é preciso
	mostrar na tela o nosso nome (o valor da casa do vetor) e a posição
	da casa (índice). Tudo isso deve ser feito usando funções de repetição.

	Para esse exemplo, nós estaremos usando a função "for", mas também poderíamos
	ter feito com a função "while".
*/

/*
	Pra resolver esta questão, podemos fazer uma analogia à uma lista numerada de nomes:

	1 - João
	2 - Maria
	3 - Marcelo
	4 - Thaís
	5 - Joana
	6 - Valdison

	A lista em sí é o vetor, os números representam as várias casas desse vetor (índices) e 
	por fim, os nomes seriam os valores do nosso vetor.

	No nosso caso, usaremos uma variável ($i e $j) pra representar o número de nossas casas.
	Começando do 0, vamos até a casa 29, adicionando o nosso nome como valor.
*/
for($i=0;$i<30;$i++){
	$nomes[$i] = 'Magno';
}
//Para mostrar os valores, faremos a mesma coisa. desta vez mostrando o valor do índice, e o valor da casa.
for($j=0;$j<30;$j++){
	echo "[$j] ".$nomes[$j]."<br/>";
}

?>