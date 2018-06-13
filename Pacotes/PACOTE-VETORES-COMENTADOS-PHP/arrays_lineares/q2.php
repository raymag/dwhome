<?php
# ==== Carlos Magno Nascimento ==== #
# ======  Criado em 19/04/18 ====== #
# ====== Comentado em 03/06/18 ==== #

echo "<style>body{background:#cdcdcd;font-size:25px;}</style><center>";
#===================================>

/*
	A questão pede que façamos um vetor receber todos os números pares de 1 a 100.
	Ou seja, um vetor de 50 casas, pois de 1 a 100, há 50 números pares.

	Para isso faremos um laço de repetição ("for" loop) que vai repetir de 1 a 100
	(usaremos $num para contar as repetições).
	Pra cada repetição, usaremos um "if" (estrutura condicional) pra saber se o número
	da repetição é par. Caso seja par, adicionaremos ele no nosso vetor ($vector[]).

	Note, que precisamos de uma outra variável para contar o número de casas do vetor.
	Usaremos a variável $count para tal.
*/
$count = 0;
for($num = 1; $num<=100;$num++){
	if($num%2==0){//Caso $num dividido por 2, não tenha resto, significa que ele é par.
		$vector[$count++] = $num;//adicionamos $num ao vetor, e aumentamos o número de casas com $count++
		};
}
//aqui, fazemos outro "for" loop, que repetirá 50 vezes (começando do 0), em cada repetição, nós mostramos
//o valor da respectiva casa do vetor.
for($i = 0;$i<50;$i++){
	echo "[$i] ".$vector[$i]."<br/>";
}
?>