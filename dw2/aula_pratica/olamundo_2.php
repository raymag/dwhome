<?php
// concatenação
$nome = "Magno";
$idade = 15;
print"Bom dia $nome";
print "<br/>";
print"Bom dia, eu sou ".$nome." e tenho ".$idade." anos<br/>";

// decremento e incremento
// pre-incrementar / pós-incrementar
$a = 10;
print ++$a;
print "<br/>";
print --$a;
print "<br/>";
// condicional if e else
$mes = 4;
if($mes==4){
  print"Você nasceu no mês de abril.";
}else{
  print("Você não é de abril.");
}
 ?>
