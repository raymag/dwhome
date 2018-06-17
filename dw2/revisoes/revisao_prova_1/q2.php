<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = ($peso/($altura**2));

if($imc<18.5){
  echo "Abaixo do peso";
}
else if($imc >= 18.5 and $imc <= 25){
  echo "Peso normal";
}
else if($imc>25 and $imc<=30){
  echo "Acima do peso";
}
else if($imc>30){
  echo "Obeso";
}
 ?>
