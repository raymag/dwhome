<?php
// Carlos Magno
$distancia = $_GET['distancia'];
$preco = $_GET['preco'];
$litros = $distancia/13;
echo "Distância a ser percorrida: $distancia Km <br/>";
echo "Preço da gasolina: R$ $preco <br/>";
echo "Serão gastos $litros L de gasolina, e o total a ser pago
 será R$ ".($litros*$preco);
 ?>
