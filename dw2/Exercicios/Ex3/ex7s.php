<?php
// Carlos Magno
$custoFabrica = $_POST['custo_fabrica'];
$percDistribuidor = $custoFabrica*0.28;
$impostos = $custoFabrica*0.45;
$custoTotal = $custoFabrica+$percDistribuidor+$impostos;
echo "Custo de Fábrica: R$ $custoFabrica <br/>";
echo "Lucro do Distribuidor: R$ $percDistribuidor <br/>";
echo "Valor dos Impostos: R$ $impostos <br/>";
echo "Custo Final: R$ $custoTotal <br/>";
 ?>
