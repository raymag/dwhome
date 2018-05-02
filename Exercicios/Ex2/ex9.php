<?php
// Carlos Magno
$nome1 = "José";
$A = 10;
$B = 18;
$m1 = ($A+$B)/2;
$nome2 = "Marcelo";
$A = 15;
$B = 14;
$m2 = ($A+$B)/2;
$nome3 = "Mariana";
$A = 15;
$B = 14;
$m3 = ($A+$B)/2;

if($m1>$m2){
  if($m1>$m3){
    echo "$nome1, média de $m1 pontos";
  }elseif ($m1==$m3) {
    echo "$nome1 e $nome3 empataram";
  }
}

if($m2>$m1){
  if ($m2>$m3) {
    echo "$nome2, média de $m2 pontos";
  }elseif ($m2==$m3) {
    echo "$nome2 e $nome3 empataram";
  }
}

if($m3>$m1 && $m3>$m2){
  echo "$nome3, média de $m3";
}

if($m1==$m2 && $m1>$m3){
  echo "$nome2 e $nome1 empataram";
}
 ?>
