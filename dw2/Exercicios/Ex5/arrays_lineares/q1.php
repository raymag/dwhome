<?php
# ==== Carlos Magno Nascimento ==== #
# ======  Criado em 19/04/18 ====== #
# ====== Comentado em 27/05/18 ==== #
echo "<style>body{background:#cdcdcd;font-size:25px;}</style><center>";//Estiliza a página com css
#===================================>
/*
 A questão pede que se crie um vetor com um 30 casas. Cada casa deve ser preenchida com um nome,
 após isso, ela pede que se imprima na tela, o valor e posição de cada casa desse vetor.
 Como a questão envolve um processo repetitivo, podemos usar estruturas de repetição, como o 'while' e o 'for'.
*/

/*
//A função 'for' é dividida em três partes. No código abaixo, iniciamos uma váriavel 'i' valendo 0.
E vamos repetir o bloco (delimitado por '{' e '}') enquanto 'i' for menor que 30. Sendo que, pra cada
repetição concluída, 'i' é incrementado em 1. 
*/
for($i=0;$i<30;$i++){//Resumindo, sabagaça irá repetir por 30 vezes.
	$nomes[$i] = 'Magno';
}
for($j=0;$j<30;$j++){
	echo "[$j] ".$nomes[$j]."<br/>";
}

?>