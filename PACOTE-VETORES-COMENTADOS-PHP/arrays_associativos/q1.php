<?php
# ==== Carlos Magno Nascimento ==== #
# ======  Criado em 19/04/18 ====== #
# ====== Comentado em 03/06/18 ==== #
echo "<style>body{background:#cdcdcd;font-size:25px;}</style><center>";
#===================================>


/*
 A questão pede um formulário com os campos Nome, Senha, Email, Idade e Altura.
 Os valores do formulário devem ser guardados em um vetor chamado $dados_usuario[].
 Esse vetor deve ser associativo, ou seja, seus índices e casas são representados por palavras.
 Ex: 
 	$dados_usuario["nome"] = "Nome enviado pelo formulário";
 	$dados_usuario["senha"] = "Senha enviada pelo formulário";

Depois de criar o vetor, a questão pede que se mostre os valores contidos nele. Para isso, usamos a função
 "foreach" que funciona de maneira similar ao "for" e "while", mas é perfeito para vetores/arrays associativos.
*/


//O código abaixo define o array $dados_usuario[] usando a função array.
$dados_usuario = array(
	"nome" => $_POST["nome"], //"nome" é o índice do vetor, e o termo após a seta é o valor
	"senha" => $_POST["senha"],
	"email" => $_POST["email"],
	"idade" => $_POST["idade"],
	"altura" => $_POST["altura"]
	);

//O código abaixo, passa por todas as casasdo vetor $dados_usuario, e mostra/printa seus valores.
/*
A utilização do "foreach" se dá por:
foreach($vetor_escolhido as $variavel_que_receberá_os_valores){
	//código escolhido//
}
*/
foreach($dados_usuario as $info){
	echo $info."<br/>";
}
?>
