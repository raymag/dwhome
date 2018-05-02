<?php
// Carlos Magno
$total = 300;
$desconto = $total*0.1;
$parcela = $total/3;
$comissao = $desconto*0.05;
echo "Valor total: R$ $total <br/>";
echo "Valor com 10% de desconto: R$ $desconto <br/>";
echo "Valor da Parcela (3x sem jurus): R$ $parcela <br/>";
echo "Valor da comissão do vendedor (5%, caso a vista): R$ $comissao";
 ?>
