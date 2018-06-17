<?php
# ==== Carlos Magno Nascimento ==== #
# ======  Criado em 19/04/18 ====== #
# ====== Comentado em 27/05/18 ==== #
echo "<style>body{background:#cdcdcd;font-size:25px;}</style><center>";
#===================================>
/*
O código abaixo representa uma das maneiras de se definir um vetor associativo.
Vetores associativos são defidos com um par "chave" e "valor". (É igual aos vetores lineares,
porém ao invés de números pra definir os índices, nós usamos algum tipo de texto).
*/
$dados_usuario = array(//A função array define um vetor
	"nome" => $_POST["name"],//Neste caso, "nome" é a chave, e "$_POST["name"] é o valor.
	"senha" => $_POST["passwd"],
	"email" => $_POST["email"],
	"idade" => $_POST["age"],
	"altura" => $_POST["height"]
	);

/*
 Por não usarem chaves númericas, nós precisamos da função 'foreach' para percorrermos as casas
do vetor. $dados_usuario é o nome do vetor, e o termo 'info' após o 'as',
representa neste caso o valor de cada casa.
*/
foreach($dados_usuario as $info){
	echo $info."<br/>";
}
//Nota: 'foreach' funciona de forma semelhante ao 'for'
?>
