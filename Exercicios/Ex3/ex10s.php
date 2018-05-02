<?php
// Carlos Magno
$salario = $_POST['salario'];
if($salario<=300){
  echo "O salário reajustado é de R$ ".($salario+$salario*0.5);
}else {
  echo "O salário reajustado é de R$ ".($salario+$salario*0.3);
}
 ?>
