<?php
// Carlos Magno
$altura = $_POST['altura'];
$sexo = $_POST['sexo'];
if($sexo=="F"){
  $peso = (62.1*$altura)-44.7;
  echo "O peso ideal é $peso";
}
if($sexo=="M"){
  $peso = (72.7*$altura)-58;
  echo "O peso ideal é $peso";
}
 ?>
