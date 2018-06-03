<?php
# ==== Carlos Magno Nascimento ==== #
# ======  Criado em 19/04/18 ====== #
# ====== Comentado em 03/06/18 ==== #
echo "<style>body{background:#cdcdcd;font-size:25px;}</style><center>";
#===================================>

/*
	A questão pede que se faça a mesma coisa da questão anterior (Criar um formulário com
	os campos nome, senha, email, idade, altura, e salvar tudo no vetor $dados_usuario).
	A diferença é que ela pede que se mostre os valores usando as funções "foreach", "var_dump"
	e "print_r".
*/

/*
	Aqui, novamente definimos o vetor/array dados usuário com a função "array". 
	Note que também poderíamos ter definido esse vetor, de outras maneiras.
	Como, por exemplo:
		$dados_usuario["nome"] = $_POST["nome"];
		$dados_usuario["senha"] = $_POST["senha"];
*/
$dados_usuario = array(
	"nome" => $_POST["nome"],
	"senha" => $_POST["senha"],
	"email" => $_POST["email"],
	"idade" => $_POST["idade"],
	"altura" => $_POST["altura"]
	);

/*
	Para deixar a coisa mais clara, vamos separar os resultados de cada função em diferentes
	fieldsets (aquelas linhas que separam diferentes seções em um formulário).
*/

echo "<fieldset>";//Abrimos um fieldset
foreach($dados_usuario as $info){
	echo $info."<br/>";
}
echo "</fieldset>";//Fechamos um fieldset
echo "<fieldset>";
var_dump($dados_usuario);//Mostramos o valor do array usando var_dump
echo "</fieldset>";
echo "<fieldset>";
print_r($dados_usuario);//Mostramos o valor do vetor com print_r
echo "</fieldset>";
?>