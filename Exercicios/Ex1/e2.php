<?php
// Carlos Magno Nascimento

print "1 ---------- <br/><br/>";
$x = 10;
$y = 5;
$z = 2;
echo (($x-5)*$y)-$z;

print "<br/><br/>2 ---------- <br/><br/>";
$f = 40.3;
$r = (($f-32)*5)/9;
echo $r;

print "<br/><br/>3 ---------- <br/><br/>";
$distancia = 39;
$precoGasolina = 5;
$litros = $distancia/13;
echo "Serão gastos $litros L e o custo será de R$ ".$litros*$precoGasolina;

print "<br/><br/>4 ---------- <br/><br/>";
$valor = 300;
$desconto = $valor - ($valor*0.1);
echo "Valor Total Inserido: R$".$valor."<br/>";
echo "Com desconto de 10%: R$ ".$desconto."<br/>";
echo "Parcelas de 3x sem juros: R$ ".($valor/3)."<br/>";
echo "Comissão pelo valor a vista: R$ ".($desconto*0.05);

print "<br/><br/>5 ---------- <br/><br/>";
$c_fabrica = 5000;
$p_distribuidor = $c_fabrica*0.28;
$custo = $c_fabrica;
 ?>
