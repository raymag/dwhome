<?php
$lanche = $_POST['lanche'];
$qnt = $_POST['qnt'];

if ($lanche == "100") {
  echo "O total a pagar é R$ ".($qnt*2.50);
}
else if ($lanche == "101") {
  echo "O total a pagar é R$ ".($qnt*3.30);
}
else if ($lanche == "102") {
  echo "O total a pagar é R$ ".($qnt*4.00);
}
else if ($lanche == "103") {
  echo "O total a pagar é R$ ".($qnt*4.50);
}
else if ($lanche == "105") {
  echo "O total a pagar é R$ ".($qnt*3.50);
}
 ?>
