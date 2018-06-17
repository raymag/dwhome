<?php
$code = $_GET['code'];
$salario = $_GET['salario'];
if($code==101){
  $cargo = 'Gerente';
  $aumento = $salario*1.1;
  $diferenca = $salario*0.1;
  echo "Novo Salário: ".$aumento;
  echo "<br/>";
  echo "Salário antigo: ".$salario;
  echo "<br/>";
  echo "Diferença: ".$diferenca;
}
else if($code==102){
  $cargo = 'Engenheiro';
  $aumento = $salario*1.2;
  $diferenca = $salario*0.2;
  echo "Novo Salário: ".$aumento;
  echo "<br/>";
  echo "Salário antigo: ".$salario;
  echo "<br/>";
  echo "Diferença: ".$diferenca;

}
else if($code==103){
  $cargo = 'Técnico';
  $aumento = $salario*1.3;
  $diferenca = $salario*0.3;
  echo "Novo Salário: ".$aumento;
  echo "<br/>";
  echo "Salário antigo: ".$salario;
  echo "<br/>";
  echo "Diferença: ".$diferenca;

}else{
  $aumento = $salario*1.4;
  $diferenca = $salario*0.4;
  echo "Novo Salário: ".$aumento;
  echo "<br/>";
  echo "Salário antigo: ".$salario;
  echo "<br/>";
  echo "Diferença: ".$diferenca;


}
 ?>
