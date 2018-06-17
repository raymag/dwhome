<?php
$chico_altura = 1.5;
$chico_growth = 0.2;
$ze_altura = 1.1;
$ze_growth = 0.3;
$anos = 0;
while($ze_altura<=$chico_altura){
  $ze_altura += $ze_growth;
  $chico_altura += $chico_growth;
  $anos++;
}
echo "Serão necessários um total de $anos anos.";
 ?>
