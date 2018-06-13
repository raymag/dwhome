<?php
# ==== Carlos Magno Nascimento ==== #
# ======  Criado em 19/04/18 ====== #
# ====== Comentado em 03/06/18 ==== #
echo "<style>body{background:#cdcdcd;font-size:25px;}</style><center>";
#===================================>

/*
	A questão pede que façamos 3 vetores (A, B e C). O vetor A conterá os números de 1 a 7 (logo, terá 7 casas).
	O vetor B também terá 7 casas, e receberá os dias da semana como valor. Isto é "Domingo", "Segunda-feira", etc.
	Por fim, o vetor C deve receber o vetor A e B. Ou seja, é como se o vetor C fosse a soma do vetor A e do vetor B.
	Desta maneira, ele terá 7 casas, resultando em algo semelhante a...

	$c[0] = "1 - Domingo";
	$c[1] = "2 - Segunda";
	$c[2] = "2 - Terça";
	[...]
*/

	/*
	Para a resolução desta questão, criamos primeiro o vetor B usando a função "array". Começando do 0, cada casa recebe
	um dia da semana.

	Depois, fizemos um "for" loop que repete 7 vezes também começando do 0.
	Em cada repetição nós definimos um valor para A e um valor para C (sendo C a junção dos valores de B e A).
	*/
$B = array(0=>'Domingo',1=>'Segunda',2=>'Terça',3=>'Quarta',4=>'Quinta',5=>'Sexta',6=>'Sábado');
for($i=0;$i<7;$i++){
	$A[$i] = $i+1;
	$C[$i] = $A[$i]." - ".$B[$i];
}
print_r($C);//No fim, printamos na tela o vetor C usando print_r.
?>