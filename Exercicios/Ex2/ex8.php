<?php
// Carlos Magno
$capacidade = 325;
$p1 = 40.5;
$p2 = 57;
$p3 = 108;
$p4 = 62;
$p5 = 79;
$pesoTotal = $p1+$p2+$p3+$p4+$p5;
echo "Carga Máxima: $capacidade KG. <br/>";
echo "Peso Total: $pesoTotal KG <br/>";
if($capacidade>=$pesoTotal){
  echo "O elevador está liberado para o uso.";
}else{
  echo "A carga máxima do elevador foi excedida.";
}
 ?>
