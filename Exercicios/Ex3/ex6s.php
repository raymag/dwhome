<?php
// Carlos Magno
$capacidade = 325;
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];;
$p3 = $_POST['p3'];;
$p4 = $_POST['p4'];;
$p5 = $_POST['p5'];;
$pesoTotal = $p1+$p2+$p3+$p4+$p5;
echo "Carga Máxima: $capacidade KG. <br/>";
echo "Peso Total: $pesoTotal KG <br/>";
if($capacidade>=$pesoTotal){
  echo "O elevador está liberado para o uso.";
}else{
  echo "A carga máxima do elevador foi excedida.";
}
 ?>
